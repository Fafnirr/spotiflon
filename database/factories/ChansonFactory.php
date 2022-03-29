<?php

namespace Database\Factories;

use App\Models\Chanson;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chanson>
 */
class ChansonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @var string
     */

    protected $model = Chanson::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'image' =>$this->faker->imageUrl($width = 500, $height = 250),
            'titre' =>$this->faker->name(),
            'annee' =>$this->faker->date(),
            'auteur' =>$this->faker->lastName()
        ];
    }
}
