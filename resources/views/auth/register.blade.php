<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/Choba.png">
    <link rel="icon" type="image/png" href="../assets/Choba.png">
    <title>
        CHOBA
    </title>

    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="">
    @include('auth.register.navbar')
    <main class="main-content  mt-0">
        @include('auth.register.content')
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                    @include('auth.register.form')
                </div>
            </div>
        </div>
    </main>
    @include('auth.register.footer')
</body>

</html>
