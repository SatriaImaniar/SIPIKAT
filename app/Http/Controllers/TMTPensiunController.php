<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TMTPensiunController extends Controller
{
   // Data Dummy
   private $dummyData = [
    [
        'id' => 1,
        'nama' => 'Ahmad Budiman',
        'nip' => '199003012022011001',
        'tmt_pensiun' => '2025-05-01',
        'jenis_pensiun' => 'BUP',
        'masa_kerja' => '40 tahun 3 bulan',
        'unit_kerja' => 'Dinas Pendidikan',
        'dokumen' => 'sk_pensiun_ahmad.pdf'
    ],
    [
        'id' => 2,
        'nama' => 'Dewi Lestari',
        'nip' => '198510102018021002',
        'tmt_pensiun' => '2024-12-01',
        'jenis_pensiun' => 'APS',
        'masa_kerja' => '25 tahun 0 bulan',
        'unit_kerja' => 'Dinas Kesehatan',
        'dokumen' => 'sk_pensiun_dewi.pdf'
    ]
];

// Menampilkan Daftar Pensiun
public function index()
{
    return view('tmt-pensiun.index', [
        'pensiun' => $this->dummyData
    ]);
}

    // Simpan Data (Dummy)
    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'nama' => 'required',
            'nip' => 'required|numeric',
            'tmt_pensiun' => 'required|date',
        ]);

        // Simpan ke array dummy (simulasi)
        $newData = [
            'id' => count($this->dummyData) + 1,
            'nama' => $request->nama,
            'nip' => $request->nip,
            'tmt_pensiun' => $request->tmt_pensiun,
            'jenis_pensiun' => $request->jenis_pensiun,
            'masa_kerja' => $request->masa_kerja,
            'unit_kerja' => $request->unit_kerja,
            'dokumen' => 'dokumen_dummy.pdf'
        ];

        array_push($this->dummyData, $newData);

        return redirect()->route('tmt.pensiun.index')
            ->with('success', 'Data TMT Pensiun berhasil ditambahkan!');
    }

    // Detail Pensiun
    public function show($id)
    {
        $data = collect($this->dummyData)->firstWhere('id', $id);
        
        return view('tmt-pensiun.show', compact('data'));
    }

    // Form Edit
    public function edit($id)
    {
        $data = collect($this->dummyData)->firstWhere('id', $id);
        
        return view('tmt-pensiun.edit', compact('data'));
    }

    // Update Data
    public function update(Request $request, $id)
    {
        // Logika update dummy data
        return redirect()->route('tmt.pensiun.index')
            ->with('success', 'Data berhasil diperbarui!');
    }

    // Hapus Data
    public function destroy($id)
    {
        // Logika hapus dummy data
        return redirect()->route('tmt.pensiun.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
