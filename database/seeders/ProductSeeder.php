<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [   
                "name" => "home - Thermo Ball Etip Gloves",
                "price" => 45.743,
                "img" => "popular1.png",
                "description" => "Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources. Credibly innovate granular internal or “organic” sources whereas high standards in web-readiness. Credibly innovate granular internal or organic sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences. Dramatically synthesize integrated schemas. with optimal networks.",
                "popular" => true,
                "filter" => "home",
                "created_at" => now()
            ],
            [   
                "name" => "profile - Thermo Ball Etip Gloves",
                "price" => 43,
                "img" => "popular2.png",
                "description" => "Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources. Credibly innovate granular internal or “organic” sources whereas high standards in web-readiness. Credibly innovate granular internal or organic sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences. Dramatically synthesize integrated schemas. with optimal networks.",
                "popular" => false,
                "filter" => "profile",
                "created_at" => now()

            ],
            [   
                "name" => "contact - Thermo Ball Etip Gloves",
                "price" => 50,
                "img" => "popular3.png",
                "description" => "Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources. Credibly innovate granular internal or “organic” sources whereas high standards in web-readiness. Credibly innovate granular internal or organic sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences. Dramatically synthesize integrated schemas. with optimal networks.",
                "popular" => true,
                "filter" => "contact",
                "created_at" => now()

            ],
        ]);
    }
}
