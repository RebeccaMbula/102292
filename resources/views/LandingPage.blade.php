<!DOCTYPE html>
<html>
<head>

<style>
a:link, a:visited {
  background-color: #228B22;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}
</style>

</head>
<header>@if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif</header>
@isset($message)
<div>{{ $message }}</div>
@endisset
<a href='{{ url('student') }}'>Register new student</a>
<a href='{{ url('fees') }}'>Pay fees</a>
<a href='{{ url('totalfees') }}'>See total payments</a>
<a href='{{ url('installments') }}'>See installments</a>



</html>