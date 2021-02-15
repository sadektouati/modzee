<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Database\Seeders\PhotographerSeeder;
use App\Models\Photographer;

use Database\Seeders\gallerieseeder;
use App\Models\Gallery;

use function GuzzleHttp\Promise\each;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database. 
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Photographer::factory(100)->create()->each(function ($photographer) {
            $galleries = \App\Models\Gallery::factory(rand(0, 10))->make();
            $photographer->galleries()->saveMany($galleries);
        });
    }
}
