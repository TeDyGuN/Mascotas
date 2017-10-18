<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    /*
     * 'nombre'        => 'Administrador',
	            'apellido'      => 'Admin Admin',
			    'ci'            => '000000',
			    'direccion'     => 'GAMLP',
			    'telefono'      => '71200087',
			    'email'         => 'admin@admin.com',
			    'password'      => \Hash::make('secret'),
			    'role'          => 'Administrador'
     * */
    protected $fillable = [
        'nombre', 'apellido', 'ci', 'direccion', 'telefono', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
