<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
      protected $fillable = [
        'name', 'guard_name'
    ];

    // *** Relacionamentos ///////////////////////

    // Many to Many - politicas de acesso
    public function users() {

        return $this->belongsToMany('App\User');
    }

}
