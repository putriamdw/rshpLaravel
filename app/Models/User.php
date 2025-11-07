<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'iduser';
    public $timestamps = false; // matikan created_at & updated_at

    protected $fillable = [
        'nama',
        'email',
        'password',
        'nama_role', // pastikan ada kolom role
    ];

    // Relasi jika ada tabel pemilik
    public function pemilik()
    {
        return $this->hasOne(Pemilik::class, 'iduser', 'iduser');
    }

    public function roleUser()
    {
        return $this->hasMany(RoleUser::class, 'iduser', 'iduser');
    }
}
