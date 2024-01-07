<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bayar;

class BayarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows  = Bayar::all();
        return view('bayar.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('bayar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Bayar::create([
            'bayar_jenis'     =>  $request->bayar_jenis,
            'bayar_harga'     =>  $request->bayar_harga,
            'bayar_jumlah'    =>  $request->bayar_jumlah
        ]);
        return redirect('bayar');
        
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
        $row = Bayar::find($id);
        return view('bayar.edit',compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Bayar::findOrFail($id);

        $row->update([
            'bayar_jenis'     =>  $request->bayar_jenis,
            'bayar_harga'     =>  $request->bayar_harga,
            'bayar_jumlah'    =>  $request->bayar_jumlah
        ]);
        return redirect('bayar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Bayar::findOrFail($id);

        $row->delete();

        return redirect('bayar');
    }
}
