<?php

namespace Database\Seeders;

use App\Models\Grade;
use Illuminate\Database\Seeder;
use DB;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grade::factory()->count(10)->create();
        /*
        DB::table('grades')->insert([
            'block' => '1',
            'course_name' => 'Programme and Career Orientation',
            'EC' => '2,5',
            'test_name' => 'Assessment exam',
            'best_grade' => ''
        ],
            [
                'block' => '1',
                'course_name' => 'Computer Science Basics',
                'EC' => '7.5',
                'test_name' => 'Written exam',
                'best_grade' => '6.4'
            ],
            [
                'block' => '1',
                'course_name' => 'Programming Basics',
                'EC' => '5.0',
                'test_name' => 'Case study exam',
                'best_grade' => '4.0'
            ],
            [
                'block' => '2',
                'course_name' => 'Objected Oriented Programming',
                'EC' => '10',
                'test_name' => 'Case study/Project',
                'best_grade' => ''
            ],
            [
                'block' => '2',
                'course_name' => 'professional skills 1',
                'EC' => '2.5',
                'test_name' => 'Portfolio exam',
                'best_grade' => ''
            ],
            [
                'block' => '3',
                'course_name' => 'Professional Working Environment',
                'EC' => '2.5',
                'test_name' => 'Assessment exam',
                'best_grade' => ''
            ],
            [
                'block' => '3',
                'course_name' => 'Professional Skills 2',
                'EC' => '2.5',
                'test_name' => '2 Written/Portfolio exam',
                'best_grade' => ''
            ],
            [
                'block' => '3',
                'course_name' => 'Framework Development 1',
                'EC' => '5',
                'test_name' => 'Case study exam',
                'best_grade' => ''
            ],
            [
                'block' => '3',
                'course_name' => 'Framework Project 1',
                'EC' => '5',
                'test_name' => '2 Portfolio exam ',
                'best_grade' => ''
            ],
            [
                'block' => '4',
                'course_name' => 'Professional Skills 3',
                'EC' => '2.5',
                'test_name' => '2 Written/Portfolio exam',
                'best_grade' => ''
            ],
            [
                'block' => '4',
                'course_name' => 'Framework Development 2',
                'EC' => '5',
                'test_name' => 'Portfolio exam',
                'best_grade' => ''
            ],
            [
                'block' => '4',
                'course_name' => 'Framework Project 2',
                'EC' => '5',
                'test_name' => 'Portfolio exam',
                'best_grade' => ''
            ],
            [
                'block' => 'Whenever',
                'course_name' => 'HZ Personality',
                'EC' => '2.5',
                'test_name' => 'Portfolio',
                'best_grade' => ''
            ],
            [
                'block' => 'Whenever',
                'course_name' => 'IT Personality',
                'EC' => '2.5',
                'test_name' => 'Portfolio',
                'best_grade' => ''
            ]
        );
        */
    }
}
