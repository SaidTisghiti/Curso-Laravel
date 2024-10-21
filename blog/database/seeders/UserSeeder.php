<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();

        $user->name = 'Victor Arana';
        $user->email = 'victor@codersfree.com';
        $user->password = bcrypt('12345678');

        $user->save();

        User::factory(10)->create();
    }
}
