<?php

namespace App\Http\Controllers;

use App\Models\ContactUS;
use App\Http\Requests\StoreContactUSRequest;
use App\Http\Requests\UpdateContactUSRequest;

class ContactUSController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact = ContactUS::all();
        return view('admin.contact_us.index', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactUSRequest $request)
    {
        $data = new ContactUS();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->pesan = $request->pesan;
        $data->save();
        
        return redirect()->route('contact_us.index')->with('success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactUS $contactUS)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactUS $contactUS)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactUSRequest $request, ContactUS $contactUS)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactUS $contactUS)
    {
        //
    }
}
