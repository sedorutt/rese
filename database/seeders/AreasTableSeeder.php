<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::create([
            ['area' =>'東京'],
            ['area' =>'大阪'],
            ['area' =>'福岡'],
        ]);
    }
}
