@extends('layouts.app')

@section('content')

<h2>Tambah Data Siswa</h2>

        <form action="{{ url('siswa')}}" method="post"> 
            @csrf
            <div class="mb-3">
                <label for="">NIS</label>
                <input type="text" name="siswa_nis" id="" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">NAMA</label>
                <input type="text" name="siswa_nama" id="" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">JENIS KELAMIN</label>
                <input type="text" name="siswa_jeniskelamin" id="" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">KELAS</label>
                <input type="text" name="siswa_kelas" id="" class="form-control">
            </div>
            
            <div class="mb-3">
                <input type="submit" value="SIMPAN" class="btn btn-primary">
            </div>  
        </form>

@endsection