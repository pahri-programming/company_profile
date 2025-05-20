<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class informasi extends Model
{
    use HasFactory;
    protected $table = 'informasis';
    protected $fillable = ['id', 'judul','deskripsi','photo'];
    public $timestamp   = true;

    public function deleteImage(){
        if ($this->photo && file_exists(public_path('storage/informasi'. $this->photo))) {
            return unlink(public_path('storage/informasi' . $this->photo));
        }
    }

}
