<html>

<head>
    <title>@yield("title")</title>
    <link rel="stylesheet" href="{{asset("css/home.css")}}">
</head>

<body>
    <div class="container">
        <div class="contents">
            <h1>@yield("title")</h1>
            @yield("content")
        </div>
    </div>
</body>

</html>