<?php
namespace App\Http\Controllers;

use App\Models\Eskul;
use App\Models\Fasilitas;
use App\Models\informasi;
use App\Models\karyawan;
use App\Models\Prestasi;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informasi = informasi::take(3)->get();
        $karyawan  = karyawan::all();
        $eskul     = Eskul::all();
        $fasilitas = Fasilitas::all();
        $prestasi = Prestasi::all();

        return view('welcome', compact('informasi', 'karyawan', 'eskul', 'fasilitas','prestasi'));
    }

  public function informasi(){
    $informasi = informasi::all();
    return view('informasi',compact('informasi'));
  }

  public function detailInformasi($id){
    $informasi = informasi::findOrFail($id);
    return view('detail_informasi', compact('informasi'));
  }

  public function prestasi(){
    $prestasi = Prestasi::all();
    return view('prestasi',compact('prestasi'));
  }
}
