<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feature;
use App\DTOs\FeatureDTO;
use App\DTOs\FeatureRequestDTO;

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

    public function show($id)
    {
        $feature = Feature::where('feature_id', $id)->first();

        if (!$feature) {
            return response()->json(["message" => "해당하는 기관을 찾을 수 없습니다."], 404);
        }

        return response()->json([
            "message" => "success",
            "result" => (new FeatureDTO($feature))->toArray()
        ]);
    }

    public function store(Request $request)
    {
        $featureDTO = new FeatureRequestDTO($request);

        $feature = Feature::create($featureDTO->toArray());

        return response()->json([
            "message" => "성공적으로 등록되었습니다.",
            "result" => (new FeatureDTO($feature))->toArray()
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $feature = Feature::where('feature_id', $id)->first();

        if (!$feature) {
            return response()->json(["message" => "해당하는 기관을 찾을 수 없습니다."], 404);
        }

        $updatedFeature = (new FeatureRequestDTO($request))->toArray();

        $feature->update($updatedFeature);

        return response()->json([
            "message" => "성공적으로 업데이트되었습니다.",
            "result" => (new FeatureDTO($feature))->toArray()
        ]);
    }

    public function destroy($id)
    {
        $feature = Feature::where('feature_id', $id)->first();

        if (!$feature) {
            return response()->json(["message" => "기관을 찾을 수 없습니다."], 404);
        }

        $feature->delete();

        return response()->json([
            "message" => "성공적으로 삭제되었습니다."
        ]);
    }
}
