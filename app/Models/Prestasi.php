<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'tgl_prestasi','nama_prestasi','tingkat','deskripsi','photo'];
    public $timestamp   = true;

     public function deleteImage(){
        if ($this->photo && file_exists(public_path('storage/photo'. $this->photo))) {
            return unlink(public_path('storage/photo' . $this->photo));
        }
    }
}
