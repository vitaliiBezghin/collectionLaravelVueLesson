<?php

namespace Database\Factories;

use App\Models\PersonalData;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonalDataFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PersonalData::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'phone' => $this->faker->phoneNumber,
            'adult' => rand(0,1),
            'citizenship' => $this->faker->country,
            'addition_info' => $this->faker->text
        ];
    }
}
