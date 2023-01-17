<?php

namespace Database\Factories;
use App\Models\Employee;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            //
            'name'=> $this-> faker->name,
            'address' => $this->faker->safeColorName,
            'age'=> $this-> faker->randomDigit,
            'company'=> $this-> faker->company,
            'user_id' => User::first(),
        ];
    }
}
