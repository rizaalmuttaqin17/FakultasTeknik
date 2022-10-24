<?php

namespace App\Http\Controllers;

use App\DataTables\GalleryDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use App\Repositories\GalleryRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class GalleryController extends AppBaseController
{
    /** @var GalleryRepository $galleryRepository*/
    private $galleryRepository;

    public function __construct(GalleryRepository $galleryRepo)
    {
        $this->galleryRepository = $galleryRepo;
    }

    /**
     * Display a listing of the Gallery.
     *
     * @param GalleryDataTable $galleryDataTable
     *
     * @return Response
     */
    public function index(GalleryDataTable $galleryDataTable)
    {
        return $galleryDataTable->render('galleries.index');
    }

    /**
     * Show the form for creating a new Gallery.
     *
     * @return Response
     */
    public function create()
    {
        return view('galleries.create');
    }

    /**
     * Store a newly created Gallery in storage.
     *
     * @param CreateGalleryRequest $request
     *
     * @return Response
     */
    public function store(CreateGalleryRequest $request)
    {
        $input = $request->all();

        $gallery = $this->galleryRepository->create($input);

        Flash::success('Gallery saved successfully.');

        return redirect(route('galleries.index'));
    }

    /**
     * Display the specified Gallery.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $gallery = $this->galleryRepository->find($id);

        if (empty($gallery)) {
            Flash::error('Gallery not found');

            return redirect(route('galleries.index'));
        }

        return view('galleries.show')->with('gallery', $gallery);
    }

    /**
     * Show the form for editing the specified Gallery.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $gallery = $this->galleryRepository->find($id);

        if (empty($gallery)) {
            Flash::error('Gallery not found');

            return redirect(route('galleries.index'));
        }

        return view('galleries.edit')->with('gallery', $gallery);
    }

    /**
     * Update the specified Gallery in storage.
     *
     * @param int $id
     * @param UpdateGalleryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGalleryRequest $request)
    {
        $gallery = $this->galleryRepository->find($id);

        if (empty($gallery)) {
            Flash::error('Gallery not found');

            return redirect(route('galleries.index'));
        }

        $gallery = $this->galleryRepository->update($request->all(), $id);

        Flash::success('Gallery updated successfully.');

        return redirect(route('galleries.index'));
    }

    /**
     * Remove the specified Gallery from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $gallery = $this->galleryRepository->find($id);

        if (empty($gallery)) {
            Flash::error('Gallery not found');

            return redirect(route('galleries.index'));
        }

        $this->galleryRepository->delete($id);

        Flash::success('Gallery deleted successfully.');

        return redirect(route('galleries.index'));
    }
}
