<?php

namespace Database\Seeders;

use App\Models\Agencie;
use App\Models\Photo;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AgencieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        Schema::disableForeignKeyConstraints();
        DB::table('agencies')->truncate();
        for ($i = 0; $i <= 5; $i++) {
            Agencie::create([
                'name' => ['ar' => $faker->name, 'en' => $faker->name],
                'notes' => ['ar' => $faker->name, 'en' => $faker->name],
                'status' => true,
                'url' => $faker->url(),
                'slug' => $faker->name,
            ]);
        }

        for ($i = 1; $i <= 5 ; $i++) {
            Photo::insert([
                'Filename'     => rand(1,6) . ".png",
                'photoable_id' => $i,
                'photoable_type' => 'App\Models\Agencie'
            ]);
        }
        Schema::enableForeignKeyConstraints();
    }
}
