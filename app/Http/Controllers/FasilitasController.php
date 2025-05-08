<?php
namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fasilitas = Fasilitas::all();
        return view('admin-view.fasilitas.index', compact('fasilitas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-view.fasilitas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fasilitas                 = new Fasilitas();
        $fasilitas->nama_fasilitas = $request->nama_fasilitas;

        if ($request->hasFile('photo')) {
            $img  = $request->file('photo');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/fasilitas', $name);
            $fasilitas->photo = $name;
        }

        $fasilitas->save();

        session()->flash('success', 'Data berhasil ditambahkan');

        return redirect()->route('fasilitas.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        return view('admin-view.fasilitas.show', compact('fasilitas'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        return view('admin-view.fasilitas.edit', compact('fasilitas'));

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

        $fasilitas                 = Fasilitas::findOrFail($id);
        $fasilitas->nama_fasilitas = $request->nama_fasilitas;

        if ($request->hasFile('photo')) {
            $fasilitas->deleteImage();
            $img  = $request->file('photo');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/fasilitas', $name);
            $fasilitas->photo = $name;
        }

        $fasilitas->save();

        session()->flash('success', 'Data berhasil diUbah');

        return redirect()->route('fasilitas.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        $fasilitas->delete();
        session()->flash('success', 'Data berhasil dihapus');
        return redirect()->route('fasilitas.index');

    }
}
