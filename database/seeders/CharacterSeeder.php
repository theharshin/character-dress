<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert([
            [
                'name' => 'Character 1',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Character 2',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Character 3',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Character 4',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Character 5',
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
