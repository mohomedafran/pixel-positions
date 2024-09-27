<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake() -> jobTitle,
            'salary' => fake() -> randomElement(['$50,000 USD', '$90,000 USD', '$150,000 USD']),
            'location' => fake() -> randomElement(['Remote', 'Hybrid', 'On-Site']),
            'schedule' => fake() -> randomElement(['Full Time', 'Weekend', 'From 9.00 a.m. To 5.00 p.m.']),
            'url' => fake() -> url,
            'featured' => fake() -> randomElement([true, false])
        ];
    }
}
