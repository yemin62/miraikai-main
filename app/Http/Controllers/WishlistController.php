<?php

namespace App\Http\Controllers;

use App\Models\WishlistItem;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    // 欲しい物を登録する
    public function store(Request $request)
    {
        $validated = $request->validate([
            'item_name' => 'required|string|max:150',
            'product_image' => 'nullable|image|mimes:jpg,jpeg,png,webp,gif|max:5120',
            'price' => 'required|integer|min:1|max:100000000',
            'hourly_wage' => 'required|integer|min:900|max:10000000',
            'weekly_uses' => 'required|integer|min:1|max:1000',
            'period_weeks' => 'required|integer|min:1|max:520',
        ]);

        // 計算
        $totalUses = $validated['weekly_uses']
            * $validated['period_weeks'];

        $workHours = $validated['price']
            / $validated['hourly_wage'];

        $costPerUse = $validated['price']
            / $totalUses;

        // 画像があれば保存
        $imagePath = null;

        if ($request->hasFile('product_image')) {
            $imagePath = $request->file('product_image')
                ->store('wishlist', 'public');
        }

        // Database に保存
        WishlistItem::create([
            'item_name' => $validated['item_name'],
            'product_image' => $imagePath,
            'price' => $validated['price'],
            'hourly_wage' => $validated['hourly_wage'],
            'weekly_uses' => $validated['weekly_uses'],
            'period_weeks' => $validated['period_weeks'],
            'total_uses' => $totalUses,
            'work_hours' => $workHours,
            'cost_per_use' => $costPerUse,
            'status' => '再確認待ち',
            'review_at' => now()->addDays(7),
        ]);

        return redirect()
            ->route('wishlist.index')
            ->with('success', '欲しい物を保存しました。');
    }

    // 欲しい物一覧を表示する
    public function index()
    {
        $items = WishlistItem::latest()->get();

        return view('wishlist', compact('items'));
    }
   // 7日後の再確認ページを表示する
public function review()
{
    $items = WishlistItem::latest()->get();

    return view('wishlist_review', compact('items'));
}
}
