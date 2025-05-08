<?php
namespace App\Http\Controllers;

use App\Models\karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = karyawan::all();
        return view('admin-view.karyawan.index', compact('karyawan'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-view.karyawan.create');
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
            'nama'          => 'required',
            'jenis_kelamin' => 'required',
            'tugas'         => 'required',
            'jabatan'       => 'required',
            'photo'         => 'nullable|mimes:jpg,png|max:1024',
        ]);

        $karyawan                = new karyawan();
        $karyawan->nama          = $request->nama;
        $karyawan->jenis_kelamin = $request->jenis_kelamin;
        $karyawan->tugas         = $request->tugas;
        $karyawan->jabatan       = $request->jabatan;

        if ($request->hasFile('photo')) {
            $img  = $request->file('photo');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/karyawan', $name);
            $karyawan->photo = $name;
        }

        $karyawan->save();

        session()->flash('success', 'Data berhasil ditambahkan');

        return redirect()->route('karyawan.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $karyawan = karyawan::findOrFail($id);
        return view('admin-view.karyawan.show', compact('karyawan'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $karyawan = karyawan::findOrFail($id);
        return view('admin-view.karyawan.edit', compact('karyawan'));

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
        $karyawan                = karyawan::findOrFail($id);
        $karyawan->nama          = $request->nama;
        $karyawan->jenis_kelamin = $request->jenis_kelamin;
        $karyawan->tugas         = $request->tugas;
        $karyawan->jabatan       = $request->jabatan;

        if ($request->hasFile('photo')) {
            $karyawan->deleteImage();
            $img  = $request->file('photo');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/karyawan', $name);
            $karyawan->photo = $name;
        }

        $karyawan->save();

        session()->flash('success', 'Data berhasil diUbah');

        return redirect()->route('karyawan.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $karyawan = karyawan::findOrFail($id);
        $karyawan->delete();
        session()->flash('success', 'Data berhasil dihapus');
        return redirect()->route('karyawan.index');

    }
}
