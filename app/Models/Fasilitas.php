<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;
     protected $fillable = ['id', 'nama_fasilitas','photo'];
    public $timestamp   = true;

    public function deleteImage(){
        if ($this->photo && file_exists(public_path('storage/fasilitas'. $this->photo))) {
            return unlink(public_path('storage/fasilitas' . $this->photo));
        }
    }
}
