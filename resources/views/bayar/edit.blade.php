@extends('layouts.app')

@section('content')

<h2>Edit Data Pembayaran</h2>

        <form action="{{ url('bayar/' .  $row->bayar_id)}}" method="post"> 
            <input type="hidden" name="_method" value="PATCH">
            @csrf

            <div class="mb-3">
                <label for="">JENIS PEMBAYARAN</label>
                <input type="text" name="bayar_jenis" id="" class="form-control" value="{{  $row->bayar_jenis }}">
            </div>

            <div class="mb-3">
                <label for="">HARGA</label>
                <input type="text" name="bayar_harga" id="" class="form-control" value="{{  $row->bayar_harga }}">
            </div>

            <div class="mb-3">
                <label for="">JUMLAH</label>
                <input type="text" name="bayar_jumlah" id="" class="form-control" value="{{  $row->bayar_jumlah }}">
            </div>
            
            <div class="mb-3">
                <input type="submit" value="UPDATE" class="btn btn-primary">
            </div>  
        </form>

@endsection