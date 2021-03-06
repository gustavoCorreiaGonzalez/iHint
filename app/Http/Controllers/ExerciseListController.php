<?php

namespace iHint\Http\Controllers;

use Illuminate\Http\Request;

use iHint\Http\Requests;
use iHint\Http\Requests\AdminExerciseListRequest;
use iHint\Http\Controllers\Controller;
use iHint\Repositories\ExerciseListRepository;
use iHint\Models\Exercise;

class ExerciseListController extends Controller
{

    /**
     * @var ExerciseListRepository
     */
    private $repository;

    public function __construct(ExerciseListRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $exerciselists = $this->repository->paginate();

        return view('admin.exerciselist.index', compact('exerciselists'));
    }

    public function create()
    {
        $exercises = Exercise::all();

        return view('admin.exerciselist.create', compact('exercises'));
    }

    public function store(AdminExerciseListRequest $request)
    {
        $data = $request->all();

        $data['exercises'] = serialize($data['exercises']);

        $this->repository->create($data);

        return redirect()->route('admin.exerciselist.index');
    }

    public function edit($id)
    {
        $exercises = Exercise::all();

        $exerciselist = $this->repository->find($id);

        return view('admin.exerciselist.edit', compact('exerciselist','exercises'));
    }

    public function update(AdminExerciseListRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);

        return redirect()->route('admin.exerciselist.index');
    }

    public function destroy($id)
    {
        $this->repository->delete($id);
        
        return redirect()->route('admin.exerciselist.index');
    }
}
