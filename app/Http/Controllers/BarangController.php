<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class BarangController extends Controller
{
    public function laptop()
    {
        $laptops = [
            (object)[
                'kode_aset' => 'LP-023',
                'merk' => 'HP ProBook',
                'processor' => 'Intel Core i5-1135G7',
                'ram' => '8GB',
                'storage' => '512GB SSD',
                'tmt_pembelian' => '2024-01-01',
                'pengguna' => 'Ahmad Budiman',
                'status' => 'Aktif'
            ],
            (object)[
                'kode_aset' => 'LP-024',
                'merk' => 'Lenovo ThinkPad',
                'processor' => 'AMD Ryzen 5 5600U',
                'ram' => '16GB',
                'storage' => '1TB SSD',
                'tmt_pembelian' => '2024-03-10',
                'pengguna' => 'Citra Dewi',
                'status' => 'Aktif'
            ]
        ];
        return view('barang.laptop', compact('laptops'));
    }

    
    // kene printer
    public function printer()
    {
        $printers = [
            (object)[
                'kode_aset' => 'PR-011',
                'merk' => 'Epson L3210',
                'tipe' => 'Printer All-in-One',
                'tmt_pembelian' => '2023-09-01',
                'lokasi' => 'Bagian Umum',
                'status' => 'Perlu Maintenance',
                'riwayat_kerusakan' => 'Tinta sering macet'
            ],
            (object)[
                'kode_aset' => 'PR-012',
                'merk' => 'Canon Pixma MG2570',
                'tipe' => 'Printer Inkjet',
                'tmt_pembelian' => '2024-01-10',
                'lokasi' => 'Kepala Dinas',
                'status' => 'Baik',
                'riwayat_kerusakan' => 'Apik pollll'
            ]
        ];
        return view('barang.printer', compact('printers'));
    }

    // kene pc
    public function pc()
    {
        $pcs = [
            (object)[
                'kode_aset' => 'PC-045',
                'merk' => 'Dell OptiPlex',
                'processor' => 'Intel Core i3-10100',
                'ram' => '4GB',
                'storage' => '256GB HDD',
                'tmt_pembelian' => '2023-07-15',
                'lokasi' => 'Ruangan TU',
                'pengguna' => 'Ahmad Budiman',
                'status' => 'Cadangan'
            ],
            (object)[
                'kode_aset' => 'PC-045',
                'merk' => 'Dell OptiPlex',
                'processor' => 'Intel Core i3-10100',
                'ram' => '4GB',
                'storage' => '256GB HDD',
                'tmt_pembelian' => '2023-07-15',
                'lokasi' => 'Ruangan TU',
                'pengguna' => 'warnudi',
                'status' => 'Cadangan'
            ],
            (object)[
                'kode_aset' => 'PC-046',
                'merk' => 'Acer Veriton',
                'processor' => 'Intel Celeron J4125',
                'ram' => '8GB',
                'storage' => '512GB SSD',
                'tmt_pembelian' => '2024-02-20',
                'lokasi' => 'Lab Komputer',
                'pengguna' => 'tinyem',
                'status' => 'Aktif'
            ]
        ];
        return view('barang.pc', compact('pcs'));
    }
}



    // Barang::create([ 
    //     'nama' => 'Dell XPS 13',
    //     'kategori' => 'Laptop',
    //     'serial_number' => 'SN-LP001',
    //     'pemilik_id' => 1,
    //     'status' => 'Active'
    // ]);

    // Barang::create([
    //     'nama' => 'HP EliteBook',
    //     'kategori' => 'Laptop',
    //     'serial_number' => 'SN-LP002',
    //     'pemilik_id' => 2,
    //     'status' => 'Maintenance'
    // ]);