<?php
namespace App\Http\Controllers;

use App\Models\Eskul;
use Illuminate\Http\Request;

class EskulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eskul = Eskul::all();
        return view('admin-view.eskul.index', compact('eskul'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-view.eskul.create');

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
            'nama_eskul' => 'required',
            'photo'      => 'nullable|mimes:jpg,png|max:1024',
        ]);

        $eskul             = new Eskul();
        $eskul->nama_eskul = $request->nama_eskul;

        if ($request->hasFile('photo')) {
            $img  = $request->file('photo');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/eskul', $name);
            $eskul->photo = $name;
        }

        $eskul->save();

        session()->flash('success', 'Data berhasil ditambahkan');

        return redirect()->route('eskul.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $eskul = Eskul::findOrFail($id);
        return view('admin-view.eskul.show', compact('eskul'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $eskul = Eskul::findOrFail($id);
        return view('admin-view.eskul.edit', compact('eskul'));

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
            'nama_eskul' => 'required',
            'photo'      => 'nullable|mimes:jpg,png|max:1024',
        ]);

        $eskul             = Eskul::findOrFail($id);
        $eskul->nama_eskul = $request->nama_eskul;

        if ($request->hasFile('photo')) {
            $eskul->deleteImage();
            $img  = $request->file('photo');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/eskul', $name);
            $eskul->photo = $name;
        }

        $eskul->save();

        session()->flash('success', 'Data berhasil diUbah');

        return redirect()->route('eskul.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eskul = Eskul::findOrFail($id);
        $eskul->delete();
        session()->flash('success', 'Data berhasil dihapus');
        return redirect()->route('eskul.index');

    }
}
