<?php

use Illuminate\Database\Seeder;
use App\Models\Flight;
use Faker\Generator as Faker;

class FlightsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 30; $i++) { 
            
            $_flight = new Flight();
            $_flight -> name = $faker -> words(5, true);
            $_flight -> airline = $faker -> word();
            $_flight -> departure = $faker -> city() ;
            $_flight -> arrival = $faker -> city();
            $_flight -> price = $faker -> numberBetween(100, 2000);
            $_flight -> save();
        }
    }
}