<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCreatecourseRequest;
use App\Http\Requests\UpdateCreatecourseRequest;
use App\Repositories\CreatecourseRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Category;
use Flash;
use Response;

class CreatecourseController extends AppBaseController
{
    /** @var  CreatecourseRepository */
    private $createcourseRepository;

    public function __construct(CreatecourseRepository $createcourseRepo)
    {
        $this->createcourseRepository = $createcourseRepo;
    }

    /**
     * Display a listing of the Createcourse.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $createcourses = $this->createcourseRepository->all();

        return view('createcourses.index')
            ->with('createcourses', $createcourses);
    }

    /**
     * Show the form for creating a new Createcourse.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('createcourses.create')
        ->with('categories', $categories);
    }

    /**
     * Store a newly created Createcourse in storage.
     *
     * @param CreateCreatecourseRequest $request
     *
     * @return Response
     */
    public function store(CreateCreatecourseRequest $request)
    {
        $input = $request->all();

        $createcourse = $this->createcourseRepository->create($input);

        Flash::success('Createcourse saved successfully.');

        return redirect(route('createcourses.index'));
    }

    /**
     * Display the specified Createcourse.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $createcourse = $this->createcourseRepository->find($id);

        if (empty($createcourse)) {
            Flash::error('Createcourse not found');

            return redirect(route('createcourses.index'));
        }

        return view('createcourses.show')->with('createcourse', $createcourse);
    }

    /**
     * Show the form for editing the specified Createcourse.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $createcourse = $this->createcourseRepository->find($id);

        if (empty($createcourse)) {
            Flash::error('Createcourse not found');

            return redirect(route('createcourses.index'));
        }

        $categories = Category::all();
        return view('createcourses.edit')
        ->with('createcourse', $createcourse)
        ->with('categories', $categories);
    }

    /**
     * Update the specified Createcourse in storage.
     *
     * @param int $id
     * @param UpdateCreatecourseRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCreatecourseRequest $request)
    {
        $createcourse = $this->createcourseRepository->find($id);

        if (empty($createcourse)) {
            Flash::error('Createcourse not found');

            return redirect(route('createcourses.index'));
        }

        $createcourse = $this->createcourseRepository->update($request->all(), $id);

        Flash::success('Createcourse updated successfully.');

        return redirect(route('createcourses.index'));
    }

    /**
     * Remove the specified Createcourse from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $createcourse = $this->createcourseRepository->find($id);

        if (empty($createcourse)) {
            Flash::error('Createcourse not found');

            return redirect(route('createcourses.index'));
        }

        $this->createcourseRepository->delete($id);

        Flash::success('Createcourse deleted successfully.');

        return redirect(route('createcourses.index'));
    }
}
