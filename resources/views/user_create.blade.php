<h2>ユーザー登録</h2>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
@endif

<form action="{{ route('users.store') }}" method="POST">
    @csrf

    <label>名前</label>
    <input type="text" name="name" required>

    <label>メールアドレス</label>
    <input type="email" name="email" required>

    <label>パスワード</label>
    <input type="password" name="password" required>

    <label>時給</label>
    <input type="text" name="hourly_wage" min="1" required>

    <button type="submit">登録する</button>
</form>
