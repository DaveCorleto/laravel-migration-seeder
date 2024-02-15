<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TrainsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // Qui dentro si accoppia la colonna in cui vogliamo generare
            // dei dati dicendogli quale tipo di dato vogliamo 
            'company' => fake() -> company (),
            'departure_station' => fake() -> city (),
            'arrival_station' => fake() -> city (),
            'departure_time' => fake() -> dateTimeBetween('now', '+1 week'),
            'arrival_time' => fake() -> dateTimeBetween('+2 days', '+1 week'),
            'train_code' => fake() -> numerify('codenumber-####'),
            'number_of_carriage' => fake() -> numberBetween(5, 30),
            'on_time' => fake() -> boolean (),
            'erased' => fake() -> boolean (),
        ];
    }
}
