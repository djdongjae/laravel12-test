<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feature;
use App\DTOs\FeatureDTO;

class FeatureController extends Controller
{
    public function index()
    {
        $features = Feature::all()->map(function ($feature) {
            return (new FeatureDTO($feature))->toArray();
        });

        return response()->json([
            "messsage" => "success",
            "result" => $features
        ]);
    }
}
