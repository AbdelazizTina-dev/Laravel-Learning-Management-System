<?php

namespace Database\Factories;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subject::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->optional()->paragraph(),
            'code' => $this->faker->regexify('IK-[A-Z]{3}[0-9]{4}'),
            'credit_value' => $this->faker->numberBetween(1,5),
            'user_id' => rand(1,3)
        ];
    }
}
