<?php

namespace Database\Factories;

use App\Models\Etudiant;
use App\Models\Ville;
use Illuminate\Database\Eloquent\Factories\Factory;

class EtudiantFactory extends Factory
{

    protected $model = Etudiant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'nom' => $this->faker->name,
            'adresse' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'date_naissance' => $this->faker->date,
            'ville_id' => $this->faker->randomElement(Ville::all()->pluck('id')->toArray())
        ];
    }
}
