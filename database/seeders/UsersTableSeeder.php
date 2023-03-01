<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory()->count(10)->create();

        DB::table('users')->insert([
            'name' => 'geclyn',
            'email' => 'geclyn@unclefluffy.com',
            'password' => bcrypt('123456'),
        ]);
        //
    }
}
