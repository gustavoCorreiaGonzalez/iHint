<?php

namespace iHint\Http\Controllers;

use Illuminate\Http\Request;

use iHint\Http\Requests;
use iHint\Http\Requests\LogHintRequest;
use iHint\Http\Controllers\Controller;
use iHint\Repositories\LogHintRepository;
use Auth;

class LogHintController extends Controller
{

    /**
     * @var LogHintRepository
     */
    private $repository;

    public function __construct(LogHintRepository $repository)
    {
        $this->repository = $repository;
    }

    public function store(LogHintRequest $request)
    {
        $data = $request->all();
        
        $this->repository->create($data);

        $id = $data['exercise_id'];

        return redirect()->route('user.exercises.performExercise', compact('id'))->with('logHintSuccess', 'Dica '.$data['hint_id'].' utilizada!');
    }
}
