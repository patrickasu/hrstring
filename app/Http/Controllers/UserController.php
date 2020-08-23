<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Repositories\UserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Role;
use App\Models\User;
use App\Models\Course;

class UserController extends AppBaseController
{
    /** @var  UserRepository */
    private $userRepository;

    public function __construct(UserRepository $userRepo)
    {
        $this->middleware('auth');
        $this->userRepository = $userRepo;
    }

    /**
     * Display a listing of the User.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $users = $this->userRepository->all();

        $courses = Course::all();
        return view('users.index')
            ->with('users', $users)
            ->with('courses', $courses);
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create()
    {
        // return view('users.create');
        $users = User::all();
        $roles = Role::all();
        return view('users.create')
        ->with('users', $users)
        ->with('roles', $roles);
    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {
        $input = $request->all();

        $input = $request->all();
        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }
        $user = $this->userRepository->create($input, $request);
        Flash::success('User saved successfully.');

        return redirect(route('users.index'));
    }

    // public function update($id, UpdateUserRequest $request)
    // {
    //     $user = $this->userRepository->find($id);

    //     if (empty($user)) {
    //         Flash::error('User not found');

    //         return redirect(route('users.index'));
    //     }

    //     // 'password' => Hash::make($data['password']),
    //     // $user = $this->userRepository->update($request->all(), $id);
    //     $input = $request->all();
    //     if(!empty($input['password'])){
    //         $input['password'] = Hash::make($input['password']);
    //     }
    //     $user = $this->userRepository->update($input, $id);

    //     Flash::success('User updated successfully.');

    //     return redirect(route('users.index'));
    // }

    /**
     * Display the specified User.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        $courses = Course::all();
        $users = User::all();
        return view('users.show')
        ->with('user', $user)
        ->with('users', $users)
        ->with('courses', $courses);
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }
        $roles = Role::all();
        return view('users.edit')
        ->with('user', $user)
        ->with('roles', $roles);
        // return view('users.edit')->with('user', $user);
    }

    /**
     * Update the specified User in storage.
     *
     * @param int $id
     * @param UpdateUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserRequest $request)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        // 'password' => Hash::make($data['password']),
        // $user = $this->userRepository->update($request->all(), $id);
        $input = $request->all();
        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }
        $user = $this->userRepository->update($input, $id);

        Flash::success('User updated successfully.');

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified User from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        $this->userRepository->delete($id);

        Flash::success('User deleted successfully.');

        return redirect(route('users.index'));
    }
}
