<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Identity>
 */
class IdentityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $identities = [];
        // for ($i = 0; $i < 10; $i++) {
        $identity =
            [
                "name" => fake()->firstName(),
                "surname" => fake()->lastName(),
                "gender" => fake()->randomElement(['male', 'female', 'other']),
                "city" => fake()->city(),
                "hero_id" => 1
            ];
        // array_push($identities, $identity);
        // }
        // return [$identities];
        return $identity;
    }
}
