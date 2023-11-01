<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Fund;
use App\Models\FundSubCategorie;
use App\Models\FundCategorie;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fund>
 */
class FundFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'fund_categorie_id' => FundCategorie::inRandomOrder()->first()->id,
            'fund_sub_categorie_id' => FundSubCategorie::inRandomOrder()->first()->id,
            'ISIN' => $this->faker->unique()->regexify('[A-Z]{12}\d{2}'),
            'WKN' => $this->faker->unique()->numerify('WKN########'),
        ];
    }
}
