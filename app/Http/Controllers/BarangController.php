<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class BarangController extends Controller
{
    public function barang()
    {
        $barangs = Barang::all();
        return view('barang.index', compact('barangs'));
    }
    public function run()
{
    Barang::create([ 
        'nama' => 'Dell XPS 13',
        'kategori' => 'Laptop',
        'serial_number' => 'SN-LP001',
        'pemilik_id' => 1,
        'status' => 'Active'
    ]);

    Barang::create([
        'nama' => 'HP EliteBook',
        'kategori' => 'Laptop',
        'serial_number' => 'SN-LP002',
        'pemilik_id' => 2,
        'status' => 'Maintenance'
    ]);

    return "Data dummy";

}
}
