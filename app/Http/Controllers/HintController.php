<?php

namespace iHint\Http\Controllers;

use Illuminate\Http\Request;

use iHint\Http\Requests;
use iHint\Http\Requests\HintRequest;
use iHint\Http\Controllers\Controller;
use iHint\Repositories\HintRepository;
use Auth;

class HintController extends Controller
{

    /**
     * @var HintRepository
     */
    private $repository;

    public function __construct(HintRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $hints = $this->repository->paginate();

        return view('user.hints.index', compact('hints'));
    }

    public function create($exercise_id)
    {
        return view('user.hints.create', compact('exercise_id'));
    }

    public function store(HintRequest $request)
    {
        $data = $request->all();
        $this->repository->create($data);

        $exercise_id = $data['exercise_id'];

        return redirect()->route('user.exercises.usersSolucions', compact('exercise_id'))->with('success', 'Dica Enviada com Sucesso!');
    }

    public function edit($id)
    {
        $hint = $this->repository->find($id);

        return view('user.hints.edit', compact('hint'));
    }

    public function update(HintRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);

        return redirect()->route('user.hints.index');
    }

    public function destroy($id)
    {
        $this->repository->delete($id);

        return redirect()->route('user.hints.index');
    }

    public function storeUsersSolucions(HintRequest $request)
    {
        $data = $request->all();
        $this->repository->create($data);

        $exercise_id = $data['exercise_id'];

        return redirect()->route('user.exercises.listExercises')->with('success', 'Successfully Sent Exercise and Hint!');
    }
}
