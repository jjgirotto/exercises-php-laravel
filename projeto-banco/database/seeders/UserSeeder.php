<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => "Juliana", // 'name' => $request->name
            'email' => "ju@ju.com", // 'email' => $request->email
            'password' => Hash::make("123456") // 'password' => Hash::make($request->password)
        ]);
    }
}
