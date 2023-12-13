<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>petGoods Board</title>
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
        <h1>새 게시글 등록</h1>

        @if ($errors->any())
            <div class="alert alert-warning" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route('posts.update',$post)}}" method="post">
            {{-- 라라벨은 CSRF로 부터 보호하기 위해 데이터를 등록할 때의 위조를 체크 하기 위해 아래 코드가 필수 --}}
            @csrf
            {{-- 라라벨 patch 메서드 사용 --}}
            @method('patch')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" name="title" class="form-control"autocomplete="off" value="{{$post->title}}">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" class="form-control" id="name" autocomplete="off">{{$post->content}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">수정</button>
        </form>
    </div>
    <div class="copyright">
        Design by: <a href="https://templated.co/">TEMPLATED.CO</a>
    </div>
</body>
</html>
