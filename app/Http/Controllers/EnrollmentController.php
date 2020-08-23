<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEnrollmentRequest;
use App\Http\Requests\UpdateEnrollmentRequest;
use App\Repositories\EnrollmentRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\User;
use App\Models\Course;


class EnrollmentController extends AppBaseController
{
    /** @var  EnrollmentRepository */
    private $enrollmentRepository;

    public function __construct(EnrollmentRepository $enrollmentRepo)
    {
        $this->enrollmentRepository = $enrollmentRepo;
    }

    /**
     * Display a listing of the Enrollment.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $enrollments = $this->enrollmentRepository->all();

        return view('enrollments.index')
            ->with('enrollments', $enrollments);
    }

    /**
     * Show the form for creating a new Enrollment.
     *
     * @return Response
     */
    public function create()
    {
        $users = User::all();
        $courses = Course::all();
        return view('enrollments.create')
        ->with('users', $users)
        ->with('courses', $courses);
    }

    /**
     * Store a newly created Enrollment in storage.
     *
     * @param CreateEnrollmentRequest $request
     *
     * @return Response
     */
    public function store(CreateEnrollmentRequest $request)
    {
        $input = $request->all();

        $enrollment = $this->enrollmentRepository->create($input);

        Flash::success('Enrollment saved successfully.');

        return redirect(route('enrollments.index'));
    }

    /**
     * Display the specified Enrollment.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $enrollment = $this->enrollmentRepository->find($id);

        if (empty($enrollment)) {
            Flash::error('Enrollment not found');

            return redirect(route('enrollments.index'));
        }

        return view('enrollments.show')->with('enrollment', $enrollment);
    }

    /**
     * Show the form for editing the specified Enrollment.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $enrollment = $this->enrollmentRepository->find($id);

        if (empty($enrollment)) {
            Flash::error('Enrollment not found');

            return redirect(route('enrollments.index'));
        }

        return view('enrollments.edit')->with('enrollment', $enrollment);
    }

    /**
     * Update the specified Enrollment in storage.
     *
     * @param int $id
     * @param UpdateEnrollmentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEnrollmentRequest $request)
    {
        $enrollment = $this->enrollmentRepository->find($id);

        if (empty($enrollment)) {
            Flash::error('Enrollment not found');

            return redirect(route('enrollments.index'));
        }

        $enrollment = $this->enrollmentRepository->update($request->all(), $id);

        Flash::success('Enrollment updated successfully.');

        return redirect(route('enrollments.index'));
    }

    /**
     * Remove the specified Enrollment from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $enrollment = $this->enrollmentRepository->find($id);

        if (empty($enrollment)) {
            Flash::error('Enrollment not found');

            return redirect(route('enrollments.index'));
        }

        $this->enrollmentRepository->delete($id);

        Flash::success('Enrollment deleted successfully.');

        return redirect(route('enrollments.index'));
    }
}
