<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>商品登録</title>
</head>
<body>

    <h1>商品登録</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ url('/products') }}" method="POST">
        @csrf

        <div>
            <label for="name">商品名</label>
            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name') }}"
                required
            >
        </div>

        <div>
            <label for="price">価格（円）</label>
            <input
                type="number"
                id="price"
                name="price"
                value="{{ old('price') }}"
                min="0"
                required
            >
        </div>

        <button type="submit">登録する</button>
    </form>

    <p>
        <a href="{{ url('/products') }}">商品一覧を見る</a>
    </p>

</body>
</html>
