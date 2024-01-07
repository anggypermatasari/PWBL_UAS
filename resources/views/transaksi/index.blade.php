@extends('layouts.app')

@section('content')

<h2>Data Transaksi</h2>

<a href="{{ url ('transaksi/create') }}" class="btn btn-warning mb-3">Tambah Data</a>

<table class="table table-bordered">
    <tr>
        <th>NO</th>
        <th>NAMA SISWA</th>
        <th>JENIS PEMBAYARAN</th>
        <th>JUMLAH PEMBAYARAN</th>
        <th>TANGGAL PEMBAYARAN</th>
        <th>EDIT</th>
        <th>DELETE</th>
</tr>

@foreach ($rows as $row)
    <tr>
            <td>{{ $row->id_transaksi}}</td> 
            <td>{{ $row->Siswa['siswa_nama'] }}</td>
            <td>{{ $row->Bayar['bayar_jenis'] }}</td> 
            <td>{{ $row->jumlah_pembayaran}}</td>
            <td>{{ $row->tanggal_pembayaran}}</td>
            <td><a href="{{ url ('transaksi/edit/' . $row->id_transaksi ) }}" class="btn btn-primary">Edit</a></td> 
            <td>
                <form action="{{url ('transaksi/'. $row->id_transaksi) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf
                <input type="submit" value="Delete" class="btn btn-danger">

                </form>
            </td>
    </tr>
@endforeach

</table>

@endsection