@extends('layouts.app')

@section('content')

<h2>Tambah Data Transaksi</h2>

    <form action="{{url ('transaksi') }}" method="post">
    @csrf
        <div class="mb-3">
            <label for="">NAMA SISWA</label>
            <select name="id_siswa" id="id_siswa" class="form-control">
            @foreach ($siswa as $Siswa)
                <option value="{{ $Siswa->siswa_id }}">{{ $Siswa->siswa_nama }}</option>
            @endforeach
            </select> 
        </div>

        <div class="mb-3">
            <label for="">JENIS PEMBAYARAN</label>
            <select name="id_bayar" id="id_bayar" class="form-control" required>
                @foreach ($bayar as $Bayar)
                <option value="{{ $Bayar->bayar_id }}">{{ $Bayar->bayar_jenis }}</option>
                @endforeach
            </select>   
        </div>

        <div class="mb-3">
            <label for="">JUMALH PEMBAYARAN</label>
            <input type="text" name="jumlah_pembayaran" id="" class="form-control">
        </div>

        <div class="mb-3">
            <label for="">TANGGAL PEMBAYARAN</label>
            <input type="date" name="tanggal_pembayaran" id="" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="SIMPAN" class="btn btn-primary">
        </div>
    </form>

@endsection