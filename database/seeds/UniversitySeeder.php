<?php

use Illuminate\Database\Seeder;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('universities')->insert([
            'title' => 'FJU',
        ]);
        DB::table('universities')->insert([
            'title' => 'IIUI',
        ]);
        DB::table('universities')->insert([
            'title' => 'CUI',
        ]);
        DB::table('universities')->insert([
            'title' => 'FUI',
        ]);
    }
}
