<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user::create([
            'name' => 'Super Admin',
            'email'    =>  'admin@360projects.co.uk',
            'phone'    => '234567890',
            'area'     => '',
            'password'  => Hash::make('admin123'),
        ]);
    }
}
