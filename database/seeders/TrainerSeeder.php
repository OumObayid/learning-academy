<?php

namespace Database\Seeders;
use App\Models\Trainer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trainer::create([
          'name' => 'Fouad Ibrahimi',
          'spec' => 'Web Developpement',
          'img' => '1.png',
        ]);

        Trainer::create([
            'name' => 'Khalid Gemran',
            'spec' => 'Web Developpement',
            'img' => '2.png',
          ]);

          Trainer::create([
            'name' => 'Fouad Ibrahimi',
            'spec' => 'Dentist',
            'img' => '3.png',
          ]);

          Trainer::create([
            'name' => 'Mounir Kermad',
            'spec' => 'Doctor',
            'img' => '4.png',
          ]);

          Trainer::create([
            'name' => 'Aziz Mahmoud',
            'spec' => 'English teacher',
            'img' => '5.png',
          ]);
    }
}
