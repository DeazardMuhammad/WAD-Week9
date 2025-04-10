<?php

namespace App\Http\Controllers;

use App\Models\Komentar;

class KomentarController extends Controller
{
    public function index()
    {
        $dataKomentar = Komentar::all();
        return view('komentar.index', compact('dataKomentar'));
    }
}
