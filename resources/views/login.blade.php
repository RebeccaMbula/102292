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
                        <a href="{{ url('/LandingPage') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif</header>



</html>