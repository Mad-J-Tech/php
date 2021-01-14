<html>

<head>
    <title>Login</title>
    <style>
        h1 {
            font-size: 12pt;
            float: left;
        }


        ul {
            list-style: none;
            width: 400px;
            margin: 20px auto;
            border: solid 1px;
            text-align: center;
        }

        li {
            clear: both;
        }

        label {
            margin-right: 10px;
            width: 150px;
            float: left;
        }

        .button {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    @include("components.header")
    <ul>
        <h1>Login</h1>
        <form>
            @csrf
            <li>
                <label for="email">E-mail Address</label>
                <input type="text" name="email" id="email" value="{{$email_register}}"><br>
            </li>
            <li>
                <label for="pass">Password</label>
                <input type="password" name="pass" id="pass" value="{{$pass_register}}"><br>
            </li>
            <li class="button"><input type="submit" value="Login"></li>
        </form>
    </ul>
</body>

</html>