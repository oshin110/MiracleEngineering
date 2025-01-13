<?php

namespace App\Http\Controllers;

use App\Models\Proyek;
use App\Http\Requests\StoreProyekRequest;
use App\Http\Requests\UpdateProyekRequest;

class ProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proyek = Proyek::all();
        return view('admin.proyek.index',  compact('proyek'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.proyek.tambah_proyek');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProyekRequest $request)
    {
        $proyek = new Proyek();
        $proyek->nama_proyek = $request->nama_proyek;
        $proyek->harga_minimum = $request->harga_minimum;
        $proyek->harga_maksimum = $request->harga_maksimum;
        
        $ukuran = "";
        $collection = [];
        for($i = 0; $i < count($request->ukuran); $i++){
            $ukuran .= (string)$request->ukuran[$i];
            
            if($i % 2 != 0){
                $collection[] = $ukuran;
                $ukuran = "";
            }else{
                $ukuran .= "-";
            }
        }
        
        $proyek->ukuran = json_encode($collection);
        $proyek->save();

        return redirect()->route('proyek.index')->with('success', 'Data Berhasil Ditambahkan!');
        
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
       $proyek = Proyek::all();
        return view('order', compact('proyek'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyek $proyek)
    {
        return view('admin.proyek.edit', compact('proyek'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProyekRequest $request, Proyek $proyek)
    {
        $proyek->nama_proyek = $request->nama_proyek;
        $proyek->harga_minimum = $request->harga_minimum;
        $proyek->harga_maksimum = $request->harga_maksimum;
        
        $ukuran = "";
        $collection = [];
        for($i = 0; $i < count($request->ukuran); $i++){
            $ukuran .= (string)$request->ukuran[$i];
            
            if($i % 2 != 0){
                $collection[] = $ukuran;
                $ukuran = "";
            }else{
                $ukuran .= "-";
            }
        }
        
        $proyek->ukuran = json_encode($collection);
        $proyek->save();

        return redirect()->route('proyek.index')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyek $proyek)
    {
        $proyek->delete();
        return redirect()->route('proyek.index')->with('success', 'Data Berhasil Dihapus!');
    }
}
