<?php
namespace App\Http\Controllers;

use App\Models\informasi;
use Illuminate\Http\Request;
use Storage;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informasi = informasi::all();
        return view('admin-view.informasi.index', compact('informasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-view.informasi.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul'     => 'required',
            'deskripsi' => 'required',
            'photo'     => 'nullable|mimes:jpg,png|max:1024',
        ]);

        $informasi            = new informasi();
        $informasi->judul     = $request->judul;
        $informasi->deskripsi = $request->deskripsi;

        if ($request->hasFile('photo')) {
            $img  = $request->file('photo');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/informasi', $name);
            $informasi->photo = $name;
        }

        $informasi->save();

        session()->flash('success', 'Data berhasil ditambahkan');

        return redirect()->route('informasi.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $informasi = informasi::findOrFail($id);
        return view('admin-view.informasi.show', compact('informasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $informasi = informasi::findOrFail($id);
        return view('admin-view.informasi.edit', compact('informasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'judul'     => 'required',
            'deskripsi' => 'required',
            'photo'     => 'nullable|mimes:jpg,png|max:1024',
        ]);

        $informasi            = informasi::findOrFail($id);
        $informasi->judul     = $request->judul;
        $informasi->deskripsi = $request->deskripsi;

        if ($request->hasFile('photo')) {
            $informasi->deleteImage();
            $img  = $request->file('photo');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/informasi', $name);
            $informasi->photo = $name;
        }

        $informasi->save();

        session()->flash('success', 'Data berhasil diUbah');

        return redirect()->route('informasi.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $informasi = informasi::findOrFail($id);
        $informasi->delete();
        session()->flash('success', 'Data berhasil dihapus');
        return redirect()->route('informasi.index');

    }
}
