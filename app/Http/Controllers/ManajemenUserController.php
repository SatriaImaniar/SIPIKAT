<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ManajemenUserController extends Controller
{
    public function index()
    {
        $users = collect([
            // Tambahkan field id
            [
                'id' => 1,
                'name' => 'Ahmad Santoso',
                'nip' => '198003122005021001',
                'roles' => ['Admin'],
                'password' => 'patangpuluhpatang'
            ],
            [
                'id' => 2,
                'name' => 'Dewi Lestari',
                'nip' => '19951215202462587',
                'roles' => ['Staff', 'Keuangan'],
                'password' => 'rongpuluhjutabae'
            ],
            [
                'id' => 3,
                'name' => 'Kitagawasan',
                'nip' => '199512152020122001',
                'roles' => ['Staff', 'Evalaporasi'],
                'password' => 'rongpuluhjutabaen'
            ],
        ])->map(function ($item) {
            return (object)$item;
        });

        return view('manajemenuser', ['users' => $users]);
    }

    public function show($id)
{
    $users = collect([
        [
            'id' => 1,
            'name' => 'Ahmad Santoso',
            'nip' => '198003122005021001',
            'No HP' => '1234567890',
            'NIK' => '1234567890123456',
            'Tempat Lahir' => 'Jakarta',
            'Tanggal Lahir' => '1980-03-12', // Format tanggal diperbaiki
            'NIP' => '198003122005021001',
            'NPWP' => '999888777666555',
            'Jenis Kelamin' => 'L',
            'Umur' => '42',
            'Pendidikan' => 'S1 Teknik Informatika',
            'Lama Pengabdian' => '15 Tahun',
            'Pangkat/Gol Ruang' => 'IV/a',
            'Alamat' => 'wanacala, jalan raya no 1',
            'rekening Bank' => '0123456789',
            'roles' => ['Admin'],
            'password' => 'patangpuluhpatang'
        ],
        [
            'id' => 2,
            'name' => 'Dewi Lestari',
            'nip' => '199512152020122001',
            'No HP' => '087654321098',
            'NIK' => '3276543210987654',
            'Tempat Lahir' => 'Bandung',
            'Tanggal Lahir' => '1995-12-15',
            'NPWP' => '123456789012345',
            'Jenis Kelamin' => 'P',
            'Umur' => '28',
            'Pendidikan' => 'S1 Akuntansi',
            'Lama Pengabdian' => '5 Tahun',
            'Pangkat/Gol Ruang' => 'III/c',
            'Alamat' => 'Jl. Merdeka No. 45',
            'rekening Bank' => '9876543210',
            'roles' => ['Staff', 'Keuangan'],
            'password' => 'rongpuluhjutabaen'
        ]
    ])->map(fn($u)=>(object)$u);

    $user = $users->firstWhere('id', (int)$id);

    if(!$user) {
        abort(404);
    }
    return view('manajemen-user.show', ['user' => $user]);
}
}










// Class Dummy harus didefinisikan DI LUAR controller
// class DummyUser {
//     public $name, $email, $roles, $is_active;
    
//     public function __construct($data) {
//         $this->name = $data['name'];
//         $this->email = $data['email'];
//         $this->roles = $data['roles'];
//         $this->is_active = $data['is_active'];
//     }
// }

// class DummyRole {
//     public $name;
    
//     public function __construct($name) {
//         $this->name = $name;
//     }
// }

// class ManajemenUserController extends Controller
// {
//     public function index()
//     {
//          Contoh data dummy dengan struktur yang konsisten
//         $users = DB::table('users')->get();
// dd($users);
//         return view('manajemenuser', ['users' => $users]);
//     }
// }