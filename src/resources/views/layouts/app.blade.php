<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__logo">
                <a class="header__logo-title" href="/">
                    Todo
                </a>
            </div>
            <div class="header__category">
                <a class="header__category-title" href="">
                    カテゴリ一覧
                </a>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>