<?php

namespace Database\Factories;

use App\Models\ItemCart;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ItemCartFactory extends Factory
{
    protected $model = ItemCart::class;

    public function definition(): array
    {
        return [
            'quantidade' => $this->faker->numberBetween(1, 10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
