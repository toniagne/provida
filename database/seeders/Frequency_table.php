<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Frequency_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('frequencies')->insert([
            ['name' => 'Anual'],
            ['name' => 'Semestral'],
            ['name' => 'Mensal'],
            ['name' => 'Quinzenal'],
            ['name' => 'Semanal'],
]
        );
    }
}
