<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $berita = Berita::first();
        $beritas = Berita::take(4)->get();
        // $data = Berita::all();
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
