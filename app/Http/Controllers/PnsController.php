<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PnsController extends Controller
{
    public function index()
    {
        // Data Dummy PNS
        $pnsList = [
            'nip' => '199003012022011001',
            'nama' => 'Kitagawasan',
            'tempat_lahir' => 'Jakarta',
            'tanggal_lahir' => '1990-03-01',
            'jenis_kelamin' => 'Perempuan',
            'agama' => 'Islam',
            'status_perkawinan' => 'Belum Menikah',
            'pendidikan_Terakhir' => 'S1 Fakultas Hukum',
            'pangkat' => 'Penata Muda',
            'golongan' => 'III/a',
            'jabatan' => 'Analis Kepegawaian',
            'unit_kerja' => 'Dinas Pendidikan',
            'tmt_cpns' => '2022-01-01',
            'tmt_pangkat' => '2024-01-01',
            'foto' => 'enno/assets/img/foto.webp',
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

        return view('pns.index', compact('pnsList'));
    }

    public function show($id)
    {
        // Data Dummy Detail PNS
        $pns = [
            'id' => $id,
            'nip' => '199003012022011001',
            'nama' => 'Kitagawasan',
            'tempat_lahir' => 'Jakarta',
            'tanggal_lahir' => '1990-03-01',
            'jenis_kelamin' => 'Perempuan',
            'agama' => 'Islam',
            'status_perkawinan' => 'Belum Menikah',
            'pendidikan_Terakhir' => 'S1 Fakultas Hukum',
            'pangkat' => 'Penata Muda',
            'golongan' => 'III/a',
            'jabatan' => 'Analis Kepegawaian',
            'unit_kerja' => 'Dinas Pendidikan',
            'tmt_cpns' => '2022-01-01',
            'tmt_pangkat' => '2024-01-01',
            'foto' => 'enno/assets/img/foto.webp',
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

        $pegawai = [
            'id' => $id,
            'nip' => '199003012022011001',
            'nama' => 'Kitagawasan',
            'tempat_lahir' => 'Jakarta',
            'tanggal_lahir' => '1990-03-01',
            'jenis_kelamin' => 'Perempuan',
            'agama' => 'Islam',
            'status_perkawinan' => 'Belum Menikah',
            'pendidikan_Terakhir' => 'S1 Fakultas Hukum',
            'pangkat' => 'Penata Muda',
            'golongan' => 'III/a',
            'jabatan' => 'Analis Kepegawaian',
            'unit_kerja' => 'Dinas Pendidikan',
            'tmt_cpns' => '2022-01-01',
            'tmt_pangkat' => '2024-01-01',
            'foto' => 'enno/assets/img/foto.webp',
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
