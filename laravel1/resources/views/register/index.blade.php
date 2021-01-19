@extends("layouts.auth")
@include("components.header")
@section("title", "Register")

@section("form")
<form>
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
@endsection