@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Barang</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Serial Number</th>
                <th>Pemilik ID</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barangs as $barang)
                <tr>
                    <td>{{ $barang->id }}</td>
                    <td>{{ $barang->nama }}</td>
                    <td>{{ $barang->kategori }}</td>
                    <td>{{ $barang->serial_number }}</td>
                    <td>{{ $barang->pemilik_id }}</td>
                    <td>{{ $barang->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
