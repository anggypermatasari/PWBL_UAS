<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows  = Siswa::all();
        return view('siswa.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Siswa::create([
            'siswa_nis'             =>  $request->siswa_nis,
            'siswa_nama'            =>  $request->siswa_nama,
            'siswa_jeniskelamin'    =>  $request->siswa_jeniskelamin,
            'siswa_kelas'           =>  $request->siswa_kelas
        ]);
        return redirect('siswa');
        
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
        $row = Siswa::find($id);
        return view('siswa.edit',compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Siswa::findOrFail($id);

        $row->update([
            'siswa_nis'             =>  $request->siswa_nis,
            'siswa_nama'            => $request->siswa_nama,
            'siswa_jeniskelamin'    =>  $request->siswa_jeniskelamin,
            'siswa_kelas'           =>  $request->siswa_kelas
        ]);
        return redirect('siswa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Siswa::findOrFail($id);

        $row->delete();

        return redirect('siswa');
    }
}
