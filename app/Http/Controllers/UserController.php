<?php

namespace iHint\Http\Controllers;

use Illuminate\Http\Request;

use iHint\Http\Requests;
use iHint\Http\Requests\AdminUserRequest;
use iHint\Http\Controllers\Controller;
use iHint\Repositories\UserRepository;

class UserController extends Controller
{

    /**
     * @var UserRepository
     */
    private $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $users = $this->repository->paginate();

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(AdminUserRequest $request)
    {
        $data = $request->all();
        $this->repository->create($data);

        return redirect()->route('admin.users.index');
    }

    public function edit($id)
    {
        $user = $this->repository->find($id);

        return view('admin.users.edit', compact('user'));
    }

    public function update(AdminUserRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);

        return redirect()->route('admin.users.index');
    }

    public function destroy($id)
    {
        $this->repository->delete($id);
        
        return redirect()->route('admin.users.index');
    }
}
