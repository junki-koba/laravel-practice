@extends('layout')

@section('title', '問い合わせ登録')

@section('content')
    <h1>問い合わせ登録</h1>

    <form method="POST" action="/inquiries">
        @csrf
        <label>名前</label>
        <input type="text" name="name" placeholder="お名前を入力">

        <label>メール</label>
        <input type="text" name="email" placeholder="example@example.com">

        <label>内容</label>
        <textarea name="message" rows="4" placeholder="お問い合わせ内容を入力"></textarea>

        <button type="submit">登録</button>
    </form>

    <a href="/inquiries">← 一覧に戻る</a>
@endsection