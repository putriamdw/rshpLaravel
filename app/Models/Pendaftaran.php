<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $table = 'pendaftaran';
    protected $primaryKey = 'id_pendaftaran';
    protected $fillable = ['tanggal_daftar', 'keluhan'];

    public function Pemilik()
    {
        return $this->hasMany(Pemilik::class, 'idpemilik', 'idpemilik');
    }

    public function Pet()
    {
        return $this->hasMany(Pet::class, 'id_pet', 'id_pet');
    }

    public function Pasien()
    {
        return $this->hasMany(Pasien::class, 'id_pasien', 'id_pasien');
    }

}
