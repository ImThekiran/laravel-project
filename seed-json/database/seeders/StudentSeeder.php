<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $data = '
      [
        {
          "name":"saiki",
          "email":"kirkir"
        },
        {
          "name":"saiki2",
          "email":"kirkir2"
        }
      ]
      ';
      //the json format should be correct then will work 100% check if your using ',' for last data-> u should not use

      $students = collect(json_decode($data));
      $students->each(function($student){
        student::create([
          'name'=>$student->name,
          'email'=>$student->email
        ]);
      });
    }
}
