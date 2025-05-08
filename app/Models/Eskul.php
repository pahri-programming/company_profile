<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eskul extends Model
{
    use HasFactory;
     protected $fillable = ['id', 'nama_eskul','photo'];
    public $timestamp   = true;

    public function deleteImage(){
        if ($this->photo && file_exists(public_path('storage/eskul'. $this->photo))) {
            return unlink(public_path('storage/eskul' . $this->photo));
        }
    }
}
