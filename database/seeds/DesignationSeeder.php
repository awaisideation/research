<?php

use Illuminate\Database\Seeder;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designations')->insert([
            'title' => 'Logistics',
        ]);
        DB::table('designations')->insert([
            'title' => 'Finance',
        ]);
        DB::table('designations')->insert([
            'title' => 'Librarian',
        ]);
        DB::table('designations')->insert([
            'title' => 'Academics',
        ]);
        DB::table('designations')->insert([
            'title' => 'Management',
        ]);
    }
}
