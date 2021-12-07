<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            'name'      => 'Janathan Medero Pineda',
            'slug'      =>  Str::slug('Janathan Medero Pineda'),
            'email'     => 'webmaster@pyscom.com',
            'password'  => Hash::make('admin'),
        ]);

    }
}
