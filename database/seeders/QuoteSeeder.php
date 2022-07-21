<?php

namespace Database\Seeders;

use App\Models\Photo;
use App\Models\Quote;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class QuoteSeeder extends Seeder
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
        DB::table('quotes')->truncate();
        $new = new Quote();
        $new->name = ['ar' => $faker->name, 'en' => $faker->name];
        $new->notes = ['ar' => $faker->name, 'en' => $faker->name];
        $new->title_1 = ['ar' => $faker->name, 'en' => $faker->name];
        $new->icon_1 = $faker->name;
        $new->number = 0111111111111;
        $new->save();

        for ($i = 1; $i <= 1 ; $i++) {
            Photo::insert([
                'Filename'     => rand(1,6) . ".png",
                'photoable_id' => 1,
                'photoable_type' => 'App\Models\Quote'
            ]);
        }

        Schema::enableForeignKeyConstraints();
    }
}
