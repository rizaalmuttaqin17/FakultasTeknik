<?php

namespace App\Http\Controllers;

use App\DataTables\BeritaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;
use App\Repositories\BeritaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use App\Models\Kategori;
use App\Models\ProgramStudi;
use App\Models\User;
use Illuminate\Http\Request;
use Response;
use Carbon\Carbon;
use DB;

class BeritaController extends AppBaseController
{
    /** @var BeritaRepository $beritaRepository*/
    private $beritaRepository;

    public function __construct(BeritaRepository $beritaRepo)
    {
        $this->beritaRepository = $beritaRepo;
    }

    /**
     * Display a listing of the Berita.
     *
     * @param BeritaDataTable $beritaDataTable
     *
     * @return Response
     */
    public function index(BeritaDataTable $beritaDataTable)
    {
        return $beritaDataTable->render('beritas.index');
    }

    /**
     * Show the form for creating a new Berita.
     *
     * @return Response
     */
    public function create()
    {
        $prodi = ProgramStudi::pluck('nama', 'id');
        return view('beritas.create', compact('prodi'));
    }

    /**
     * Store a newly created Berita in storage.
     *
     * @param CreateBeritaRequest $request
     *
     * @return Response
     */
    public function store(CreateBeritaRequest $request)
    {
        $input = $request->except('banner');
        $date= Carbon::now()->format('Y_m_d');
        if($request->hasFile('banner')) {
            $banner = $request->file('banner');
            $filename = str_replace(" ", "_",$banner->getClientOriginalName());
            $filenames = $date.'_'.$filename;
            $path=$request->banner->storeAs('public/banner', $filenames,'local');
            $input['banner']= 'storage' . substr($path, strpos($path, '/'));
        }
        if(is_numeric($input['kategori_id'])==true){
            $request['kategori_id'] = $input['kategori_id'];
        } else {
            $kategori = new Kategori;
            $kategori['kategori'] = $input['kategori_id'];
            $kategori->save();
            $kategoris = Kategori::orderBy('id', 'desc')->first();
            $input['kategori_id'] = $kategoris['id'];
        }
        $berita = $this->beritaRepository->create($input);

        Flash::success('Berita saved successfully.');
        return redirect(route('beritas.index'));
    }

    /**
     * Display the specified Berita.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $berita = $this->beritaRepository->find($id);
        if (empty($berita)) {
            Flash::error('Berita not found');
            return redirect(route('beritas.index'));
        }
        return view('beritas.show')->with('berita', $berita);
    }

    /**
     * Show the form for editing the specified Berita.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $berita = $this->beritaRepository->find($id);
        $prodi = ProgramStudi::pluck('nama', 'id');

        if (empty($berita)) {
            Flash::error('Berita not found');

            return redirect(route('beritas.index'));
        }

        return view('beritas.edit', compact('prodi'))->with('berita', $berita);
    }

    /**
     * Update the specified Berita in storage.
     *
     * @param int $id
     * @param UpdateBeritaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBeritaRequest $request)
    {
        $berita = $this->beritaRepository->find($id);

        if (empty($berita)) {
            Flash::error('Berita not found');

            return redirect(route('beritas.index'));
        }

        $berita = $this->beritaRepository->update($request->all(), $id);

        Flash::success('Berita updated successfully.');

        return redirect(route('beritas.index'));
    }

    /**
     * Remove the specified Berita from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $berita = $this->beritaRepository->find($id);

        if (empty($berita)) {
            Flash::error('Berita not found');
            return redirect(route('beritas.index'));
        }

        $this->beritaRepository->delete($id);
        Flash::success('Berita deleted successfully.');
        return redirect(route('beritas.index'));
    }

    public function penulis(Request $request) {
        $search = $request->search;
        if($search == ''){
            $penulis = User::orderby('name','asc')->select('id','name')->limit(5)->get();
        }else{
            $penulis = User::orderby('name','asc')->select('id','name')->where('name', 'like', '%' .$search . '%')->limit(5)->get();
        }
        $response = array();
        foreach($penulis as $item){
            $response[] = array(
                "id"=>$item->id,
                "text"=>$item->name
            );
        }
        return response()->json($response);
    }

    public function kategori(Request $request) {
        $search = $request->search;
        if($search == ''){
            $kategori = Kategori::orderby('kategori','asc')->select('id','kategori')->limit(5)->get();
        }else{
            $kategori = Kategori::orderby('kategori','asc')->select('id','kategori')->where('kategori', 'like', '%' .$search . '%')->limit(5)->get();
        }
        $response = array();
        foreach($kategori as $item){
            $response[] = array(
                "id"=>$item->id,
                "text"=>$item->kategori
            );
        }
        return response()->json($response);
    }
}
