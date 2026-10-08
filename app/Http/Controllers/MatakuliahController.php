<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Menampilkan data mata kuliah ";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Menampilkan form tambah mata kuliah ";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Menyimpan data mata kuliah baru ";
    }

    /**
     * Display the specified resource.
     */
    public function show($kode = null)
    {
        if($kode) {
            return "Anda mengakses mata kuliah ". $kode;
        }

        return "Masukkan kode mata kuliah ";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($kode)
    {
        return "Menampilkan form edit mata kuliah dengan kode: ". $kode;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $kode)
    {
        return "Memperbarui data mata kuliah dengan kode: " . $kode;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($kode)
    {
        return "Menghapus data mata kuliah dengan kode: " . $kode;
    }
}
