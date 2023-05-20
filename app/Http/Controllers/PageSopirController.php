<?php

namespace App\Http\Controllers;

use App\Models\JadwalModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageSopirController extends Controller
{
    public function index(){
        $user = Auth::user();
        $jadwalUser = JadwalModel::where('id_sopir', $user->id)->get();

        return view('pagesopir.sopir', compact('jadwalUser'));
    }
}
