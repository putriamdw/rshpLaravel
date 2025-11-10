<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    use HasFactory;

    protected $table = 'rekam_medis';
    protected $primaryKey = 'idrekam_medis';
    protected $fillable = ['anamnesa', 'temuan_klinis', 'diagnosa', 'terapi', 'dokter_pemeriksa'];

    public function DetailRekamMedis()
    {
        return $this->belongsTo(DetailRekamMedis::class, 'idrekam_medis', 'idrekam_medis');
    }

    public function Pet()
    {
        return $this->belongsTo(Pet::class, 'id_pet', 'id_pet');
    }

}
