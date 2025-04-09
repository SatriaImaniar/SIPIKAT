<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;

class KendaraanController extends Controller
{
    // Contoh controller tanpa database
    public function mobil()
    {
        // Data dami untuk mobil
        $mobils = [
            // (object)[
            //     'nopol' => 'AB 1234 CD',
            //     'nama' => 'Avanza Hitam',
            //     'terakhir_service' => now()->subMonths(3)->format('d M Y'),
            //     'berlaku_stnk' => now()->addMonths(2)->format('d M Y'),
            //     'berlaku_plat' => now()->addYears(1)->format('d M Y'),
            // ],
            (object)[
                'kode_aset' => 'MB-001',
                'no_polisi' => 'B 1234 ABC',
                'merk' => 'Toyota Avanza',
                'tahun' => '2023',
                'tmt_pembelian' => '2023-01-15',
                'pengguna' => 'Budi Santoso',
                'kondisi' => 'Baik',
                'riwayat_pemakaian' => 'Operasional harian dinas pendidikan'
            ],
            (object)[
                'kode_aset' => 'MB-002',
                'no_polisi' => 'B 5678 DEF',
                'merk' => 'Daihatsu Xenia',
                'tahun' => '2022',
                'tmt_pembelian' => '2022-08-20',
                'pengguna' => 'Ani Wijaya',
                'kondisi' => 'Perbaikan',
                'riwayat_pemakaian' => 'Kunjungan lapangan dinas kesehatan'
            ],
            (object)[
                'kode_aset' => 'MB-003',
                'no_polisi' => 'B 9012 GHI',
                'merk' => 'Honda HR-V',
                'tahun' => '2024',
                'tmt_pembelian' => '2024-03-01',
                'pengguna' => 'Citra Dewi',
                'kondisi' => 'Baik',
                'riwayat_pemakaian' => 'Dinas luar kota'
            ]

        ];

        return view('kendaraan.mobil', [
            'mobils' => $mobils,
            'title' => 'Daftar Mobil'
        ]);
    }


    public function motor()
    {
        // Data dami untuk motor
        $motors = [
            // (object)[
            //     'nopol' => 'AB 1234 CD',
            //     'nama' => 'ninja ss',
            //     'terakhir_service' => now()->subMonths(3)->format('d M Y'),
            //     'berlaku_stnk' => now()->addMonths(2)->format('d M Y'),
            //     'berlaku_plat' => now()->addYears(1)->format('d M Y'),
            // ],
            (object)[
                'kode_aset' => 'MT-001',
                'no_polisi' => 'B 3456 JKL',
                'merk' => 'Honda Beat',
                'tahun' => '2022',
                'tmt_pembelian' => '2022-05-10',
                'pengguna' => 'Rudi Hermawan',
                'kondisi' => 'Baik',
                'no_mesin' => 'HM123456'
            ],
            (object)[
                'kode_aset' => 'MT-002',
                'no_polisi' => 'B 7890 MNO',
                'merk' => 'Yamaha NMAX',
                'tahun' => '2023',
                'tmt_pembelian' => '2023-11-25',
                'pengguna' => 'Dewi Lestari',
                'kondisi' => 'Rusak Ringan',
                'no_mesin' => 'YM654321'
            ]

        ];

        return view('kendaraan.motor', [
            'motors' => $motors,
            'title' => 'Daftar motor'
        ]);
    }
}
     // Menampilkan daftar mobil Atik data base
