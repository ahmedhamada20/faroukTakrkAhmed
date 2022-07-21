<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminLoginSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(AboutUsSeeder::class);
        $this->call(OutFeaturesSeeder::class);
        $this->call(QuoteSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(AgencieSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(MemberSeeder::class);
        $this->call(OurClientSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(SilderSeeder::class);
        $this->call(BlogSeeder::class);
    }
}
