<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index()
    {
        // Data dummy jabatan
        $jabatan = [
            [
                'kode' => 'JS-001',
                'nama' => 'Kepala Dinas',
                'level' => 'Eselon II'
            ],
            [
                'kode' => 'JS-002',
                'nama' => 'Sekretaris Dinas',
                'level' => 'Eselon III'
            ],
            [
                'kode' => 'JS-004',
                'nama' => 'Aduministrasi Umum',
                'level' => 'Eselon III'
            ],
            [
                'kode' => 'JS-003',
                'nama' => 'Kepala Bidang',
                'level' => 'Eselon IV'
            ]
        ];

        return view('jabatan.index', compact('jabatan'));
    }
}
