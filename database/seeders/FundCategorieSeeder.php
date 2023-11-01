<?php

namespace Database\Seeders;

use Database\Factories\FundCategorieFactory;
use Illuminate\Database\Seeder;
use App\Models\FundCategorie;

class FundCategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        FundCategorie::factory(10)->create();
    }
}
