<?php

namespace Database\Factories;

use App\Models\Grade;
use Illuminate\Database\Eloquent\Factories\Factory;

class GradeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Grade::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_name' => $this->faker->text(100),
            'test_name' => $this->faker->text(100),
            //'best_grade' => $this->faker->decimal(min(0.0), max(10.0)),
            'lowest_passing_grade' => $this->faker->numberBetween(5.5, 5.5),
            'best_grade' => $this->faker->numberBetween(0, 10),

        ];
    }
}
//course_name', 'test_name', 'best_grade
