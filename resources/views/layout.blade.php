<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', '問い合わせ管理システム')</title>
    <style>
        body {
            font-family: "Hiragino Kaku Gothic ProN", "Meiryo", sans-serif;
            background-color: #f4f5f7;
            color: #333;
            max-width: 720px;
            margin: 40px auto;
            padding: 0 20px;
        }
        h1 {
            border-bottom: 3px solid #4a90d9;
            padding-bottom: 8px;
        }
        h2 {
            font-size: 16px;
            color: #555;
        }
        form {
            background: white;
            padding: 16px;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            margin-bottom: 16px;
        }
        label, input, textarea {
            display: block;
            width: 100%;
            margin-bottom: 8px;
        }
        input, textarea {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #4a90d9;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #357ab8;
        }
        .card {
            background: white;
            padding: 12px 16px;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .card form {
            box-shadow: none;
            padding: 0;
            margin: 0;
            background: transparent;
        }
        .card button {
            background-color: #d94a4a;
        }
        .card button:hover {
            background-color: #b83c3c;
        }
        .search-bar {
            display: flex;
            gap: 8px;
        }
        .search-bar input {
            flex: 1;
            margin-bottom: 0;
        }
        .search-bar button {
            width: auto;
        }
    </style>
</head>
<body>
    @yield('content')
</body>
</html>