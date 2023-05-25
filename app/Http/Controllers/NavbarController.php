<?php

namespace App\Http\Controllers;

use App\Models\NasabahModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NavbarController extends Controller
{
    public function index(){
        $user = Auth::user();
        $jadwalUser = NasabahModel::where('id', $user->id)->get();
        return view('layouts.navbar', compact('jadwalUser'));
    }
}
