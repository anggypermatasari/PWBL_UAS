@extends('layouts.app')

@section('content')

<h2>Data Pembayaran</h2>

<a href="{{ url('bayar/create') }}" class="btn btn-warning mb-3">Tambah Data</a>

<table class="table table-bordered">
    <tr>
        <th>NO</th>
        <th>JENIS PEMBAYARAN</th>
        <th>HARGA</th>
        <th>JUMLAH</th>
        <th>EDIT</th>
        <th>DELETE</th>

    </tr>
    @foreach ($rows as $row)
       <tr>
        <td>{{ $row->bayar_id }}</td>
        <td>{{ $row->bayar_jenis }}</td>
        <td>{{ $row->bayar_harga }}</td>
        <td>{{ $row->bayar_jumlah }}</td>
        <td><a href="{{ url ('bayar/edit/'. $row->bayar_id) }}" class="btn btn-primary">Edit</a></td>
        <td>
            <form action="{{ url('bayar/'. $row->bayar_id) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf
                <input type="submit" value="Delete" class="btn btn-danger" >
            </form>
        </td>
    </tr> 
    @endforeach
</table>

@endsection