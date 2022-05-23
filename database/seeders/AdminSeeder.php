<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'admin',
            'password' => bcrypt('12345678'),
            'email' => 'admin@admin.com'
        ]);
        User::create([
            'name' => 'admin',
            'password' => bcrypt('12345678'),
            'email' => 'admin@admin.com'
        ]);
    }
}
