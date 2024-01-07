@extends('layouts.app')

@section('content')

<h2>Edit Data Siswa</h2>

        <form action="{{ url('siswa/' .  $row->siswa_id)}}" method="post"> 
            <input type="hidden" name="_method" value="PATCH">
            @csrf
            <div class="mb-3">
                <label for="">NIS</label>
                <input type="text" name="siswa_nis" id="" class="form-control" value="{{ $row->siswa_nis }}">
            </div>

            <div class="mb-3">
                <label for="">NAMA</label>
                <input type="text" name="siswa_nama" id="" class="form-control" value="{{ $row->siswa_nama }}">
            </div>

            <div class="mb-3">
                <label for="">JENIS KELAMIN</label>
                <input type="text" name="siswa_jeniskelamin" id="" class="form-control" value="{{ $row->siswa_jeniskelamin }}">
            </div>

            <div class="mb-3">
                <label for="">KELAS</label>
                <input type="text" name="siswa_kelas" id="" class="form-control" value="{{ $row->siswa_kelas }}">
            </div>
            
            <div class="mb-3">
                <input type="submit" value="UPDATE" class="btn btn-primary">
            </div>  
        </form>

@endsection