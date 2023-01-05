<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('education_levels')->insert(
            [
                [
                    'name'=>'Primary'
                ],
                [
                    'name'=>'Secondary'
                ],
                [
                    'name'=>'Tertiary'
                ]
            ]
        );
    }
}
