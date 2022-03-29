<?php

namespace Database\Factories;

use App\Models\Chanteur;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chanteur>
 */
class ChanteurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @var string
     */

    protected $model = Chanteur::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom' =>$this->faker->name(),
            'maison_de_disque'  =>$this->faker->word(),
            'style' =>$this->faker->word(),
            'biographie' =>$this->faker->word(),
            'annee_de_naissance' =>$this->faker->date(),
            'album_vendu' =>$this->faker->buildingNumber()
        ];
    }
}
