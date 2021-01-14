<html>

<head>
    <title>Register</title>
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
        <h1>Register</h1>
        <form action="/login" method="POST">
            @csrf
            <li><label for="name">Name</label>
                <input type="text" id="name">
            </li>
            <li><label for="email">E-mail Address</label>
                <input type="text" name="email_register" id="email">
            </li>
            <li><label for="pass">Password</label>
                <input type="password" name="pass_register" id="pass">
            </li>
            <li><label for="conf_pass">Confirm Password</label>
                <input type="password" id="conf_pass">
            </li>
            <li class="button"><input type="submit" value="Register"></li>
        </form>
    </ul>
</body>

</html>