<?php

declare(strict_types=1);

use App\Models\Beer;
use Database\Seeders\BeerSeeder;

it('seeds fifty beers', function () {
    $this->seed(BeerSeeder::class);

    expect(Beer::count())->toBe(50);
});
