<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'superadmin', 
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('12345678'),
            'roles' => ['admin'],
        ]);    
    }
}
