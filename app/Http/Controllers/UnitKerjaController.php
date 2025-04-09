<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnitKerjaController extends Controller
{
    public function index()
    {
        return view('unit-kerja.index');
    }
}
