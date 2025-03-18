@extends('layouts/app')

@section('content')
 <h1 class="h3 mb-4 text-gray-800">
    <i class="fas fa-user-alt mr-2"></i>
    {{ $title }}</h1>

    <div class="card">
        <div class="card-header d-flex flex-wrap justify-content-center justify-content-xl-between">
            <div class="mb-1 mr-2">
                <a href="#" class="btn btn-sm btn-primary">   
                    <i class="fas fa-plus mr-2"></i>
                    Tambah anggota
                </a>
            </div>
            <div>
                <a href="#" class="btn btn-sm btn-success"> <i class="fas fa-file-excel mr-2"></i>Excel </a>
                <a href="#" class="btn btn-sm btn-danger"> <i class="fas fa-file-excel mr-2"></i>PDF </a>
            </div>
        </div>
        <div class="card-body ">

            <div class="table-responsive">
                <table class="table table-bordered float-right" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-primary text-white">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Sandi</th>
                            <th>email</th>
                            <th>
                                <i class="fas fa-cog"></i>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td>1</td>
                            <td>Donna Snider</td>
                            <td>123456789</td>
                            <td>
                                <span class="badge badge-dark badge-pill">Admin</span>
                            </td>
                            <td>
                                <span class=""> example@gmail.com </span>
                            </td>
                            <td class="text-center">
                                <a href="#" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i>
                                </a>
                                <a href="#" class="btn btn-primary btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td>2</td>
                            <td>Donna Snider</td>
                            <td>123456789</td>
                            <td>
                                <span class="badge badge-dark badge-pill">Admin</span>
                            </td>
                            <td>
                                <span class=""> example@gmail.com </span>
                            </td>
                            <td class="text-center">
                                <a href="#" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i>
                                </a>
                                <a href="#" class="btn btn-primary btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td>3</td>
                            <td>Donna Snider</td>
                            <td>123456789</td>
                            <td>lala</td>
                            <td>
                                <span class=""> example@gmail.com </span>
                            </td>
                            <td class="text-center">
                                <a href="#" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i>
                                </a>
                                <a href="#" class="btn btn-primary btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td>4</td>
                            <td>Donna Snider</td>
                            <td>123456789</td>
                            <td>
                                Admin
                            </td>
                            <td>
                                <span class=""> example@gmail.com </span>
                            </td>
                            <td class="text-center">
                                <a href="#" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i>
                                </a>
                                <a href="#" class="btn btn-primary btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection