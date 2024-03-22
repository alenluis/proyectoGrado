<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                'rol_id'=>1,
                'name'=>'SuperAdmin',
                'usu_nombre'=>'Alexito69',
                'usu_telefono'=>'0999999999',
                'email'=>'alexito69@gmail.com',
                'password'=>bcrypt('123456789')
            ]
        );  
        DB::table('users')->insert(
            [
                'rol_id'=>2,
                'name'=>'Fito',
                'usu_nombre'=>'Fitomini',
                'usu_telefono'=>'098752190',
                'email'=>'fito12@gmail.com',
                'password'=>bcrypt('123456789s')
            ]
        );
    }
}
