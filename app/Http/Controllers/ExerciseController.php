<?php

namespace iHint\Http\Controllers;

use Illuminate\Http\Request;

use iHint\Http\Requests;
use iHint\Http\Requests\AdminExerciseRequest;
use iHint\Http\Controllers\Controller;
use iHint\Repositories\ExerciseRepository;
use iHint\Models\ExerciseType;
use iHint\Models\Hint;

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
        $exercises = $this->repository->paginate();

        return view('user.exercises.listExercises', compact('exercises'));   
    }

    public function performExercise($id)
    {
        $exercise = $this->repository->find($id);
        $hints = Hint::all();

        return view('user.exercises.performExercise', compact('exercise', 'hints'));
    }
}
