<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TMTKenaikanPangkatController extends Controller
{
    private $dummyData = [
        [
            'id' => 1,
            'nama' => 'Ahmad Budiman',
            'nip' => '199003012022011001',
            'pangkat_lama' => 'Penata Muda (III/a)',
            'pangkat_baru' => 'Penata Muda Tingkat I (III/b)',
            'tmt' => '2024-04-01',
            'sk' => '822/SK-KP/IV/2024',
            'golongan' => 'III/b'
        ],
        [
            'id' => 2,
            'nama' => 'Dewi Lestari',
            'nip' => '199512052018022001',
            'pangkat_lama' => 'Pengatur Tingkat I (II/d)',
            'pangkat_baru' => 'Penata Muda (III/a)',
            'tmt' => '2024-06-01',
            'sk' => '445/SK-KP/VI/2024',
            'golongan' => 'III/a'
        ]
    ];
        // Menampilkan Halaman Utama
        public function index()
        {
            $pangkatOptions = [
                'III/a - Penata Muda',
                'III/b - Penata Muda Tingkat I',
                'IV/a - Pembina',
                'IV/b - Pembina Tingkat I'
            ];
    
            return view('tmt-kenaikan-pangkat.index', [
                'data' => $this->dummyData,
                'pangkatOptions' => $pangkatOptions
            ]);
        }
    
        // Menyimpan Data (Dummy)
        public function store(Request $request)
        {
            // Validasi
            $request->validate([
                'nama' => 'required',
                'nip' => 'required|numeric',
                'pangkat_baru' => 'required',
                'tmt' => 'required|date',
                'sk' => 'required'
            ]);
    
            // Simpan ke database (dalam contoh ini hanya redirect)
            return redirect()->route('tmt-pangkat.index')
                ->with('success', 'Data TMT berhasil disimpan!');
        }
}
