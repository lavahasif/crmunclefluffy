<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class statustableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Status')->insert([
            [
                'name' => 'New',
                'color' => '#c5e0b4',
            ],  [
                'name' => 'Contacted',
                'color' => '#f8cbad',
            ],  [
                'name' => 'Not Interested',
                'color' => '#e36b82',
            ]

        ]);
        //
    }
}
