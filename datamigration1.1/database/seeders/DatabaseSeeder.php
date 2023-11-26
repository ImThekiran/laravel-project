<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      student::factory()->count(10)->create();  //this thing we do while using factory to insert data
      // $this->call([            // this thing we do while using seeder to insert data
      //   StudentSeeder::class
      // ]);
    }
}
