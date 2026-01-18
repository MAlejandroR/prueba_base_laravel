<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()
            ->count(5)
            ->create()
            ->each(function(User $user){
                $user->assignRole('alumno');
            });

        User::factory()->count(5)->create()->each(fn($user) => $user->assignRole('profesor'));

        $user = User::create([
            'name' => 'admin',
            'email' => "a@a.com",
            'apellido' => 'admin',
            'fecha_nacimiento' => '1990-01-01',
            'password' => bcrypt('12345678'),
        ]);
        $user->assignRole('admin');
        //
    }
}
