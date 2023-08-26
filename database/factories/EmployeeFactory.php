<?php

namespace Database\Factories;
use Database\Factories\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' =>fake()->name(),
            'email' =>fake()->unique()->safeEmail(),
            'address' =>fake()->address,
            'phone' => fake()->phoneNumber,
            'remember_token' => Str::random(10),

        ];
    }
}
