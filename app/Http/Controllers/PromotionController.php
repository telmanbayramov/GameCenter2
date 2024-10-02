<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Promotion;

class PromotionController extends Controller
{
    public function index()
    {
        $promotions = Promotion::all();
        return response()->json($promotions);
    }

    public function store(Request $request)
    {
        $promotion = Promotion::create($request->all());
        return response()->json($promotion, 201);
    }

    public function show($id)
    {
        $promotion = Promotion::findOrFail($id);
        return response()->json($promotion);
    }

    public function update(Request $request, $id)
    {
        $promotion = Promotion::findOrFail($id);
        $promotion->update($request->all());
        return response()->json($promotion);
    }

    public function destroy($id)
    {
        Promotion::destroy($id);
        return response()->json(null, 204);
    }
}
