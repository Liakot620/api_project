<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker=Faker::create();
        DB::table('users')->insert([
            'name'=> $faker->name,
            'email'=>str::random(5).'@gmail.com',
            'password'=> Hash::make($faker->password),
        ]);
    }
}