// public function mobil()
    // {
    //     $mobils = Kendaraan::where('jenis', 'mobil')->get();
    //     return view('kendaraan.mobil', [
    //         'title' => 'Daftar Mobil',
    //         'mobils' => $mobils
    //     ]);
    // }

    // // Menampilkan daftar motor
    // public function motor()
    // {
    //     $motors = Kendaraan::where('jenis', 'motor')->get();
    //     return view('kendaraan.motor', [
    //         'title' => 'Daftar Motor',
    //         'motors' => $motors
    //     ]);
    // }

    // // Form tambah mobil
    // public function createMobil()
    // {
    //     return view('kendaraan.create-mobil', [
    //         'title' => 'Tambah Mobil Baru'
    //     ]);
    // }

    // // Form tambah motor
    // public function createMotor()
    // {
    //     return view('kendaraan.create-motor', [
    //         'title' => 'Tambah Motor Baru'
    //     ]);
    // }

    // // Simpan data mobil baru
    // public function storeMobil(Request $request)
    // {
    //     $data = $request->validate([
    //         'nama' => 'required|string',
    //         'nopol' => 'required|unique:kendaraan',
    //         'terakhir_service' => 'required|date',
    //         'berlaku_stnk' => 'required|date',
    //         'berlaku_plat' => 'required|date'
    //     ]);

    //     $data['jenis'] = 'mobil'; // Set jenis sebagai mobil

    //     Kendaraan::create($data);

    //     return redirect()->route('kendaraan.mobil')->with('success', 'Data mobil berhasil ditambahkan!');
    // }

    // // Simpan data motor baru
    // public function storeMotor(Request $request)
    // {
    //     $data = $request->validate([
    //         'nama' => 'required|string',
    //         'nopol' => 'required|unique:kendaraan',
    //         'terakhir_service' => 'required|date',
    //         'berlaku_stnk' => 'required|date',
    //         'berlaku_plat' => 'required|date'
    //     ]);

    //     $data['jenis'] = 'motor'; // Set jenis sebagai motor

    //     Kendaraan::create($data);

    //     return redirect()->route('kendaraan.motor')->with('success', 'Data motor berhasil ditambahkan!');
    // }

    // // Form edit mobil
    // public function editMobil($id)
    // {
    //     $mobil = Kendaraan::findOrFail($id);
    //     return view('kendaraan.edit-mobil', [
    //         'title' => 'Edit Data Mobil',
    //         'mobil' => $mobil
    //     ]);
    // }

    // // Form edit motor
    // public function editMotor($id)
    // {
    //     $motor = Kendaraan::findOrFail($id);
    //     return view('kendaraan.edit-motor', [
    //         'title' => 'Edit Data Motor',
    //         'motor' => $motor
    //     ]);
    // }

    // // Update data mobil
    // public function updateMobil(Request $request, $id)
    // {
    //     $mobil = Kendaraan::findOrFail($id);

    //     $data = $request->validate([
    //         'nama' => 'required|string',
    //         'nopol' => 'required|unique:kendaraan,nopol,' . $id,
    //         'terakhir_service' => 'required|date',
    //         'berlaku_stnk' => 'required|date',
    //         'berlaku_plat' => 'required|date'
    //     ]);

    //     $mobil->update($data);

    //     return redirect()->route('kendaraan.mobil')->with('success', 'Data mobil berhasil diperbarui!');
    // }

    // // Update data motor
    // public function updateMotor(Request $request, $id)
    // {
    //     $motor = Kendaraan::findOrFail($id);

    //     $data = $request->validate([
    //         'nama' => 'required|string',
    //         'nopol' => 'required|unique:kendaraan,nopol,' . $id,
    //         'terakhir_service' => 'required|date',
    //         'berlaku_stnk' => 'required|date',
    //         'berlaku_plat' => 'required|date'
    //     ]);

    //     $motor->update($data);

    //     return redirect()->route('kendaraan.motor')->with('success', 'Data motor berhasil diperbarui!');
    // }

    // // Hapus data mobil/motor
    // public function destroy($id)
    // {
    //     $kendaraan = Kendaraan::findOrFail($id);
    //     $kendaraan->delete();

    //     $redirectRoute = ($kendaraan->jenis == 'mobil')
    //          route('kendaraan.mobil')
    //         : route('kendaraan.motor');

    //     return redirect($redirectRoute)->with('success', 'Data berhasil dihapus!');
