<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\School;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        School::truncate();

        School::create([
            'code' => 'NONE',
            'name' => 'School is not defined',
            'description' => 'No school defined for this user',
        ]);        //
        School::create([
            'code' => 'UBC',
            'name' => 'Univericity of Britich Columbia',
            'description' => 'UBC faculties are medicine, science, technology, and business',
        ]);        //
        School::create([
            'code' => 'SFU',
            'name' => 'Simon Fraser University',
            'description' => 'SFU located in Burnaby, BC Canada - faculties are environmental, technology, and business',
        ]);        //
        School::create([
            'code' => 'BCIT',
            'name' => 'British Columbia Institue of Technology',
            'description' => 'BCIT specialized in High-tech industries and standards',
        ]);        
    }
}
