<html>

<head>
    <title>@yield("title")</title>
    <link rel="stylesheet" href="{{asset("css/auth.css")}}">
</head>

<body>
    <ul>
        <h1>@yield("title")</h1>
        @yield("form")
    </ul>
</body>

</html>