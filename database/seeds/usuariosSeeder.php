<?php

use Illuminate\Database\Seeder;

class usuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([  
         'usu_name'=>'darla',
         'usu_email'=>'darla@a.com',
         'usu_cedula'=>'1711852033',
         'usu_perfil'=>'Hija',
         'password'=>bcrypt('741258'),

         'per_id'=>1 ,             
 
    
        ]);

        }
}
