<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\banner;
use App\Models\Domain;
use App\Models\Gateway;
use App\Models\Group;
use App\Models\Setting;
use App\Models\Slab;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        User::factory()->create([
            'name' => 'Administrator',
            'username' => 'admin',
            'role' => 'admin',
            'email' => 'admin@gmail.com',
            'mobile' => '03031212124',
            'password' => Hash::make('asdfasdf'),
        ]);

        User::factory()->create([
            'name' => 'Shakeel Ahmad',
            'username' => 'shakeel2717',
            'email' => 'shakeel2717@gmail.com',
            'mobile' => '03031212125',
            'password' => Hash::make('asdfasdf'),
        ]);

        User::factory()->create([
            'name' => 'Waseem Danish',
            'username' => 'kmlevo',
            'email' => 'kmlevo@gmail.com',
            'mobile' => '03206983604',
            'password' => Hash::make('asdfasdf'),
        ]);
    }
}
