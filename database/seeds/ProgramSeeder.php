<?php

use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programs')->insert([
            'title' => 'Maths',
        ]);
        DB::table('programs')->insert([
            'title' => 'PHY',
        ]);
        DB::table('programs')->insert([
            'title' => 'CS',
        ]);
        DB::table('programs')->insert([
            'title' => 'SE',
        ]);
    }
}
