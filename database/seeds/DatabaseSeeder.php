<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['category' => 'Sportas'],
            ['category' => 'Laisvalaikis'],
            ['category' => 'Ekstremalumas']
        ]);
    }
}
