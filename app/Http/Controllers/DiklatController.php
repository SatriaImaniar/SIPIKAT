<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiklatController extends Controller
{
    public function jadwal()
    {
        // Data dummy jadwal diklat
        $jadwalDiklat = [
            [
                'id' => 1,
                'nama_diklat' => 'Manajemen Risiko Keuangan Daerah',
                'jenis' => 'Klasikal',
                'periode' => '02 – 15 April 2025',
                'lokasi' => 'Hotel Yuan Garden, Jakarta',
                'status' => 'Tersedia',
                'kuota' => 50,
                'biaya' => 'Rp 4.500.000'
            ],
            [
                'id' => 2,
                'nama_diklat' => 'E-Learning Pengadaan Barang/Jasa',
                'jenis' => 'Online',
                'periode' => '10 – 30 April 2025',
                'lokasi' => 'Zoom Meeting',
                'status' => 'Berlangsung',
                'kuota' => 96,
                'biaya' => 'Rp 2.500.000'
            ],
            [
                'id' => 3,
                'nama_diklat' => 'Pelatihan Kepemimpinan Eselon IV',
                'jenis' => 'Blended Learning',
                'periode' => '01 – 20 Mei 2025',
                'lokasi' => 'Balai Diklat PUPR, Bandung',
                'status' => 'Kuota Penuh',
                'kuota' => 0,
                'biaya' => 'Rp 3.800.000'
            ]

            
        ];

        return view('diklat.jadwal', compact('jadwalDiklat'));
    }
}
