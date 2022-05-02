<?php

namespace Database\Seeders;

use App\Models\Cat;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cat::create([
            'name' => 'Programming',            
          ]);

        Cat::create([
            'name' => 'Medical',            
          ]);

        Cat::create([
            'name' => 'English',            
          ]);
    }
}
