<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\user;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:'database\JSON\users.json');
        $data = collect(json_decode($json));

        $data->each(function($entry){
          user::create([
            'name'=>$entry->name,
            'email'=>$entry->email,
            'age'=>$entry->age,
            'city'=>$entry->city
          ]);
        });
    }
}
