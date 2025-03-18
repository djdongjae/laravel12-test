<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Feature;

class FeatureSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                "fac_nam" => "밀알그룹홈",
                "fac_tel" => "063-351-1925",
                "cat_nam" => "노인복지시설",
                "fac_o_add" => "전라북도 장수군 장계면 금덕리 81-17",
                "fac_n_add" => "전라북도 장수군 장무로 461-6",
                "longitude" => 127.5939443,
                "latitude" => 35.7488687,
                "feature_id" => "LT_P_MGPRTFB.359"
            ],
            [
                "fac_nam" => "심청골효도의집",
                "fac_tel" => "061-363-4438",
                "cat_nam" => "노인의료시설",
                "fac_o_add" => "전라남도 곡성군 곡성읍 묘천리 767-3",
                "fac_n_add" => "전라남도 곡성군 곡성로 604-30",
                "longitude" => 127.2818748,
                "latitude" => 35.2625492,
                "feature_id" => "LT_P_MGPRTFB.360"
            ],
            [
                "fac_nam" => "흥산보금자리",
                "fac_tel" => "061-363-8898",
                "cat_nam" => "노인복지시설",
                "fac_o_add" => "전라남도 곡성군 겸면 괴정리 873-0",
                "fac_n_add" => "전라남도 곡성군 곡순로 1620-0",
                "longitude" => 127.193614,
                "latitude" => 35.2457771,
                "feature_id" => "LT_P_MGPRTFB.361"
            ]
        ];

        Feature::insert($data);
    }
}
