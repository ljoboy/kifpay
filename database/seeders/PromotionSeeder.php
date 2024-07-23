<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('promotions')->insert([
            ["nom" => "G1 - Réseaux Informatique", "description" => ""],
            ["nom" => "G2 - Réseaux Informatique", "description" => ""],
            ["nom" => "G3 - Réseaux Informatique", "description" => ""],
            ["nom" => "L1 - Réseaux Informatique", "description" => ""],
            ["nom" => "L2 - Réseaux Informatique", "description" => ""],
            ["nom" => "G1 - Conception", "description" => ""],
            ["nom" => "G2 - Conception", "description" => ""],
            ["nom" => "G3 - Conception", "description" => ""],
            ["nom" => "L1 - Conception", "description" => ""],
            ["nom" => "L2 - Conception", "description" => ""],
            ["nom" => "G1 - SCOFI", "description" => ""],
            ["nom" => "G2 - SCOFI", "description" => ""],
            ["nom" => "G3 - SCOFI", "description" => ""],
            ["nom" => "L1 - SCOFI", "description" => ""],
            ["nom" => "L2 - SCOFI", "description" => ""],
            ["nom" => "G1 - BANQUE", "description" => ""],
            ["nom" => "G2 - BANQUE", "description" => ""],
            ["nom" => "G3 - BANQUE", "description" => ""],
            ["nom" => "L1 - BANQUE", "description" => ""],
            ["nom" => "L2 - BANQUE", "description" => ""],
            ["nom" => "G1 - DOUANE", "description" => ""],
            ["nom" => "G2 - DOUANE", "description" => ""],
            ["nom" => "G3 - DOUANE", "description" => ""],
            ["nom" => "L1 - DOUANE", "description" => ""],
            ["nom" => "L2 - DOUANE", "description" => ""]
        ]);
    }
}
