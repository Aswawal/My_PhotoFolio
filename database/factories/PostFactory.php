<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Nette\Utils\Strings;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\fs>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'judul'=>$this->faker->sentence(mt_rand(2,8)),
            'image'=>$this->faker->sentence(),
            'category'=>$this->faker->sentence(1,4),
            'body'=>$this->faker->sentence(mt_rand(10,20)),
            'category_id'=>mt_rand(1,4)
        ];
    }
}
