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
            'desc' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s", 
            'img' => '1.png',          
         ]);
         Test::create([
            'name' => 'Kenza Mouran',            
            'spec' => 'Backend',            
            'desc' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s", 
            'img' => '3.png',          
         ]);
         Test::create([
            'name' => 'Samir Safouan',  
            'spec' => 'Fullstack',            
            'desc' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s", 
            'img' => '2.png',          
         ]);
         Test::create([
            'name' => 'Mina Sandi',  
            'spec' => 'Ui designer',            
            'desc' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s",             
            'img' => '3.png',          
         ]);
         Test::create([
            'name' => 'Omar Ibrahimi',  
            'spec' => 'Webmaster',            
            'desc' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s",  
            'img' => '1.png',          
         ]);
    }
}
