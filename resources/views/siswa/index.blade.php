@extends('layouts.app')

@section('content')

<h2>Data Siswa</h2>

<a href="{{ url('siswa/create') }}" class="btn btn-warning mb-3">Tambah Data</a>

<table class="table table-bordered">
    <tr>
        <th>NO</th>
        <th>NIS</th>
        <th>NAMA</th>
        <th>JENIS KELAMIN</th>
        <th>KELAS</th>
        <th>EDIT</th>
        <th>DELETE</th>

    </tr>
    @foreach ($rows as $row)
       <tr>
        <td>{{ $row->siswa_id }}</td>
        <td>{{ $row->siswa_nis }}</td>
        <td>{{ $row->siswa_nama }}</td>
        <td>{{ $row->siswa_jeniskelamin }}</td>
        <td>{{ $row->siswa_kelas }}</td>
        <td><a href="{{ url ('siswa/edit/'. $row->siswa_id) }}" class="btn btn-primary">Edit</a></td>
        <td>
            <form action="{{ url('siswa/'. $row->siswa_id) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf
                <input type="submit" value="Delete" class="btn btn-danger" >
            
            </form>
        </td>
    </tr> 
    @endforeach
</table>

@endsection