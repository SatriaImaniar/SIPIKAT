<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Class Dummy harus didefinisikan DI LUAR controller
class DummyUser {
    public $name, $email, $roles, $is_active;
    
    public function __construct($data) {
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->roles = $data['roles'];
        $this->is_active = $data['is_active'];
    }
}

class DummyRole {
    public $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
}

class ManajemenUserController extends Controller
{
    public function index()
    {
        // Contoh data dummy dengan struktur yang konsisten
        $users = [
            new DummyUser([
                'name'      => 'Admin Utama',
                'email'     => 'admin@domain.test',
                'roles'     => [new DummyRole('Administrator')],
                'is_active' => true,
            ]),
            new DummyUser([
                'name'      => 'Budi Pegawai',
                'email'     => 'budi@domain.test',
                'roles'     => [new DummyRole('Pegawai')],
                'is_active' => false,
            ]),
            new DummyUser([
                'name'      => 'Siti Supervisor',
                'email'     => 'siti@domain.test',
                'roles'     => [
                    new DummyRole('Supervisor'),
                    new DummyRole('Pegawai')
                ],
                'is_active' => true,
            ]),
        ];

        return view('manajemenuser', ['users' => $users]);
    }
}