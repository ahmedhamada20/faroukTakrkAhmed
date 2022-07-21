<?php

namespace Database\Seeders;

use App\Models\Agencie;
use App\Models\Photo;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Faker\Generator as Faker;

class PhotoSeeder extends Seeder
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
        DB::table('photos')->truncate();

        
        Schema::enableForeignKeyConstraints();
    }
}
