<?php

namespace iHint\Http\Controllers;

use Illuminate\Http\Request;

use iHint\Http\Requests;
use iHint\Http\Requests\ExperimentRequest;
use iHint\Http\Controllers\Controller;
use iHint\Repositories\ExperimentRepository;
use Auth;

class ExperimentController extends Controller
{

    /**
     * @var ExperimentRepository
     */
    private $repository;

    public function __construct(ExperimentRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $experiments = $this->repository->paginate();

        return view('admin.experiments.index', compact('experiments'));
    }

    public function create()
    {
        return view('admin.experiments.create');
    }

    public function store(ExperimentRequest $request)
    {
      $data = $request->all();
      $this->repository->create($data);

      return redirect()->route('admin.experiments.index');
    }

    public function edit($id)
    {
        $experiment = $this->repository->find($id);

        return view('admin.experiments.edit', compact('experiment'));
    }

    public function update(ExperimentRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);

        return redirect()->route('admin.experiments.index');
    }

    public function destroy($id)
    {
        $this->repository->delete($id);

        return redirect()->route('admin.experiments.index');
    }

  }
