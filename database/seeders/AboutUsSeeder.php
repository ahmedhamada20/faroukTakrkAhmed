<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use App\Models\Photo;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AboutUsSeeder extends Seeder
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
        DB::table('about_us')->truncate();
        $new = new AboutUs();
        $new->name = ['ar' => $faker->name, 'en' => $faker->name];
        $new->notes = ['ar' => $faker->name, 'en' => $faker->name];
        $new->title_1 = ['ar' => $faker->name, 'en' => $faker->name];
        $new->notes_1 = ['ar' => $faker->name, 'en' => $faker->name];
        $new->title_2 = ['ar' => $faker->name, 'en' => $faker->name];
        $new->notes_2 = ['ar' => $faker->name, 'en' => $faker->name];
        $new->icon_1 = $faker->name;
        $new->icon_2 = $faker->name;
        $new->save();


        for ($i = 1; $i <= 1 ; $i++) {
            Photo::insert([
                'Filename'     => rand(1,6) . ".png",
                'photoable_id' => 1,
                'photoable_type' => 'App\Models\AboutUs'
            ]);
        }
        Schema::enableForeignKeyConstraints();
    }
}
