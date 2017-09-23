<?php

namespace iHint\Http\Controllers;

use Illuminate\Http\Request;

use iHint\Http\Requests;
use iHint\Http\Requests\AnswerRequest;
use iHint\Http\Controllers\Controller;
use iHint\Repositories\AnswerRepository;
use iHint\Models\Exercise;
use Auth;

class AnswerController extends Controller
{

    /**
     * @var AnswerRepository
     */
    private $repository;

    public function __construct(AnswerRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $answers = $this->repository->paginate();

        return view('admin.answers.index', compact('answers'));
    }

    public function create()
    {
        return view('admin.answers.create');
    }

    public function store(AnswerRequest $request)
    {
        $data = $request->all();
        $this->repository->create($data);

        return redirect()->route('admin.answers.index');
    }

    public function edit($id)
    {
        $answer = $this->repository->find($id);

        return view('admin.answers.edit', compact('answer'));
    }

    public function update(AnswerRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);

        return redirect()->route('admin.answers.index');
    }

    public function destroy($id)
    {
        $this->repository->delete($id);

        return redirect()->route('admin.answers.index');
    }

    public function sendAnswer(AnswerRequest $request)
    {

        $user_id = $request->input('user_id');

        $exercise_id = $request->input('exercise_id');

        $storage_path = storage_path().'/exercises/user_'.$user_id.'/exercise_'.$exercise_id;

        $files_in_directory = glob($storage_path.'/*.c*');

        if ($request->hasFile('answer')) {
            $file = $request->file('answer');

            $file_name = $file->getClientOriginalName();

            $amount_of_files = count($files_in_directory) + 1;

            $file_name = $amount_of_files.'_attempt_'.$file_name;
        } else {
            $file = $request->file('answer');

            $file_name = $file->getClientOriginalName();

            $file_name = '1_attempt_'.$file_name;
        }

        $data = $request->all();

        $data['answer'] = $storage_path.'/'.$file_name;

        $file->move($storage_path, $file_name);

        $metrics = AnswerController::caluculateMetrics($exercise_id, $storage_path, $file_name);

        $data = array_collapse([$data, $metrics]);

        $result = AnswerController::validateExercise($exercise_id, $storage_path, $file_name);

        if ($result == 100) {

            $data = array_add($data, 'is_correct', 1);

            $this->repository->create($data);

            return redirect()->route('user.hints.create',['id' => $exercise_id])->with('success', 'Exercício Enviado com Sucesso!');
        } else {
            $data = array_add($data, 'is_correct', 0);

            $this->repository->create($data);

            return back()->with('failure', $result);
        }

        /* O que tem pra fazer ainda

        Cada submissão, tanto correta ou incorreta, é gravada no banco de dados na forma
        de log, sendo salvo os dados: a usuário que realizou o exercício, todas as submissões, os erros
        cometidos, o tempo demorado para obter sucesso no exercício, data e dicas utilizadas.
        */

    }

    public function validateExercise($exercise_id, $storage_path, $file_name)
    {
        $exercise = Exercise::find($exercise_id);

        $answer = unserialize($exercise['answer']);

        $number_of_answers = count($answer);

        if ($exercise_id != 6) {
            exec('gcc '.$storage_path.'/'.$file_name.' -o '.$storage_path.'/teste');
        } else {
            exec('gcc '.$storage_path.'/'.$file_name.' -o '.$storage_path.'/teste -lm');
        }

        $number_of_hits = 0;

        for ($i = 0; $i < $number_of_answers; $i++) {
            $result = exec('cd '.$storage_path.' && ./teste '.$answer[$i]['answerInput']);

            if ($result == $answer[$i]['answerOutput'])
                $number_of_hits++;
        }

        $percentage_of_hit = ($number_of_hits/$number_of_answers)*100;

        return $percentage_of_hit;
    }

    public function caluculateMetrics($exercise_id, $storage_path, $file_name)
    {
        exec('cd '.$storage_path.' && cccc --xml_outfile=saida.xml "'.$file_name.'"');

        $xml = \XmlParser::load($storage_path.'/saida.xml');
        $metrics = $xml->parse([
            'number_of_modules' => ['uses' => 'project_summary.number_of_modules::value'],
            'lines_of_code' => ['uses' => 'project_summary.lines_of_code::value'],
            'cyclomatic_complexity' => ['uses' => 'project_summary.McCabes_cyclomatic_complexity::value'],
        ]);

        return $metrics;
    }

    public function usersSolucions($exercise_id)
    {
        $user_id = \Auth::user()->id;

        // $result = \DB::table('answers')
        //     ->join('exercises', 'answers.exercise_id', '=', 'exercises.id')
        //     ->select('answers.answer', 'answers.user_id', 'exercises.enunciation')
        //     ->whereRaw('answers.exercise_id = '.$exercise_id.' AND answers.user_id != '.$user_id)
        //     ->inRandomOrder()
        //     ->first();

        return redirect()->route('user.exercises.listExercises')->with('success', 'Exercício e Dica Enviados com Sucesso!');

        // if ($result == null) {
        //     return redirect()->route('user.exercises.listExercises')->with('success', 'Successfully Sent Exercise and Hint!');
        // } else {
        //     $answer = \File::get($result->answer);

        //     $user_id_exercise = $result->user_id;

        //     $enunciation = $result->enunciation;

        //     return view('user.exercises.users_solucions', compact('answer', 'user_id_exercise', 'enunciation' , 'exercise_id'));
        // }
    }
}


// astyle -> formatação do código
