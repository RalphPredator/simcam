<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $purchase = $this->faker->numberBetween(1500, 125000);
        $selling = $this->faker->numberBetween($purchase + 500, $purchase + 1000);

        return [
            'name' => $this->faker->unique()->word,
            'reference' => strtoupper($this->faker->bothify('REF-??##??')),
            'description' => $this->faker->sentences(1),
            'purchase_price' => $purchase,
            'selling_price' => $selling,
        ];
    }
}
