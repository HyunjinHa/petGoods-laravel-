<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>petGoods home</title>
    <meta name="keywords" content="">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="description" content="">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900%7CQuicksand:400,700%7CQuestrial" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('css/default.css') }}">
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('css/fonts.css') }}">
    <!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
</head>
<body>
    <div id="header-wrapper">
        <div id="header" class="container">
            <div id="logo">
                <h1><a href="#">petGoods</a></h1>
            </div>
            <div id="menu">
                <ul>
                    <li class="current_page_item"><a href="/" title="homepage">Home</a></li>
                    <li><a href="/products" title="shop">Shop</a></li>
                    <li><a href="/posts" title="board">Board</a></li>
                    <li><a href="#" title="mypage">Mypage</a></li>
                    <li><a href="#" title="login">login</a></li>
                </ul>
            </div>
        </div>
        <h1>홈페이지</h1>
    </div>
    {{-- <div class="container">
        @foreach ($posts as $post)
            <div class="post">
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->body }}</p>
            </div>
        @endforeach
    </div> --}}
    <div class="copyright">
        Design by: <a href="https://templated.co/">TEMPLATED.CO</a>
    </div>
</body>
</html>
