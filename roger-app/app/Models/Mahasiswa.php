<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $fillable = ['nama','npm','tanggal_lahir','tempat_lahir','alamat','fakultas_id', 'prodi_id', 'url_foto'];

    public function prodi(){
        return $this -> belongsTo(Prodi::class, 'prodi_id');
        // return $this -> belongsTo(Nama_model::class, 'foreign_key');
    }
}
