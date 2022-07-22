<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-transparent border-radius-lg top-0 z-index-3 shadow py-2 start-0 end-0 mx-4">
    <div class="container-fluid">
        @if (Route::has('login'))
        <div class="d-flex">
            <a class="nav-link" href="/">
                <img src="assets/Choba.png" alt="" height="50">
            </a>
            <a class="nav-linknt-weight-bolder ms-lg-0 ms-3 " href="/">
                <img src="assets/ChobaT.png" alt="" height="50">
            </a>
        </div>
            <div class="d-flex">
                @auth
                    <a href="{{ url('/customer') }}" class="btn nav-link mt-3" style="color: white">Home</a>
                @else
                    <a href="{{ route('login') }}" class="btn nav-link mt-3" style="color: white">Sign In</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn nav-link mt-3" style="color: white">Sign Up</a>
                @endif
                @endauth
            </div>
        @endif
    </div>
</nav>
<!-- End Navbar -->
