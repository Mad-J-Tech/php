@extends("layouts.auth")
@include("components.header")
@section("title", "Login")

@section("form")
<form>
    @csrf
    <li>
        <label for="email">E-mail Address</label>
        <input type="text" name="email" id="email"><br>
    </li>
    <li>
        <label for="pass">Password</label>
        <input type="password" name="pass" id="pass"><br>
    </li>
    <li class="button"><input type="submit" value="Login"></li>
</form>
@endsection