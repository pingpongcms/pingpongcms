<?php namespace Cms\Api\Http\Controllers;

use Cms\Api\Http\Requests\Users\CreateUserRequest;
use Cms\Api\Http\Requests\Users\UpdateUserRequest;
use Cms\Api\Repositories\Users\UserRepository;
use Illuminate\Http\Request;
use Pingpong\Modules\Routing\Controller;

class UsersController extends Controller
{
    
    protected $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return $this->repository->all();
    }

    public function store(CreateUserRequest $request)
    {
        return $this->repository->create($request->all());
    }

    public function update(UpdateUserRequest $request, $id)
    {
        $user = $this->repository->find($id);

        $user->update($request->all());

        return $user;
    }

    public function destroy($id)
    {
        $user = $this->repository->find($id);

        $user->delete();

        return $user;
    }
}
