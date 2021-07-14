<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role' => 'Admin',
            'slug' => 'admin',
        ]);

        DB::table('roles')->insert([
            'role' => 'User',
            'slug' => 'user',

        ]);

            DB::table('roles')->insert([
            'role' => 'Nonaktif',
            'slug' => 'off',

        ]);

    }
}
