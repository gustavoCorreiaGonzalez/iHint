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

        //$hints = $hints->with('user_id', Auth::user()->id);

        //dd($hints);
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

        return redirect()->route('user.exercises.listExercises')->with('success', 'Exercício e Dica enviado com sucesso!');
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

}
