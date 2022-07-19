<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-dark border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
    @if (Route::has('login'))
    <div class="container-fluid">
        <div class="d-flex">
            <a class="navbar-brand" href="#">
                <img src="assets/Choba.png" alt="" height="50">
              </a>
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="#">
                <img src="assets/ChobaT.png" alt="" height="50">
            </a>
        </div>

        <div class="d-flex">
            @auth
            <div class="navbar-nav d-lg-block d-none">
                <div class="nav-item">
                    <a href="{{ url('/home') }}" class="btn btn-sm mb-0 me-1 btn-primary">Home</a>
                </div>
            </div>
            @else
            <div class="navbar-nav d-lg-block d-none me-2">
                <div class="nav-item">
                    <a href="{{ route('login') }}" class="btn btn-sm mb-0 me-1 btn-primary">Sign In</a>
                </div>
            </div>
            @if (Route::has('register'))
            <div class="navbar-nav d-lg-block d-none">
                <div class="nav-item">
                    <a href="{{ route('register') }}" class="btn btn-sm mb-0 me-1 btn-primary">Sign Up</a>
                </div>
            </div>
            @endif
            @endauth
        </div>
    </div>
    @endif
</nav>
<br>
<!-- End Navbar -->
