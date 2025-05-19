<?php
namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestasi = Prestasi::all();
        return view('admin-view.prestasi.index', compact('prestasi'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-view.prestasi.create');
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
            'tgl_prestasi'  => 'required',
            'nama_prestasi' => 'required',
            'tingkat'       => 'required',
            'deskripsi'     => 'required',
            'photo'         => 'nullable|mimes:jpg,png|max:1024',
        ]);

        $prestasi                = new Prestasi();
        $prestasi->tgl_prestasi  = $request->tgl_prestasi;
        $prestasi->nama_prestasi = $request->nama_prestasi;
        $prestasi->tingkat       = $request->tingkat;
        $prestasi->deskripsi     = $request->deskripsi;

        if ($request->hasFile('photo')) {
            $img  = $request->file('photo');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/prestasi', $name);
            $prestasi->photo = $name;
        }

        $prestasi->save();

        session()->flash('success', 'Data berhasil ditambahkan');

        return redirect()->route('prestasi.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        return view('admin-view.prestasi.show', compact('prestasi'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        return view('admin-view.prestasi.edit', compact('prestasi'));

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
            'tgl_prestasi'  => 'required',
            'nama_prestasi' => 'required',
            'tingkat'       => 'required',
            'deskripsi'     => 'required',
            'photo'         => 'nullable|mimes:jpg,png|max:1024',
        ]);

        $prestasi                = Prestasi::findOrFail($id);
        $prestasi->tgl_prestasi  = $request->tgl_prestasi;
        $prestasi->nama_prestasi = $request->nama_prestasi;
        $prestasi->tingkat       = $request->tingkat;
        $prestasi->deskripsi     = $request->deskripsi;

        if ($request->hasFile('photo')) {
            $prestasi->deleteImage();
            $img  = $request->file('photo');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/prestasi', $name);
            $prestasi->photo = $name;
        }

        $prestasi->save();

        session()->flash('success', 'Data berhasil diUbah');

        return redirect()->route('prestasi.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        $prestasi->delete();
        session()->flash('success', 'Data berhasil dihapus');
        return redirect()->route('prestasi.index');

    }
}
