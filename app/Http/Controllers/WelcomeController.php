<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\BeritaTags;
use App\Models\Dokumen;
use App\Models\Kategori;
use App\Models\Tag;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $berita = Berita::first();
        $beritas = Berita::take(4)->get();
        // $data = Berita::all();
        return view('welcome', compact('berita', 'beritas'));
    }
    
    public function blog()
    {
        $berita = Berita::get();
        return view('blog.blog', compact('berita'));
    }

    public function blogDetail($slug)
    {
        $berita = Berita::where('slug', $slug)->first();
        $beritas = Berita::take(3)->latest('created_at')->get();
        $kategori = Kategori::all();
        $beritaTags = BeritaTags::where('berita_id', $berita['id'])->get();
        return view('blog.blog-detail', compact('berita', 'beritas', 'kategori', 'beritaTags'));
    }

    public function dokumen()
    {
        $dokumen = Dokumen::get();
        return view('blog.dokumen', compact('dokumen'));
    }

    public function arsitektur()
    {
        $berita = Berita::first();
        $beritas = Berita::take(4)->get();
        // $data = Berita::all();
        return view('arsitektur', compact('berita', 'beritas'));
    }

    public function desainInterior()
    {
        $berita = Berita::first();
        $beritas = Berita::take(4)->get();
        // $data = Berita::all();
        return view('desain-interior', compact('berita', 'beritas'));
    }

    public function teknikIndustri()
    {
        $berita = Berita::first();
        $beritas = Berita::take(4)->get();
        // $data = Berita::all();
        return view('teknik-industri', compact('berita', 'beritas'));
    }

    public function teknikInformatika()
    {
        $berita = Berita::first();
        $beritas = Berita::take(4)->get();
        // $data = Berita::all();
        return view('teknik-informatika', compact('berita', 'beritas'));
    }

    public function tip()
    {
        $berita = Berita::first();
        $beritas = Berita::take(4)->get();
        // $data = Berita::all();
        return view('tip', compact('berita', 'beritas'));
    }

}
