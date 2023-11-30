<?php

namespace Database\Seeders;

use App\Models\Baby;
use App\Models\Couple;
use App\Models\Event;
use App\Models\Family;
use App\Models\Home;
use App\Models\PageDescription;
use App\Models\PageDescriptions;
use App\Models\Role;
use App\Models\User;
use Database\Factories\HomeFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(5)->create();
        // User::create([
        //     'name' =>'Arsyad',
        //     'username' => 'Arsyad',
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //     // tambahkan baris diawah ini
        //     'role_id' => mt_rand(1, 2),
        //     'remember_token' => Str::random(10),
        // ]);
        // Role::create([
        //     'role_name' => 'superadmin',
        // ]);

        // Role::create([
        //     'role_name' => 'pegawai',
        // ]);
        // Couple::factory(5)->create();
        // Baby::factory(5)->create();
        // Family::factory(5)->create();
        // Event::factory(5)->create();
        // PageDescriptions::factory(5)->create();
        Home::factory(5)->create();

    }
}
