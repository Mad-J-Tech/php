<style>
    a {
        text-decoration: none;
        color: #444444;
    }

    header {
        display: flex;
        justify-content: space-between;
        border-bottom: solid 1px #444444;
    }
</style>


<header>
    <div class="header-left">
        <a href="{{url("/")}}">Laravel</a>
    </div>
    <div class="header-right">
        <a href="{{url("/login")}}">Login</a>
        <a href="{{url("/register")}}">Register</a>
    </div>
</header>