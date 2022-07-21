<?php

namespace Database\Seeders;

use App\Models\Member;
use App\Models\Photo;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class MemberSeeder extends Seeder
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
        DB::table('products')->truncate();
        for ($i = 0; $i <= 5; $i++) {
            Member::create([
                'name' => ['ar' => $faker->name, 'en' => $faker->name],
                'notes' => ['ar' => $faker->name, 'en' => $faker->name],
                'status' => true,
                'facebook' => $faker->url(),
                'twitter' => $faker->url(),
                'instagram' => $faker->url(),
            
            ]);
        }


        for ($i = 1; $i <= 5 ; $i++) {
            Photo::insert([
                'Filename'     => rand(1,6) . ".png",
                'photoable_id' => $i,
                'photoable_type' => 'App\Models\Member'
            ]);
        }

        Schema::enableForeignKeyConstraints();
    }
}
