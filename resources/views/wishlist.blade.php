
@extends('layouts.kadai')

@section('pageTitle', '欲しい物一覧')

@section('title', '欲しい物一覧')

@section('content')

    <h2>欲しい物一覧</h2>

    <p>保存した欲しい物を確認できます。</p>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <h3>登録した商品</h3>

    @forelse ($items as $item)

        <div class="wishlist-item">

            <h4>{{ $item->item_name }}</h4>

            @if ($item->product_image)
                <img
                    src="{{ asset('storage/' . $item->product_image) }}"
                    alt="{{ $item->item_name }}"
                    style="max-width: 200px; height: auto;"
                >
            @endif

            <p>価格：{{ number_format($item->price) }}円</p>

            <p>
                予想使用回数：
                週{{ $item->weekly_uses }}回
            </p>

            <p>
                予想期間：
                {{ $item->period_weeks }}週間
            </p>

            <p>
                必要な労働時間：
                {{ number_format((float) $item->work_hours, 2) }}時間
            </p>

            <p>
                予想使用回数（合計）：
                {{ $item->total_uses }}回
            </p>

            <p>
                予想1回使用金額：
                {{ number_format((float) $item->cost_per_use, 2) }}円
            </p>

            <p>状態：{{ $item->status }}</p>

            <p>
                再確認予定日：
                {{ $item->review_at?->format('Y年m月d日') }}
            </p>

            <a href="{{ url('/wishlist_review') }}">
                7日後の再確認へ
            </a>

        </div>

        <hr>

    @empty

        <p>保存した欲しい物はまだありません。</p>

    @endforelse

    <a href="{{ url('/home') }}">ホームに戻る</a>

@endsection
