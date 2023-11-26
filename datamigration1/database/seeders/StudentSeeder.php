<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        $students = collect(
          [
            [
              'name'=> 'Sai Kiran',
              'email' => 'sk@gmail.com'
            ],
            [
              'name'=> 'Norah',
              'email' => 'norah@gmail.com'
            ],
            [
              'name'=> 'katrina',
              'email' => 'cat@gmail.com'
            ],
          ]
        );

        $students->each(function($data){
          student::insert($data);
        });
        // student::create([
        //   'name'=> 'Sai Kiran',
        //   'email' => 'sk@gmail.com'
        // ]);
    }
}
