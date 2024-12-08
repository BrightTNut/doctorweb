<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('doctors')->insert([
            ['name' => 'Dr. Kapil Shukla', 'qualifications' => 'MBBS, MD', 'specialty' => 'Pediatrician']
        ]);
    }
    
}
