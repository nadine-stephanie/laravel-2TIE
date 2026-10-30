<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cv = Portofolio::first(); 
        return view('cv.index', compact('cv'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('cv.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'full_name' => 'required',
            'title' => 'required',
            'email' => 'required|email',
            'summary' => 'required',
        ]);

        Portofolio::create($request->all());
        return redirect()->route('cv.index')->with('success', 'CV berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Portofolio $portofolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $cv = Portofolio::findOrFail($id);
    
        return view('cv.edit', compact('cv'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $cv = Portofolio::findOrFail($id);
        $cv->update($request->all());
        return redirect()->route('cv.index')->with('success', 'CV berhasil diperbarui!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $cv = Portofolio::findOrFail($id);

    // // Hapus foto profil dari storage jika ada agar tidak memenuhi server
    // if ($cv->profile_image) {
    //     Storage::disk('public')->delete($cv->profile_image);
    // }

        $cv->delete();

        return redirect()->route('cv.index')->with('success', 'Data CV berhasil dihapus!');
    }
}
