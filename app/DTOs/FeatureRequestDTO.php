<?php

namespace App\DTOs;

use Illuminate\Http\Request;

class FeatureRequestDTO
{
    public string $type;
    public ?string $geometry_type;
    public float $longitude;
    public float $latitude;
    public string $fac_nam;
    public string $fac_tel;
    public string $cat_nam;
    public string $fac_o_add;
    public string $fac_n_add;
    public string $id;

    public function __construct(Request $request)
    {
        $this->type = $request->input('type');
        $this->geometry_type = $request->input('geometry.type');
        $this->longitude = $request->input('geometry.coordinates.0');
        $this->latitude = $request->input('geometry.coordinates.1');
        $this->fac_nam = $request->input('properties.fac_nam');
        $this->fac_tel = $request->input('properties.fac_tel');
        $this->cat_nam = $request->input('properties.cat_nam');
        $this->fac_o_add = $request->input('properties.fac_o_add');
        $this->fac_n_add = $request->input('properties.fac_n_add');
        $this->id = $request->input('id');
    }

    public function toArray(): array
    {
        return [
            'type' => $this->type,
            'geometry_type' => $this->geometry_type,
            'longitude' => $this->longitude,
            'latitude' => $this->latitude,
            'fac_nam' => $this->fac_nam,
            'fac_tel' => $this->fac_tel,
            'cat_nam' => $this->cat_nam,
            'fac_o_add' => $this->fac_o_add,
            'fac_n_add' => $this->fac_n_add,
            'feature_id' => $this->id
        ];
    }
}
