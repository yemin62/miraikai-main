@extends('layouts.kadai')

@section('pageTitle', '7日後の再確認')

@section('title', '7日後の再確認')

@section('content')

    <h2>7日後の再確認</h2>

    <p>今もこの商品が欲しいですか？</p>

    @forelse ($items as $item)

        <div class="wishlist-item">

            <h3>{{ $item->item_name }}</h3>

            @if ($item->product_image)
                <img
                    src="{{ asset('storage/' . $item->product_image) }}"
                    alt="{{ $item->item_name }}"
                    style="max-width: 200px; height: auto;"
                >
            @endif

            <p>価格：{{ number_format($item->price) }}円</p>

            <p>必要な労働時間：
                {{ number_format((float) $item->work_hours, 2) }}時間
            </p>

            <p>状態：{{ $item->status }}</p>

            <p>再確認予定日：
                {{ $item->review_at?->format('Y年m月d日') }}
            </p>

           <button type="submit" formaction="{{ route('purchaseitems.store') }}">
                        商品を購入する
                    </button>




        </div>

        <hr>

    @empty
        <p>保存した欲しい物はまだありません。</p>
    @endforelse

    <a href="{{ url('/home') }}">ホームに戻る</a>

@endsection
