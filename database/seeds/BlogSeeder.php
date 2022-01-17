<?php

use Illuminate\Database\Seeder;
use App\Models\Blog;
use Faker\Generator as Faker;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            $_blog = new Blog();
            $_blog -> title = $faker -> sentence();
            $_blog -> text = $faker -> text(1000);
            $_blog -> author = $faker -> name();
            $_blog -> save();
        }
    }
}