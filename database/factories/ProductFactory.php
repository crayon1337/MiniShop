<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->realText(100),
            'image_url' => 'https://www.hilti.com.my/content/hilti/A2/MY/en/homepage/jcr:content/teaserSet3ItemsWrapper/defaultVariant/teaser1.img.png/1554454725633.png',
            'price' => $this->faker->numberBetween(10, 500),
        ];
    }
}
