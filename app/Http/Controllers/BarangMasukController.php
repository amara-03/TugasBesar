<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Laporan;

class BrandsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('barang_masuk', compact('user', 'laporan'));
    }
}
