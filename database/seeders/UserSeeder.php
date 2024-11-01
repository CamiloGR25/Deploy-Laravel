<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nombre' => 'Sergio Camilo',
            'apellido' => 'Gomez Rincon',
            'correo' => 'Camilogr@gmail.com',
            'nro_telefono' => '123456789',
            'password' => bcrypt('admin123') 
        ]);
    }
}
