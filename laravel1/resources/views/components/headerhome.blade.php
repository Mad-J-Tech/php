<style>
    a {
        text-decoration: none;
        color: #444444;
    }

    header {
        display: flex;
        justify-content: space-between;
        border-bottom: solid 1px #444444;
        height: 30px;
    }

    ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    li {
        border: solid 1px #444444;
        text-align: center;
    }

    .menu_first-level {
        display: none;
    }

    .menu:hover .menu_first-level {
        display: block;
        background-color: white;
    }
</style>


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