<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReport_a_concernRequest;
use App\Http\Requests\UpdateReport_a_concernRequest;
use App\Repositories\Report_a_concernRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Report_a_concernController extends AppBaseController
{
    /** @var  Report_a_concernRepository */
    private $reportAConcernRepository;

    public function __construct(Report_a_concernRepository $reportAConcernRepo)
    {
        $this->middleware('auth');
        $this->reportAConcernRepository = $reportAConcernRepo;
    }

    /**
     * Display a listing of the Report_a_concern.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $reportAConcerns = $this->reportAConcernRepository->all();

        return view('report_a_concerns.index')
            ->with('reportAConcerns', $reportAConcerns);
    }

    /**
     * Show the form for creating a new Report_a_concern.
     *
     * @return Response
     */
    public function create()
    {
        return view('report_a_concerns.create');
    }

    /**
     * Store a newly created Report_a_concern in storage.
     *
     * @param CreateReport_a_concernRequest $request
     *
     * @return Response
     */
    public function store(CreateReport_a_concernRequest $request)
    {
        $input = $request->all();

        $reportAConcern = $this->reportAConcernRepository->create($input);

        Flash::success('Message sent successfully.');
        return redirect()->back();

        // return redirect(route('reportAConcerns.create'));
    }

    /**
     * Display the specified Report_a_concern.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $reportAConcern = $this->reportAConcernRepository->find($id);

        if (empty($reportAConcern)) {
            Flash::error('Report A Concern not found');

            return redirect(route('reportAConcerns.index'));
        }

        return view('report_a_concerns.show')->with('reportAConcern', $reportAConcern);
    }

    /**
     * Show the form for editing the specified Report_a_concern.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $reportAConcern = $this->reportAConcernRepository->find($id);

        if (empty($reportAConcern)) {
            Flash::error('Report A Concern not found');

            return redirect(route('reportAConcerns.index'));
        }

        return view('report_a_concerns.edit')->with('reportAConcern', $reportAConcern);
    }

    /**
     * Update the specified Report_a_concern in storage.
     *
     * @param int $id
     * @param UpdateReport_a_concernRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateReport_a_concernRequest $request)
    {
        $reportAConcern = $this->reportAConcernRepository->find($id);

        if (empty($reportAConcern)) {
            Flash::error('Report A Concern not found');

            return redirect(route('reportAConcerns.index'));
        }

        $reportAConcern = $this->reportAConcernRepository->update($request->all(), $id);

        Flash::success('Message updated successfully.');

        return redirect(route('reportAConcerns.index'));
    }

    /**
     * Remove the specified Report_a_concern from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $reportAConcern = $this->reportAConcernRepository->find($id);

        if (empty($reportAConcern)) {
            Flash::error('Report A Concern not found');

            return redirect(route('reportAConcerns.index'));
        }

        $this->reportAConcernRepository->delete($id);

        Flash::success('Message deleted successfully.');

        return redirect(route('reportAConcerns.index'));
    }
}
