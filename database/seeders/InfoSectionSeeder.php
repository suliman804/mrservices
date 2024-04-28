<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class InfoSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('info_section')->insert([
            'heading' => 'How We Work',
            'site_title' => 'Mr Services',
            'description' => 'Test Description',
            'box_1_heading' => 'Test Heading',
            'box_1_description' => 'Test Description',
           'created_at' => now(),
        ]);
    }
}
