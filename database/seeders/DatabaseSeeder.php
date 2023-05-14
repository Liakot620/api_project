<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Student;



class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
  {
        $this->call([
            StudentSeeder::class,
            UserSeeder::class,
        ]);
    
  }
}
