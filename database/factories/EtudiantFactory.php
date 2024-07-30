<?php

namespace Database\Factories;

use App\Models\Etudiant;
use App\Models\Promotion;
use Database\Fake\Person;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Etudiant>
 */
class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $person = new Person($this->faker);
        return [
            'nom' => $person->lastname,
            'postnom' => $person->middlename,
            'prenom' => $person->firstname,
            'telephone' => $person->phone,
            'matricule' => strtoupper(Str::random(14)),
            'date_de_naissance' => $this->faker->dateTimeBetween('-50 years', '-18 years'),
            'nationalite' => 'Congolaise',
            'promotion_id' => Promotion::all()->random()->id,
            'lieu_de_naissance' => ,
            'addresse' => $this->faker->address,
        ];
    }
}
