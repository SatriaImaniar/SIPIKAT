<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PnsController extends Controller
{
    public function index()
    {
        // Data Dummy PNS
        $pnsList = [
            [
                'id' => 1,
                'nip' => '199003012022011001',
                'nama' => 'Ahmad Budiman',
                'pangkat' => 'Penata Muda',
                'golongan' => 'III/a',
                'jabatan' => 'Analis Kepegawaian',
                'unit_kerja' => 'Dinas Pendidikan',
                'tmt_pangkat' => '2024-01-01',
                'foto' => 'user1.jpg'
            ],
            [
                'id' => 2,
                'nip' => '198511052021021002',
                'nama' => 'Dewi Lestari',
                'pangkat' => 'Penata Tingkat I',
                'golongan' => 'III/b',
                'jabatan' => 'Kepala Seksi Kepegawaian',
                'unit_kerja' => 'Dinas Kesehatan',
                'tmt_pangkat' => '2023-06-15',
                'foto' => 'user2.jpg'
            ]
        ];

        return view('pns.index', compact('pnsList'));
    }

    public function show($id)
    {
        // Data Dummy Detail PNS
        $pns = [
            'id' => $id,
            'nip' => '199003012022011001',
            'nama' => 'Ahmad Budiman',
            'tempat_lahir' => 'Jakarta',
            'tanggal_lahir' => '1990-03-01',
            'jenis_kelamin' => 'Laki-laki',
            'pangkat' => 'Penata Muda',
            'golongan' => 'III/a',
            'jabatan' => 'Analis Kepegawaian',
            'unit_kerja' => 'Dinas Pendidikan',
            'tmt_cpns' => '2022-01-01',
            'tmt_pangkat' => '2024-01-01',
            'foto' => 'user1.jpg',
            'riwayat_tmt' => [
                [
                    'jenis' => 'Kenaikan Pangkat',
                    'tanggal' => '2024-01-01',
                    'keterangan' => 'Naik pangkat ke III/a'
                ],
                [
                    'jenis' => 'Kenaikan Berkala',
                    'tanggal' => '2023-07-01',
                    'keterangan' => 'Kenaikan gaji berkala'
                ]
            ]
        ];

        return view('pns.show', compact('pns'));
    }
}
