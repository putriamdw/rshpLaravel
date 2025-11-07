<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'role';
        protected $primaryKey = 'idrole';
    protected $fillable = ['nama'];

    public function role()
    {
        return $this->belongsTo(Role::class, 'idrole', 'idrole');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'iduser', 'iduser');
    }
}

