<head>
    <link rel="stylesheet" href="{{asset("css/components/headerhome.css")}}">
</head>
<header>
    <div class="header-left">
        <a href="{{url("/")}}">Laravel</a>
    </div>
    <div class="header-right">
        <div class="menu">
            <div class="menu-title">{{$login_name}} ▼</div>
            <div class="menu_first-level">
                <ul>
                    <li>Logout</li>
                </ul>
            </div>
        </div>
    </div>
</header>