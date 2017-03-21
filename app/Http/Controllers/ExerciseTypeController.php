<?php

namespace iHint\Http\Controllers;

use Illuminate\Http\Request;

use iHint\Http\Requests;
use iHint\Http\Requests\AdminExerciseTypeRequest;
use iHint\Http\Controllers\Controller;
use iHint\Repositories\ExerciseTypeRepository;

class ExerciseTypeController extends Controller
{

    /**
     * @var ExerciseTypeRepository
     */
    private $repository;

    public function __construct(ExerciseTypeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $exercisetypes = $this->repository->paginate();

        return view('admin.exercisetype.index', compact('exercisetypes'));
    }

    public function create()
    {
        return view('admin.exercisetype.create');
    }

    public function store(AdminExerciseTypeRequest $request)
    {
        $data = $request->all();
        $this->repository->create($data);

        return redirect()->route('admin.exercisetype.index');
    }

    public function edit($id)
    {
        $exercisetype = $this->repository->find($id);

        return view('admin.exercisetype.edit', compact('exercisetype'));
    }

    public function update(AdminExerciseTypeRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);

        return redirect()->route('admin.exercisetype.index');
    }

    public function destroy($id)
    {
        $this->repository->delete($id);
        
        return redirect()->route('admin.exercisetype.index');
    }
}
