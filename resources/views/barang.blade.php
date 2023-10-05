@extends('layout')

@include('navbar')

@section('title', 'Stok Barang')
@section('header', 'Stok Barang')

@section('content')

<div class="container">
    <table border="1 px" class="table table-striped table-bordered">
    <thead>
        <th>id</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Id Supplier</th>
    </thead>
    <tbody>
        @foreach ($data_barang as $barang)
            <tr>
                <td>{{ $barang->id }}</td>
                <td>{{ $barang->nama_barang }}</td>
                <td>{{ "Rp ".number_format($barang->harga, 2, ',', ',') }}</td>
                <td>{{ $barang->stok }}</td>
                <td>{{ $barang->id_suplier }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection