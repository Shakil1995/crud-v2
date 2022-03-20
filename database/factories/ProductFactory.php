<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'category_id' =>$this->faker->randomDigitNotNull(3),
            'name' => $this->faker->name(),
            'price' =>$this->faker->randomDigitNotNull(6),
            'stock' => $this->faker->randomDigitNotNull(3),
            'description' => $this->faker->text($maxNbChars = 200),
        ];
    }
}
