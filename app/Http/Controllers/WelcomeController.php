<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        // $prodi = ProgramStudi::pluck('nama', 'id');
        $berita = Berita::first();
        $beritas = Berita::take(3)->get();
        // return $berita;
        return view('welcome', compact('berita', 'beritas'));
    }
}
