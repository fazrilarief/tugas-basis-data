<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cake;

class CakeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cakes = Cake::all();
        return view('pages.cake', compact('cakes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|integer',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $cake = Cake::create($validated);

        if ($request->file('foto')) {
            // save cake file foto
            $request->file('foto')->move('fotoKue/', $request->file('foto')->getClientOriginalName());
            // get original name cake foto
            $cake->foto = $request->file('foto')->getClientOriginalName();
            // save data into database
            $cake->save();
        }

        return redirect()->route('cake');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cakes = Cake::findOrFail($id);
        return view('pages.show', compact('cakes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cakes = Cake::findOrFail($id);
        return view('pages.edit', compact('cakes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|integer',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $cake = Cake::findOrFail($id);

        $cake->update($validated);

        if ($request->hasFile('foto')) {
            $fileName = $request->file('foto')->getClientOriginalName();
            $request->file('foto')->move('fotoKue/', $fileName);

            $cake->foto = $fileName;
            $cake->save();
        }

        return redirect()->route('cake');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Mencari data berdasarkan id
        $cake = Cake::findOrFail($id);
        // Menghapus data berdasarkan id yang dipilih
        $cake->delete();
        // Mengembalikan halaman
        if ($cake) {
            return redirect()->back();
        }
    }
}
