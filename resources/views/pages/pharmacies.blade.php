<html lang="en">

<head>
    @section('title') {{ ' - Pharmacies' }} @endsection
    @include('includes.header')
</head>

<body>
    <!-----------------------------  Navbar---------------------------------------------------------------->
    <nav class="navbar navbar-expand-md navbar-light fixed-top">
        <a class="navbar-brand" href="#">
            MEDICA
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-hand-holding-medical"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Doctors">Doctors</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/Pharmacies">Drogs <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Labs">Labs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Search">Search</a>
                </li>
            </ul>
        </div>
    </nav>
    <!---------------------------------------------Navbar End------------------------------------------------>
    <div class="container">
        <form class="example" action="action_page.php">
            <input type="text" placeholder="Please Inter Your Drog Name..." name="search">
            <button type="submit"><i class="fa fa-capsules"></i></button>
        </form>
    </div>
    @include('includes.footer')
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js//bootstrap.min.js"></script>
    <script src="js//app.js"></script>
    <script src="js//all.min.js"></script>
</body>

</html>
