@extends('layouts.kadai')

@section('pageTitle', 'ホーム')

@section('title', 'ホーム')

@section('content')

    <!-- キャッチコピー -->
    <div class="mb-10">
        <h2 class="text-2xl font-bold text-gray-700 mb-3">
            買う前に、未来を見る。
        </h2>

        <p class="text-gray-500">
            買う前の予想と、買った後の実際を比べて、
            次の買い物に活かしましょう。
        </p>
    </div>

    <!-- メニュー -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">

        <!-- 欲しい物を登録 -->
        <div class="bg-white border-2 border-gray-200 rounded-md p-5">
            <h3 class="text-xl font-bold text-gray-700 mb-3">
                欲しい物を登録
            </h3>

            <p class="text-gray-500 mb-5">
                価格・時給・予想使用回数を入力します。
            </p>

            <a href="/miraikai"
                class="inline-block text-white text-center leading-10 bg-pink-600 px-10 hover:bg-pink-500 rounded-md">
                登録する
            </a>
        </div>

        <!-- 欲しい物一覧 -->
        <div class="bg-white border-2 border-gray-200 rounded-md p-5">
            <h3 class="text-xl font-bold text-gray-700 mb-3">
                欲しい物一覧
            </h3>

            <p class="text-gray-500 mb-5">
                保存した欲しい物を確認します。
            </p>

            <a href="/wishlist"
                class="inline-block text-white text-center leading-10 bg-sky-500 px-10 hover:bg-sky-400 rounded-md">
                一覧を見る
            </a>
        </div>

        <!-- 7日後の再確認 -->
        <div class="bg-white border-2 border-gray-200 rounded-md p-5">
            <h3 class="text-xl font-bold text-gray-700 mb-3">
                7日後の再確認
            </h3>

            <p class="text-gray-500 mb-5">
                本当に必要な商品か、もう一度考えます。
            </p>

            <a href="/wishlist_review"
                class="inline-block text-white text-center leading-10 bg-yellow-500 px-10 hover:bg-yellow-400 rounded-md">
                確認する
            </a>
        </div>

        <!-- 購入済み商品 -->
        <div class="bg-white border-2 border-gray-200 rounded-md p-5">
            <h3 class="text-xl font-bold text-gray-700 mb-3">
                購入済み商品
            </h3>

            <p class="text-gray-500 mb-5">
                購入した商品の使用回数を記録します。
            </p>

            <a href="purchaseitems"
                class="inline-block text-white text-center leading-10 bg-green-600 px-10 hover:bg-green-500 rounded-md">
                商品を見る
            </a>
        </div>

        <!-- 予想と実際を比較 -->
        <div class="bg-white border-2 border-gray-200 rounded-md p-5">
            <h3 class="text-xl font-bold text-gray-700 mb-3">
                予想と実際を比較
            </h3>

            <p class="text-gray-500 mb-5">
                予想した使用回数と実際の結果を比較します。
            </p>

            <a href="#"
                class="inline-block text-white text-center leading-10 bg-purple-600 px-10 hover:bg-purple-500 rounded-md">
                比較する
            </a>
        </div>

        <!-- プロフィール -->
        <div class="bg-white border-2 border-gray-200 rounded-md p-5">
            <h3 class="text-xl font-bold text-gray-700 mb-3">
                プロフィール
            </h3>

            <p class="text-gray-500 mb-5">
                ユーザー情報を確認・変更します。
            </p>

            <a href="#"
                class="inline-block text-white text-center leading-10 bg-gray-500 px-10 hover:bg-gray-400 rounded-md">
                プロフィールを見る
            </a>
        </div>

    </div>

@endsection
