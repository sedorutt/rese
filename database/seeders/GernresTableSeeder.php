<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GernresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::create([
            ['genre' => '寿司'],
            ['genre' => '焼き肉'],
            ['genre' => '居酒屋'],
            ['genre' => 'イタリアン'],
            ['genre' => 'ラーメン'],
        ]);
    }
}
