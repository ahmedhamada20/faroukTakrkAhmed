<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class AdminLoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('users')->truncate();
        // Creat New Admin
        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'admin@admin.com';
        $admin->password = Hash::make('123456789');
        $admin->save();
        Schema::enableForeignKeyConstraints();
    }
}
