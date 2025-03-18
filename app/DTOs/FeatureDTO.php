<?php

namespace App\DTOs;

use App\Models\Feature;

class FeatureDTO
{
    public string $type;
    public array $geometry;
    public array $properties;
    public string $id;

    public function __construct(Feature $feature)
    {
        $this->type = "Feature";
        $this->geometry = [
            "type" => $feature->geometry_type,
            "coordinates" => [$feature->longitude, $feature->latitude]
        ];
        $this->properties = [
            "fac_nam" => $feature->fac_nam,
            "fac_tel" => $feature->fac_tel,
            "cat_nam" => $feature->cat_nam,
            "fac_o_add" => $feature->cat_nam,
            "fac_n_add" => $feature->fac_n_add
        ];
        $this->id = $feature->feature_id;
    }

    // 객체의 속성을 배열로 변환하는 것일 뿐, 추후 JSON에서는 객체로 응답
    public function toArray():array
    {
        return [
            "type" => $this->type,
            "geometry" => $this->geometry,
            "properties" => $this->properties,
            "id" => $this->id
        ];
    }
}