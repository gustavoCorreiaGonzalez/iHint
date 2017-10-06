<?php

namespace iHint\Http\Controllers;

use Illuminate\Http\Request;

use iHint\Http\Requests;
use iHint\Http\Requests\AdminExerciseRequest;
use iHint\Http\Controllers\Controller;
use iHint\Repositories\ExerciseRepository;
use iHint\Models\ExerciseType;
use iHint\Models\Hint;
use iHint\Models\Experiment;
use BD;
use Auth;

class ExerciseController extends Controller
{

    /**
     * @var ExerciseRepository
     */
    private $repository;

    public function __construct(ExerciseRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $exercises = $this->repository->paginate();
        $types = ExerciseType::pluck('type', 'id');

        return view('admin.exercises.index', compact('exercises', 'types'));
    }

    public function create()
    {
        $types = ExerciseType::pluck('type', 'id');

        return view('admin.exercises.create', compact('types'));
    }

    public function store(AdminExerciseRequest $request)
    {
        $data = $request->all();

        $data['answer'] = serialize($data['answer']);

        $this->repository->create($data);

        return redirect()->route('admin.exercises.index');
    }

    public function edit($id)
    {
        $exercise = $this->repository->find($id);
        $types = ExerciseType::pluck('type', 'id');

        return view('admin.exercises.edit', compact('exercise', 'types'));
    }

    public function update(AdminExerciseRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);

        return redirect()->route('admin.exercises.index');
    }

    public function destroy($id)
    {
        $this->repository->delete($id);

        return redirect()->route('admin.exercises.index');
    }

    public function listExercises()
    {
        $usuario_id = \Auth::user()->id;

        $exercises = \DB::table('exercises')
            ->whereNotIn('id', function ($query) use ($usuario_id) {
                $query->select(\DB::raw('exercise_id'))
                    ->from('answers')
                    ->whereRaw('exercise_id = exercises.id AND is_correct = 1 AND user_id = '.$usuario_id);
            })
            ->paginate();

        return view('user.exercises.listExercises', compact('exercises'));
    }

    public function performExercise($id)
    {
        $exercise = $this->repository->find($id);

        $usuario_id = \Auth::user()->id;

        $hints = \DB::table('hints')
            ->where('user_id', '!=', $usuario_id)
            ->whereNotIn('id', function ($query) use ($exercise, $usuario_id) {
                $query->select(\DB::raw('hint_id'))
                    ->from('log_hints')
                    ->whereRaw('user_id = '.$usuario_id.' AND exercise_id = '.$exercise->id);
            })
            ->inRandomOrder()
            ->get();

        $experiment = \DB::table('experiments')->first();

        return view('user.exercises.performExercise', compact('exercise', 'hints', 'experiment'));
    }

}
