<?php

namespace App\Http\Controllers;

use App\DataTables\BeritaTagsDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateBeritaTagsRequest;
use App\Http\Requests\UpdateBeritaTagsRequest;
use App\Repositories\BeritaTagsRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class BeritaTagsController extends AppBaseController
{
    /** @var BeritaTagsRepository $beritaTagsRepository*/
    private $beritaTagsRepository;

    public function __construct(BeritaTagsRepository $beritaTagsRepo)
    {
        $this->beritaTagsRepository = $beritaTagsRepo;
    }

    /**
     * Display a listing of the BeritaTags.
     *
     * @param BeritaTagsDataTable $beritaTagsDataTable
     *
     * @return Response
     */
    public function index(BeritaTagsDataTable $beritaTagsDataTable)
    {
        return $beritaTagsDataTable->render('berita_tags.index');
    }

    /**
     * Show the form for creating a new BeritaTags.
     *
     * @return Response
     */
    public function create()
    {
        return view('berita_tags.create');
    }

    /**
     * Store a newly created BeritaTags in storage.
     *
     * @param CreateBeritaTagsRequest $request
     *
     * @return Response
     */
    public function store(CreateBeritaTagsRequest $request)
    {
        $input = $request->all();

        $beritaTags = $this->beritaTagsRepository->create($input);

        Flash::success('Berita Tags saved successfully.');

        return redirect(route('beritaTags.index'));
    }

    /**
     * Display the specified BeritaTags.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $beritaTags = $this->beritaTagsRepository->find($id);

        if (empty($beritaTags)) {
            Flash::error('Berita Tags not found');

            return redirect(route('beritaTags.index'));
        }

        return view('berita_tags.show')->with('beritaTags', $beritaTags);
    }

    /**
     * Show the form for editing the specified BeritaTags.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $beritaTags = $this->beritaTagsRepository->find($id);

        if (empty($beritaTags)) {
            Flash::error('Berita Tags not found');

            return redirect(route('beritaTags.index'));
        }

        return view('berita_tags.edit')->with('beritaTags', $beritaTags);
    }

    /**
     * Update the specified BeritaTags in storage.
     *
     * @param int $id
     * @param UpdateBeritaTagsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBeritaTagsRequest $request)
    {
        $beritaTags = $this->beritaTagsRepository->find($id);

        if (empty($beritaTags)) {
            Flash::error('Berita Tags not found');

            return redirect(route('beritaTags.index'));
        }

        $beritaTags = $this->beritaTagsRepository->update($request->all(), $id);

        Flash::success('Berita Tags updated successfully.');

        return redirect(route('beritaTags.index'));
    }

    /**
     * Remove the specified BeritaTags from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $beritaTags = $this->beritaTagsRepository->find($id);

        if (empty($beritaTags)) {
            Flash::error('Berita Tags not found');

            return redirect(route('beritaTags.index'));
        }

        $this->beritaTagsRepository->delete($id);

        Flash::success('Berita Tags deleted successfully.');

        return redirect(route('beritaTags.index'));
    }
}
