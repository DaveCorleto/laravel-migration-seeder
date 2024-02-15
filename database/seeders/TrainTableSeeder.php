<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Importo il Model che voglio usare: 
use App\Models\Trains;
// Devo importare la factory? 
// use Database\Factories\TrainsFactory;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trains :: factory () -> count (97) -> create();
    }
}
