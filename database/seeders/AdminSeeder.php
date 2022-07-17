<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Amir',
            'email' => 'amirishak0094@gmail.com',
            'password' => Hash::make('12345'),
        ]);
        $user->assignRole('admin');
    }
}
