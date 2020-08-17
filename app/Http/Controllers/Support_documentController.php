<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSupport_documentRequest;
use App\Http\Requests\UpdateSupport_documentRequest;
use App\Repositories\Support_documentRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Support_documentController extends AppBaseController
{
    /** @var  Support_documentRepository */
    private $supportDocumentRepository;

    public function __construct(Support_documentRepository $supportDocumentRepo)
    {
        $this->middleware('auth');
        $this->supportDocumentRepository = $supportDocumentRepo;
    }

    /**
     * Display a listing of the Support_document.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $supportDocuments = $this->supportDocumentRepository->all();

        return view('support_documents.index')
            ->with('supportDocuments', $supportDocuments);
    }

    /**
     * Show the form for creating a new Support_document.
     *
     * @return Response
     */
    public function create()
    {
        return view('support_documents.create');
    }

    /**
     * Store a newly created Support_document in storage.
     *
     * @param CreateSupport_documentRequest $request
     *
     * @return Response
     */
    public function store(CreateSupport_documentRequest $request)
    {
        $input = $request->all();

        $supportDocument = $this->supportDocumentRepository->create($input);

        Flash::success('Support Document saved successfully.');

        return redirect(route('supportDocuments.index'));
    }

    /**
     * Display the specified Support_document.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $supportDocument = $this->supportDocumentRepository->find($id);

        if (empty($supportDocument)) {
            Flash::error('Support Document not found');

            return redirect(route('supportDocuments.index'));
        }

        return view('support_documents.show')->with('supportDocument', $supportDocument);
    }

    /**
     * Show the form for editing the specified Support_document.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $supportDocument = $this->supportDocumentRepository->find($id);

        if (empty($supportDocument)) {
            Flash::error('Support Document not found');

            return redirect(route('supportDocuments.index'));
        }

        return view('support_documents.edit')->with('supportDocument', $supportDocument);
    }

    /**
     * Update the specified Support_document in storage.
     *
     * @param int $id
     * @param UpdateSupport_documentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSupport_documentRequest $request)
    {
        $supportDocument = $this->supportDocumentRepository->find($id);

        if (empty($supportDocument)) {
            Flash::error('Support Document not found');

            return redirect(route('supportDocuments.index'));
        }

        $supportDocument = $this->supportDocumentRepository->update($request->all(), $id);

        Flash::success('Support Document updated successfully.');

        return redirect(route('supportDocuments.index'));
    }

    /**
     * Remove the specified Support_document from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $supportDocument = $this->supportDocumentRepository->find($id);

        if (empty($supportDocument)) {
            Flash::error('Support Document not found');

            return redirect(route('supportDocuments.index'));
        }

        $this->supportDocumentRepository->delete($id);

        Flash::success('Support Document deleted successfully.');

        return redirect(route('supportDocuments.index'));
    }
}
