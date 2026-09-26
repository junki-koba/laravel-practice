@extends('layout')

@section('title', '問い合わせ一覧')

@section('content')
    <h1>問い合わせ一覧</h1>

    <h2>検索</h2>
    <form method="GET" action="/inquiries">
        <div class="search-bar">
            <input type="text" name="keyword" placeholder="名前で検索" value="{{ $keyword }}">
            <button type="submit">検索</button>
        </div>
    </form>

    <a href="/inquiries/create">+ 新規登録</a>
    <br><br>

    @foreach ($inquiries as $inquiry)
        <div class="card">
            <div>
                <strong>{{ $inquiry->name }}</strong><br>
                {{ $inquiry->email }} / {{ $inquiry->message }}
            </div>
            <form method="POST" action="/inquiries/{{ $inquiry->id }}/delete">
                @csrf
                <button type="submit">削除</button>
            </form>
        </div>
    @endforeach
@endsection