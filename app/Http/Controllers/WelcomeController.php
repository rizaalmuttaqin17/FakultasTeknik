<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $berita = Berita::first();
        $beritas = Berita::where('program_studi_id', '6')->orWhere('program_studi_id', '7')->orWhere('program_studi_id', '8')->orWhere('program_studi_id', '9')->orWhere('program_studi_id', '10')->take(4)->get();
        return view('blog.welcome', compact('berita', 'beritas'));
    }

    public function blog()
    {
        $berita = Berita::all();
        return view('blog.blog', compact('berita'));
    }

    public function detail($id)
    {
        $berita = Berita::first();
        return view('blog.detail-blog', compact('berita'));
    }
}
