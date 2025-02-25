<?php

namespace App\Http\Controllers;

use App\Models\ClothingItem;
use Illuminate\Http\Request;

class ClothingItemController extends Controller
{
    public function index()
    {
        return ClothingItem::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'category' => 'required|string',
            'color' => 'nullable|string',
            'size' => 'nullable|string',
            'image' => 'nullable|string',
        ]);

        return ClothingItem::create($validated);
    }

    public function update(Request $request, ClothingItem $clothingItem)
    {
        $clothingItem->update($request->all());
        return response()->json(['message' => 'Item updated successfully']);
    }

    public function destroy(ClothingItem $clothingItem)
    {
        $clothingItem->delete();
        return response()->json(['message' => 'Item deleted successfully']);
    }
}

