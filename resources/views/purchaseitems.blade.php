@extends('layouts.kadai')

@section('pageTitle', '購入済み商品')

@section('title', '購入済み商品')

@section('content')

    <h2>購入済み商品一覧</h2>

    @forelse ($items as $item)

        <div class="purchase-item">

            <h3>{{ $item->item_name }}</h3>

            @if ($item->product_image)
                <img src="{{ asset('storage/' . $item->product_image) }}"
                     alt="{{ $item->item_name }}"
                     width="150">
            @endif

            <p>商品価格：{{ number_format($item->price) }} 円</p>

            <p>時給：{{ number_format($item->hourly_wage) }} 円</p>

            <p>週の使用回数：{{ $item->weekly_uses }} 回</p>

            <p>予想期間：{{ $item->period_weeks }} 週間</p>

            <p>必要な労働時間：{{ round($item->work_hours, 2) }} 時間</p>

            <hr>

        </div>

    @empty

        <p>まだ購入した商品はありません。</p>

    @endforelse

@endsection
