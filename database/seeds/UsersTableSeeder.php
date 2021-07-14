<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'andi ahmad s',
            'email' => 'andi.fivesco@gmail.com1',
            'jenis_kelamin' => 'laki-laki',
            'password' => bcrypt('admin1234'),

        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'madhan',
            'email' => 'user@gmail.com',
            'jenis_kelamin' => 'laki-laki',

            'password' => bcrypt('user1234'),

        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'madhan2',
            'email' => 'user2@gmail.com',
            'jenis_kelamin' => 'laki-laki',
            'password' => bcrypt('user1234'),

        ]);
    }
}
