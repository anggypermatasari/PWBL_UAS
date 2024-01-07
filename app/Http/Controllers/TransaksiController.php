<?php

namespace App\Http\Controllers;

use App\Models\Bayar;
use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Siswa;
use App\Models\Buku;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Transaksi::all();
        return view('transaksi.index',compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $siswa = Siswa::all();
        $bayar = Bayar::all();
        return view('transaksi.create', compact('siswa','bayar'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Transaksi::create([
            'id_transaksi'      => $request->id_transaksi,
            'id_siswa'          => $request->id_siswa,
            'id_bayar'          => $request->id_bayar,
            'jumlah_pembayaran' => $request->jumlah_pembayaran,
            'tanggal_pembayaran'=> $request->tanggal_pembayaran
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
      $row      = Transaksi::find($id);
      $siswa    = Siswa::all();
      $bayar    = Bayar::all();
     
      return view('transaksi.create', compact('siswa','bayar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row =Transaksi::findOrFail($id);

        $row->update([
            'id_transaksi'      => $request->id_transaksi,
            'id_siswa'          => $request->id_siswa,
            'id_bayar'          => $request->id_bayar,
            'jumlah_pembayaran' => $request->jumlah_pembayaran,
            'tanggal_pembayaran'=> $request->tanggal_pembayaran
        ]);
        return redirect ('transaksi');  

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row =Transaksi::findOrFail($id);

        $row->delete();

        return redirect ('transaksi');
    }
}
