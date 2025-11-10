<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'pasien';
    protected $primaryKey = 'id_pasien';
    protected $fillable = ['nama_pasien'];

    public function Pemilik()
    {
        return $this->belongsTo(Pemilik::class, 'idpemilik', 'idpemilik');
    }

    public function Pet()
    {
        return $this->belongsTo(Pet::class, 'id_pet', 'id_pet');
    }

    public function Pendaftaran()
    {
        return $this->hasMany(Pendaftaran::class, 'id_pendaftaran', 'id_pendaftaran');
    }

}
