<?php

namespace App\Http\Controllers;

use App\Models\PurchaseItem;
use Illuminate\Http\Request;

class PurchaseItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
         $items = PurchaseItem::all();

    return view('purchaseitems', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('purchases_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'item_name' => 'required|string|max:150',
        'product_image' => 'nullable|image|max:5120',
        'price' => 'required|integer|min:1',
        'hourly_wage' => 'required|integer|min:1',
        'weekly_uses' => 'required|integer|min:1',
        'period_weeks' => 'required|integer|min:1',
    ]);

    // 商品画像を保存
    if ($request->hasFile('product_image')) {
        $validated['product_image'] =
            $request->file('product_image')->store('products', 'public');
    }

    // 合計使用回数
    $validated['total_uses'] =
        $validated['weekly_uses'] * $validated['period_weeks'];

    // 必要な労働時間
    $validated['work_hours'] =
        $validated['price'] / $validated['hourly_wage'];

    // 1回あたりの使用コスト
    $validated['cost_per_use'] =
        $validated['price'] / $validated['total_uses'];

    // データベースに保存
    PurchaseItem::create($validated);

    return redirect()->route('purchaseitems.index');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
