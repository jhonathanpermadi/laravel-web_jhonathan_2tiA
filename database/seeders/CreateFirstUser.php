<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class CreateFirstUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'gatot@pcr.ac.id'],
            [
                'name' => 'Admin',
                'password' => Hash::make('gatotkaca'),
            ]
        );
    }
}
