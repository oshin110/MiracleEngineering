<?php

namespace App\Http\Controllers;

use App\Models\testimoni;
use App\Http\Requests\StoretestimoniRequest;
use App\Http\Requests\UpdatetestimoniRequest;
use PHPUnit\Event\Code\Test;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimoni = Testimoni::all();
        return view('admin.testimoni.index', compact('testimoni'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimoni.tambah_testimoni');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoretestimoniRequest $request)
    {
        $data = new testimoni();
        $data->nama = $request->nama;
        $data->testimoni = $request->testimoni;
        $data->save();
        return redirect()->route('testimoni.index')->with('success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(testimoni $testimoni)
    {
        $testimoni = Testimoni::all();
        return view('testimoni', compact('testimoni'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(testimoni $testimoni)
    {
        return view('admin.testimoni.edit', compact('testimoni'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatetestimoniRequest $request, testimoni $testimoni)
    {
        $data = testimoni::find($testimoni->id);
        $data->nama = $request->nama;
        $data->testimoni = $request->testimoni;
        $data->save();
        return redirect()->route('testimoni.index')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(testimoni $testimoni)
    {
        $testimoni->delete();
        return redirect()->route('testimoni.index')->with('success', 'Data Berhasil Dihapus!');
    }
}
