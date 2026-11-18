@extends('layouts.kadai')

@section('pageTitle', 'プロフィール')

@section('title', 'プロフィール')

@section('content')

<p>ユーザー名：{{ $user->name }}</p>
<p>メールアドレス：{{ $user->email }}</p>
<p>時給：{{ $user->hourly_wage }} 円</p>

@endsection
