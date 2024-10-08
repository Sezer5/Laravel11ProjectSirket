<html>

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{asset('assets')}}/User/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/User/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/User/css/prettyPhoto.css" rel="stylesheet">
    <link href="{{asset('assets')}}/User/css/price-range.css" rel="stylesheet">
    <link href="{{asset('assets')}}/User/css/animate.css" rel="stylesheet">
    <link href="{{asset('assets')}}/User/css/main.css" rel="stylesheet">
    <link href="{{asset('assets')}}/User/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('assets')}}/User/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('assets')}}/User/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('assets')}}/User/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="{{asset('assets')}}/User/images/ico/apple-touch-icon-57-precomposed.png">
    @yield('head')
</head>

<body>
    @include("home.header")
    <section>
		<div class="container">
    @section('sidebar')
        @include("home.sidebar")
    @show

        @yield('content')
    @include("home.footer")
    @yield('foot')
</body>

</html>
