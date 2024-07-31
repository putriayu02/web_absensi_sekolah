<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuruController extends Controller
{
    public function index()
    {
        // Ambil nama pengguna yang sedang login
        $userName = Auth::user()->name;

        // Kirim nama pengguna ke view
        return view('guru.index', ['userName' => $userName]);
    }
}
