<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class unitkerjacontroller extends Controller
{
    public function index()
    {
        $pdd = \App\Models\UnitKerja::all();
        return view('tm.unitkerja', [
            'pdd' => $pdd
        ]);
    }
}
