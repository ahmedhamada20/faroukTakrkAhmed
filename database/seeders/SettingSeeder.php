<?php

namespace Database\Seeders;

use App\Models\Setting;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class SettingSeeder extends Seeder
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
        DB::table('settings')->truncate();
        $new = new Setting();
        $new->name = ['ar'=> $faker->name , 'en' => $faker->name];
        $new->slug =  "ahmed";
        $new->notes = ['ar'=> $faker->name , 'en' => $faker->name];
        $new->phone = "0111111111";
        $new->Fax = "0111111111";
        $new->email = "test@test.com";
        $new->address = "test";
        $new->facebook = "https://facebook.com/";
        $new->twitter = "https://twitter.com/";
        $new->instagram = "https://www.instagram.com/";
        $new->YouTube = "https://youtube.com/";
        $new->url = "";
        $new->save();
        Schema::enableForeignKeyConstraints();
    }
}
