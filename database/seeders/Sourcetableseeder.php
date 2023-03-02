<?php

namespace Database\Seeders;

use App\Models\Source;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Sourcetableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('Source')->insert([
        //     ['name' => 'Instagram'],
        //     ['name' => 'Facebook'],
        //     ['name' => 'Tiktok'],
        // ]);
        //
        $sources = [
            ['name' => 'Instagram'],
            ['name' => 'Facebook'],
            ['name' => 'Tiktok'],
        ];

        foreach ($sources as $single) {
            Source::create($single);
        }
    }
}
