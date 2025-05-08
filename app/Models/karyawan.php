<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama','jenis_kelamin','tugas','jabatan'];
    public $timestamp   = true;

     public function deleteImage(){
        if ($this->photo && file_exists(public_path('storage/karyawan'. $this->photo))) {
            return unlink(public_path('storage/karyawan' . $this->photo));
        }
    }
}
