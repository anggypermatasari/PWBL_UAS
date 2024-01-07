@extends('layouts.app')

@section('content')

<h2>Tambah Data Pembayaran</h2>

        <form action="{{ url('bayar')}}" method="post"> 
            @csrf
            <div class="mb-3">
                <label for="">JENIS PEMBAYARAN</label>
                <input type="text" name="bayar_jenis" id="" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">HARGA</label>
                <input type="text" name="bayar_harga" id="" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">JUMLAH</label>
                <input type="text" name="bayar_jumlah" id="" class="form-control">
            </div>
            
            <div class="mb-3">
                <input type="submit" value="SIMPAN" class="btn btn-primary">
            </div>  
        </form>

@endsection