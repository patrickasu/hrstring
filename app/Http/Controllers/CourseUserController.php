<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCourseUserRequest;
use App\Http\Requests\UpdateCourseUserRequest;
use App\Repositories\CourseUserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\User;
use App\Models\Course;

class CourseUserController extends AppBaseController
{
    /** @var  CourseUserRepository */
    private $courseUserRepository;

    public function __construct(CourseUserRepository $courseUserRepo)
    {
        $this->courseUserRepository = $courseUserRepo;
    }

    /**
     * Display a listing of the CourseUser.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $courseUsers = $this->courseUserRepository->all();

       

        $course = Course::all();
        
        return view('course_users.index')
            ->with('courseUsers', $courseUsers)
            ->with('course', $course);
    }

    /**
     * Show the form for creating a new CourseUser.
     *
     * @return Response
     */
    public function create()
    {

        $users = User::all();
        $courses = Course::all();
        return view('course_users.create')
        ->with('users', $users)
        ->with('courses', $courses);
    }

    /**
     * Store a newly created CourseUser in storage.
     *
     * @param CreateCourseUserRequest $request
     *
     * @return Response
     */
    public function store(CreateCourseUserRequest $request)
    {
        $input = $request->all();

        $courseUser = $this->courseUserRepository->create($input);

        Flash::success('Course User saved successfully.');

        return redirect(route('courseUsers.index'));
    }

    /**
     * Display the specified CourseUser.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $courseUser = $this->courseUserRepository->find($id);

        if (empty($courseUser)) {
            Flash::error('Course User not found');

            return redirect(route('courseUsers.index'));
        }

        $courses = Course::all();
        //dd($courseUser);
        return view('course_users.show')
        ->with('courseUser', $courseUser)
        ->with('courses', $courses);
    }

    /**
     * Show the form for editing the specified CourseUser.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $courseUser = $this->courseUserRepository->find($id);

        if (empty($courseUser)) {
            Flash::error('Course User not found');

            return redirect(route('courseUsers.index'));
        }

        return view('course_users.edit')->with('courseUser', $courseUser);
    }

    /**
     * Update the specified CourseUser in storage.
     *
     * @param int $id
     * @param UpdateCourseUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCourseUserRequest $request)
    {
        $courseUser = $this->courseUserRepository->find($id);

        if (empty($courseUser)) {
            Flash::error('Course User not found');

            return redirect(route('courseUsers.index'));
        }

        $courseUser = $this->courseUserRepository->update($request->all(), $id);

        Flash::success('Course User updated successfully.');

        return redirect(route('courseUsers.index'));
    }

    /**
     * Remove the specified CourseUser from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $courseUser = $this->courseUserRepository->find($id);

        if (empty($courseUser)) {
            Flash::error('Course User not found');

            return redirect(route('courseUsers.index'));
        }

        $this->courseUserRepository->delete($id);

        Flash::success('Course User deleted successfully.');

        return redirect(route('courseUsers.index'));
    }
}
