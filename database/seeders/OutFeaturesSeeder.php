<?php

namespace Database\Seeders;

use App\Models\OutFeatures;
use App\Models\Photo;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class OutFeaturesSeeder extends Seeder
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
        DB::table('out_features')->truncate();
        $new = new OutFeatures();
        $new->name = ['ar' => $faker->name, 'en' => $faker->name];
        $new->title_1 = ['ar' => $faker->name, 'en' => $faker->name];
        $new->notes_1 = ['ar' => $faker->name, 'en' => $faker->name];
        $new->title_2 = ['ar' => $faker->name, 'en' => $faker->name];
        $new->notes_2 = ['ar' => $faker->name, 'en' => $faker->name];
        $new->icon_1 = $faker->name;
        $new->icon_2 = $faker->name;
        $new->icon_3 = $faker->name;
        $new->title_3 = ['ar' => $faker->name, 'en' => $faker->name];
        $new->notes_3 = ['ar' => $faker->name, 'en' => $faker->name];
        $new->save();

        for ($i = 1; $i <= 1 ; $i++) {
            Photo::insert([
                'Filename'     => rand(1,6) . ".png",
                'photoable_id' => 1,
                'photoable_type' => 'App\Models\OutFeatures'
            ]);
        }
        Schema::enableForeignKeyConstraints();
    }
}
