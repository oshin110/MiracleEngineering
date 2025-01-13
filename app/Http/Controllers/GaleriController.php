<?php

namespace App\Http\Controllers;

use App\Models\galeri;
use App\Http\Requests\StoregaleriRequest;
use App\Http\Requests\UpdategaleriRequest;

use function Ramsey\Uuid\v1;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gambar = galeri::all();
        return view('admin.galeri.index', compact('gambar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.galeri.tambah_gambar');
    }

    /**
     * Store a newly created resource in storage.`
     */
    public function store(StoregaleriRequest $request)
    {
        $data = new galeri();
        $data->keterangan = $request->keterangan;
        
        $filename = '';
        if ($request->hasFile('gambar')) {
            $filename = $request->getSchemeAndHttpHost().'/asset/upload/'.time().'.'.$request->gambar->extension();
            $request->gambar->move(public_path('/asset/upload/'), $filename);
        }
        $data->gambar = $filename;

        $data->save();

        return redirect()->route('galeri.index')->with('success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(galeri $galeri)
    {
        $galeri = galeri::all();
        return view('galeri', compact('galeri'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(galeri $galeri)
    {
        return view('admin.galeri.edit', compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdategaleriRequest $request, galeri $galeri)
    {
        $galeri->Keterangan = $request->Keterangan;
        // Check if a new file is uploaded
        if ($request->hasFile('gambar')) {
            // Delete the old file if it exists
            if ($galeri->gambar && file_exists(public_path($galeri->gambar))) {
                unlink(public_path($galeri->gambar));
            }

            // Upload the new file
            $filename = '/asset/upload/' . time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('/asset/upload/'), $filename);
            $galeri->gambar = $filename; // Save the new file path
        }

        // Save other updates
        $galeri->save();

        return redirect()->route('galeri.index')->with('success', 'Data Berhasil Diubah!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(galeri $galeri)
    {
        $filePath = public_path($galeri->gambar);
        if (file_exists($filePath)) {
            unlink($filePath); // Delete the file
        }
        $galeri->delete();

        return redirect()->route('galeri.index')->with('success', 'Data Berhasil Dihapus');
    }
}
