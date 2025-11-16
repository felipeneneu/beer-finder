<?php

namespace Database\Factories;

use App\Models\Beer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Beer>
 */
class BeerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $malts = $this->faker->randomElements([
            'Pale Ale',
            'Pilsner',
            'Munich',
            'Caramel',
            'Chocolate',
        ], 2);

        $hops = $this->faker->randomElements([
            'Cascade',
            'Saaz',
            'Centennial',
            'Amarillo',
            'Hallertau',
            'Nelson Sauvin',
        ], 2);

        return [
            'name' => $this->faker->unique()->words(3, true).' IPA',
            'tagline' => $this->faker->optional(0.4)->catchPhrase(),
            'description' => $this->faker->paragraphs(2, true),
            'first_brewed_at' => $this->faker->dateTimeBetween('-20 years', 'now'),
            'abv' => $this->faker->randomFloat(1, 3, 14),
            'ibu' => $this->faker->numberBetween(10, 120),
            'ebc' => $this->faker->numberBetween(5, 80),
            'ph' => $this->faker->randomFloat(1, 3.2, 4.8),
            'volume' => $this->faker->randomElement([330, 355, 375, 440, 500, 568, 650, 750]),
            'ingredients' => json_encode([
                'malt' => $malts,
                'hops' => $hops,
                'yeast' => $this->faker->randomElement(['US-05', 'S-04', 'Wyeast 1056']),
            ]),
            'brewer_tips' => $this->faker->sentence(),
        ];
    }
}
