<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Arithmetic | Əsas səhifə')</title>
    <meta name="description" content="Add a dark-mode theme toggle with a Bootstrap Custom Switch">

    <meta property="og:site_name" content="GitHub">
    <meta property="og:image"
          content="https://repository-images.githubusercontent.com/194995309/38db8f80-9db7-11e9-998f-43f2a26d9e0b">
    <meta property="og:title" content="dark-mode-switch">
    <meta property="og:description" content="Add a dark-mode theme toggle with a Bootstrap Custom Switch">
    <meta property="og:url" content="https://coliff.github.io/dark-mode-switch/">
    <link rel="author" href="https://christianoliff.com/">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontend/dark-mode.css')}}">

    @yield('css')


</head>

<body class="bg-white text-center d-flex h-100">
<div class="container d-flex p-3 mx-auto flex-column">




    <nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{route('homepage')}}">Arithmetic</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('homepage')}}">
                        <i class="fa fa-home"></i>
                        Əsas səhifə
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:;" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{auth()->user()->name_lastname}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="darkSwitch">
                                <label class="custom-control-label" for="darkSwitch">Qaranlıq rejim</label>
                            </div>
                        </a>
                        <a class="dropdown-item" href="{{route('archive')}}">Arxiv</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('logout')}}">Hesabdan çıx</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')


    <footer class="mt-auto">
        <p>Arithmetic &copy; 2020</p>
    </footer>

</div>

<script src="{{asset('bootstrap/js/jquery.min.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
<script src="{{asset('frontend/dark-mode-switch.min.js')}}"></script>
@yield('js')
</body>

</html>
