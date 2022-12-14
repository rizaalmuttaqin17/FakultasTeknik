<?php

namespace App\Http\Controllers;

use App\DataTables\BeritaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;
use App\Repositories\BeritaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateTagRequest;
use App\Models\BeritaTags;
use App\Models\Kategori;
use App\Models\Tag;
use Illuminate\Http\Request;
use Response;
use Carbon\Carbon;
use DB;
use DOMDocument;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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
        $kategori = Kategori::pluck('kategori', 'id');
        $tags = Tag::pluck('nama', 'id');
        return view('beritas.create', compact('kategori', 'tags'));
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

        if(Auth::user()->hasRole('Admin-Teknik Arsitektur')){
            $input['program_studi_id'] = 6;
        } else if(Auth::user()->hasRole('Admin-Desain Interior')){
            $input['program_studi_id'] = 7;
        } else if(Auth::user()->hasRole('Admin-Teknik Industri')){
            $input['program_studi_id'] = 8;
        } else if(Auth::user()->hasRole('Admin-Teknik Informatika')){
            $input['program_studi_id'] = 9;
        } else if(Auth::user()->hasRole('Admin-Teknologi Industri Pertanian')){
            $input['program_studi_id'] = 10;
        } else if(Auth::user()->hasRole('Admin-Akuntansi')){
            $input['program_studi_id'] = 1;
        } else if(Auth::user()->hasRole('Admin-Farmasi')){
            $input['program_studi_id'] = 2;
        } else if(Auth::user()->hasRole('Admin-Hubungan Internasional')){
            $input['program_studi_id'] = 3;
        } else if(Auth::user()->hasRole('Admin-Ilmu Komunikasi')){
            $input['program_studi_id'] = 4;
        } else if(Auth::user()->hasRole('Admin-PAUD')){
            $input['program_studi_id'] = 5;
        } else {
            $input['program_studi_id'] = null;
        }
        $input['users_id'] = Auth::id();
        $input['slug'] = Str::slug($input['judul']);
        $berita = $this->beritaRepository->create($input);
        $berita->tags()->detach();
        $tagged = [];
        for($i=0; $i<COUNT($request['tags']); $i++){
            $tagged = Tag::select('id')->where('id', $request['tags'][$i])->first();
            if($tagged == null){
                $tags = Tag::updateOrCreate([
                    'nama' => $request['tags'][$i],
                    'slug' => Str::slug($request['tags'][$i])
                ])->id;
                $berita->tags()->syncWithoutDetaching($tags);
            } else {
                $berita->tags()->syncWithoutDetaching($request['tags'][$i]);
            }
        }

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
        $kategori = Kategori::pluck('kategori', 'id');
        $tags = Tag::pluck('nama', 'id');
        if (empty($berita)) {
            Flash::error('Berita not found');
            return redirect(route('beritas.index'));
        }

        return view('beritas.edit', compact('kategori', 'tags'))->with('berita', $berita);
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
        $input = $request->except('banner');
        if(Auth::user()->hasRole('Admin-Teknik Arsitektur')){
            $input['program_studi_id'] = 6;
        } else if(Auth::user()->hasRole('Admin-Desain Interior')){
            $input['program_studi_id'] = 7;
        } else if(Auth::user()->hasRole('Admin-Teknik Industri')){
            $input['program_studi_id'] = 8;
        } else if(Auth::user()->hasRole('Admin-Teknik Informatika')){
            $input['program_studi_id'] = 9;
        } else if(Auth::user()->hasRole('Admin-Teknologi Industri Pertanian')){
            $input['program_studi_id'] = 10;
        } else if(Auth::user()->hasRole('Admin-Akuntansi')){
            $input['program_studi_id'] = 1;
        } else if(Auth::user()->hasRole('Admin-Farmasi')){
            $input['program_studi_id'] = 2;
        } else if(Auth::user()->hasRole('Admin-Hubungan Internasional')){
            $input['program_studi_id'] = 3;
        } else if(Auth::user()->hasRole('Admin-Ilmu Komunikasi')){
            $input['program_studi_id'] = 4;
        } else if(Auth::user()->hasRole('Admin-PAUD')){
            $input['program_studi_id'] = 5;
        } else {
            $input['program_studi_id'] = null;
        }
        $input['slug'] = Str::slug($input['judul']);

        if(is_numeric($input['kategori_id'])==true){
            $request['kategori_id'] = $input['kategori_id'];
        } else {
            $kategori = new Kategori;
            $kategori['kategori'] = $input['kategori_id'];
            $kategori->save();
            $kategoris = Kategori::orderBy('id', 'desc')->first();
            $input['kategori_id'] = $kategoris['id'];
        }

        $date= Carbon::now()->format('Y_m_d');
        $content = $request['isi'];
        $dom = new \DomDocument();
        @$dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');
        foreach ($images as $image) {
            $imageSrc = $image->getAttribute('src');
            if (preg_match('/data:image/', $imageSrc)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $imageSrc, $mime);
                $mimeType = $mime['mime'];
                $filename = uniqid();
                $filePath = "/uploads/$filename.$mimeType";
                Image::make($imageSrc)
                    ->encode($mimeType, 100)
                    ->save(public_path($filePath));
                $newImageSrc = asset($filePath);
                $image->removeAttribute('src');
                $image->setAttribute('src', $newImageSrc);
            }
        }
        $content = $dom->saveHTML();
        if($request->hasFile('banner')) {
            $banner = $request->file('banner');
            $filename = str_replace(" ", "_",$banner->getClientOriginalName());
            $filenames = $date.'_'.$filename;
            $path=$request->banner->storeAs('public/banner', $filenames,'local');
            $input['banner']= 'storage' . substr($path, strpos($path, '/'));
            
            DB::transaction(function () use($input, $id, $content){
                $berita = $this->beritaRepository->update($input, $id);
                $berita['kategori_id'] = $input['kategori_id'];
                $berita['banner'] = $input['banner'];
                $berita['judul'] = $input['judul'];
                $berita['isi'] = $content;
                $berita['slug'] = Str::slug($input['judul']);
                $berita['users_id'] = Auth::id();
                $berita->save();
            },3);
        } else {            
            DB::transaction(function () use($input, $id, $content){
                $berita = $this->beritaRepository->update($input, $id);
                $berita['kategori_id'] = $input['kategori_id'];
                unset($berita['banner']);
                $berita['judul'] = $input['judul'];
                $berita['isi'] = $content;
                $berita['slug'] = Str::slug($input['judul']);
                $berita['users_id'] = Auth::id();
                $berita->save();
            },3);
        }
        $berita->tags()->detach();
        $tagged = [];
        for($i=0; $i<COUNT($request['tags']); $i++){
            $tagged = Tag::select('id')->where('id', $request['tags'][$i])->first();
            if($tagged == null){
                $tags = Tag::updateOrCreate([
                    'nama' => $request['tags'][$i],
                    'slug' => Str::slug($request['tags'][$i])
                ])->id;
                $berita->tags()->syncWithoutDetaching($tags);
            } else {
                $berita->tags()->syncWithoutDetaching($request['tags'][$i]);
            }
        }

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

    public function storeTags($id, UpdateBeritaRequest $request)
    {
        $berita = $this->beritaRepository->find($id);

        $tagged = [];
        for($i=0; $i<COUNT($request['tags']); $i++){
            $tags = Tag::updateOrCreate([
                'nama' => $request['tags'][$i],
                'slug' => Str::slug($request['tags'][$i])
            ])->id;
             // return $tagged;
            $berita->tags()->syncWithoutDetaching($tags);
        }
        Flash::success('Rak saved successfully.');
        return redirect()->back();
    }
}
