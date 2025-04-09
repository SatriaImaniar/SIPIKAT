<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TmtBerkalaController extends Controller
{
     // Data Dummy Kenaikan Berkala
     private $dummyData = [
        [
            'id' => 1,
            'nama_pns' => 'Ahmad Budiman',
            'nip' => '199003012022011001',
            'periode' => '2020-2024',
            'tmt_berlaku' => '2024-04-01',
            'gaji_lama' => 'Rp 4.200.000',
            'gaji_baru' => 'Rp 4.500.000',
            'sk' => 'sk_ahmad_2024.pdf'
        ],
        [
            'id' => 2,
            'nama_pns' => 'Dewi Lestari',
            'nip' => '198905052019021002',
            'periode' => '2019-2023',
            'tmt_berlaku' => '2023-06-15',
            'gaji_lama' => 'Rp 5.100.000',
            'gaji_baru' => 'Rp 5.400.000',
            'sk' => 'sk_dewi_2023.pdf'
        ]
    ];

    // Menampilkan halaman kenaikan berkala
    public function index()
    {
        return view('tmt-berkala.index', [
            'kenaikanBerkala' => $this->dummyData,
            'pegawai' => [
                ['id' => 1, 'nip' => '199003012022011001', 'nama' => 'Ahmad Budiman'],
                ['id' => 2, 'nip' => '198905052019021002', 'nama' => 'Dewi Lestari']
            ]
        ]);
    }

    // Simpan data (dummy response)
    public function store(Request $request)
    {
        // Hanya simulasi penyimpanan data
        return redirect()->route('tmt.berkala.index')
            ->with('success', 'Data kenaikan berkala berhasil disimpan!');
    }
}
