<?php

namespace Database\Seeders;

use App\Models\Test;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Test::create([
            'name' => 'Rachid Foulani',            
            'spec' => 'Frontend',            
            'desc' => 'Samir Safouan',  
            'img' => '1.png',          
         ]);
         Test::create([
            'spec' => 'Kenza Mouran',            
            'spec' => 'Backend',            
            'desc' => 'Programming',  
            'img' => '3.png',          
         ]);
         Test::create([
            'desc' => 'Samir Safouan',  
            'spec' => 'Fullstack',            
            'desc' => 'Programming',  
            'img' => '2.png',          
         ]);
         Test::create([
            'desc' => 'Mina Sandi',  
            'spec' => 'Ui designer',            
            'desc' => 'Programming',  
            'img' => '3.png',          
         ]);
         Test::create([
            'desc' => 'Omar Ibrahimi',  
            'spec' => 'Webmaster',            
            'desc' => 'Programming',  
            'img' => '1.png',          
         ]);
    }
}
