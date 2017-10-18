<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    \DB::table('users')->insert([
		    [
		        'nombre'        => 'Administrador',
	            'apellido'      => '',
			    'ci'            => '000000',
			    'direccion'     => 'GAMLP',
			    'telefono'      => '71200087',
			    'email'         => 'admin@admin.com',
			    'password'      => \Hash::make('secret'),
			    'role'          => 'Administrador'
		    ],
		    [
			    'nombre'        => 'Ted',
			    'apellido'      => 'Carrasco Carrasco',
			    'ci'            => '6837705',
			    'direccion'     => 'Av/ Chacaltaya S/N',
			    'telefono'      => '71200087',
			    'email'         => 'ted_cc@hotmail.com',
			    'password'      => \Hash::make('secret'),
			    'role'          => 'Administrador'
		    ]
	    ]);
    }
}
