<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course_student')->insert([
               'course_id' =>1,
               'student_id' =>1,
        ]);
        DB::table('course_student')->insert([
            'course_id' =>1,
            'student_id' =>2,
     ]);
     DB::table('course_student')->insert([
        'course_id' =>1,
        'student_id' =>3,
 ]);
 DB::table('course_student')->insert([
    'course_id' =>1,
    'student_id' =>4,
]);
DB::table('course_student')->insert([
    'course_id' =>2,
    'student_id' =>5,
]);
DB::table('course_student')->insert([
    'course_id' =>3,
    'student_id' =>6,
]);
DB::table('course_student')->insert([
    'course_id' =>2,
    'student_id' =>1,
]);
DB::table('course_student')->insert([
    'course_id' =>3,
    'student_id' =>3,
]);
DB::table('course_student')->insert([
    'course_id' =>4,
    'student_id' =>4,
]);
DB::table('course_student')->insert([
    'course_id' =>5,
    'student_id' =>5,
]);
    }
}
