<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisHewan extends Model
{
    protected $table = 'jenis_hewan';
    protected $primaryKey = 'idjenis_hewan';
    protected $fillable = ['nama_jenis_hewan'];

    // memastikan created_at dan updated_at
    public $timestamps = false;
    
    public function RasHewan()
    {
        return $this->hasMany(RasHewan::class, 'idjenis_hewan', 'idjenis_hewan');
    }
}
