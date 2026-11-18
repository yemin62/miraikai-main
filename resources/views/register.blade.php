@extends('layouts.kadai')

@section('pageTitle', 'プロフィール')

@section('title', 'プロフィール')

@section('content')
    <form action = "{{ route('users.store') }}" method= "POST">
        @csrf
        <p>ユーザ名</p>
        <input type="text" name="name" required>

        <p>メールアドレス</p>
        <input type="email" name="email" required>

        <p>パスワード</p>
        <input type = "password" name = "password" required>

        <p>時給（円）</p>
        <input type = "number" name = "hourly_wage" min = "1" required>

        <p>
            <button type = "submit">登録する</button>
        </p>
    </form>
@endsection
