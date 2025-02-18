<?php

namespace Database\Factories;

use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Question::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->randomElement(['Name', 'Address']),
            'question' => $this->faker->randomElement([
                'What is your name?',
                'Where do you live at?',
            ]),
            'order' => $this->faker->randomElement([1, 2, 3, 4, 5]),
        ];
    }
}
