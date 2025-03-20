<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsetController extends Controller
{
    public function mobilDanMotor() {
    return view('aset', [
        'title' => 'Aset Mobil dan Motor'
    ]);
}
}
