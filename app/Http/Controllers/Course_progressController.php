<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCourse_progressRequest;
use App\Http\Requests\UpdateCourse_progressRequest;
use App\Repositories\Course_progressRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Course_progressController extends AppBaseController
{
    /** @var  Course_progressRepository */
    private $courseProgressRepository;

    public function __construct(Course_progressRepository $courseProgressRepo)
    {
        $this->courseProgressRepository = $courseProgressRepo;
    }

    /**
     * Display a listing of the Course_progress.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $courseProgresses = $this->courseProgressRepository->all();

        return view('course_progresses.index')
            ->with('courseProgresses', $courseProgresses);
    }

    /**
     * Show the form for creating a new Course_progress.
     *
     * @return Response
     */
    public function create()
    {
        return view('course_progresses.create');
    }

    /**
     * Store a newly created Course_progress in storage.
     *
     * @param CreateCourse_progressRequest $request
     *
     * @return Response
     */
    public function store(CreateCourse_progressRequest $request)
    {
        $input = $request->all();

        $courseProgress = $this->courseProgressRepository->create($input);

        Flash::success('Course Progress saved successfully.');

        return redirect(route('courseProgresses.index'));
    }

    /**
     * Display the specified Course_progress.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $courseProgress = $this->courseProgressRepository->find($id);

        if (empty($courseProgress)) {
            Flash::error('Course Progress not found');

            return redirect(route('courseProgresses.index'));
        }

        return view('course_progresses.show')->with('courseProgress', $courseProgress);
    }

    /**
     * Show the form for editing the specified Course_progress.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $courseProgress = $this->courseProgressRepository->find($id);

        if (empty($courseProgress)) {
            Flash::error('Course Progress not found');

            return redirect(route('courseProgresses.index'));
        }

        return view('course_progresses.edit')->with('courseProgress', $courseProgress);
    }

    /**
     * Update the specified Course_progress in storage.
     *
     * @param int $id
     * @param UpdateCourse_progressRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCourse_progressRequest $request)
    {
        $courseProgress = $this->courseProgressRepository->find($id);

        if (empty($courseProgress)) {
            Flash::error('Course Progress not found');

            return redirect(route('courseProgresses.index'));
        }

        $courseProgress = $this->courseProgressRepository->update($request->all(), $id);

        Flash::success('Course Progress updated successfully.');

        return redirect(route('courseProgresses.index'));
    }

    /**
     * Remove the specified Course_progress from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $courseProgress = $this->courseProgressRepository->find($id);

        if (empty($courseProgress)) {
            Flash::error('Course Progress not found');

            return redirect(route('courseProgresses.index'));
        }

        $this->courseProgressRepository->delete($id);

        Flash::success('Course Progress deleted successfully.');

        return redirect(route('courseProgresses.index'));
    }
}
