<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;



class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        $faker= Faker::create();
        DB::table('students')->insert([
            'name'=>str::random(5),
            'city'=>str::random(5),
            'fees'=>$faker->randomFloat(2),
          ]);
    }
}
