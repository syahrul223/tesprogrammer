<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'          => 'administrator',
            'email'         => 'admin@mail.com',
            'password'      => bcrypt('admin123'),
            'role'          => 'admin',
            'last_login'    => Carbon::now()
        ]);
    }
}
