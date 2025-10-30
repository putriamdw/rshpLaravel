<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KodeTindakan extends Model
{
    protected $table = 'kode_tindakan_terapi';
    protected $primaryKey = 'idkode_tindakan_terapi';
    protected $fillable = ['nama'];

    public function detailRekamMedis()
    {
        return $this->hasMany(DetailRekamMedis::class, 'idkode_tindakan_terapi', 'idkode_tindakan_terapi');
    }
}
