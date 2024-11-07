<?php

namespace Database\Factories;
use App\Models\customer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'mobile' => $this ->faker->phoneNumber,
            'email' => $this->faker->email,
            'address' => $this->faker->city
        ];
    }
}
