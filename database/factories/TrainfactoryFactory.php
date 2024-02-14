<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TrainfactoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'company' => fake() -> company (),
            'departure_station' => fake() -> departure_station (),
            'arrival_station' => fake() -> arrival_station (),
            'departure_time' => fake() -> departure_time (),
            'arrival_time' => fake() -> arrival_time (),
            'train_code' => fake() -> train_code (),
            'number_of_carriage' => fake() -> number_of_carriage (),
            'on_time' => fake() -> on_time (),
            'erased' => fake() -> erased (),
        ];
    }
}
