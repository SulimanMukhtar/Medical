<html lang="en">

<head>
    @include('includes.header')
</head>

<body>
    <!-----------------------------  Navbar---------------------------------------------------------------->
    <nav class="navbar navbar-expand-md navbar-light fixed-top">
        <a class="navbar-brand" href="/">
            <i class="fas fa-home"></i> MEDICA
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-hand-holding-medical"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Doctors">Doctors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Drugs">Drugs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Labs">Labs</a>
                </li>
<<<<<<< HEAD
                <li class="nav-item"> <button class="nav-link dropdown-toggle" type="button" id="dropdownMenu2"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Login
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <li><button class="dropdown-item" type="button">Action</button></li>
                        <li><button class="dropdown-item" type="button">Another action</button></li>
                        <li><button class="dropdown-item" type="button">Something else here</button></li>
                    </ul>
=======
                <li class = "nav-item">
                      <div class="dropdown">
                            <a onclick="myFunction()" class="dropbtn nav-link">Login as</a>
                            <div id="myDropdown" class="dropdown-content">
                                <a href="/doctor/login">Doctor</a>
                                <a href="/phm/login">Pharmacy</a>
                                <a href="/labm/login">Lab</a>
                            </div>
                        </div>
>>>>>>> e968097e92913f077dfb19d3be4782406035cf5b
                </li>

            </ul>
        </div>
    </nav>
    
    <!---------------------------------------------Navbar End------------------------------------------------>
    <div class="container">
        <div class="main-body">
            <h1>WE PROVIDE TOP MEDICAL SERVICE </h1>
            <P class="lead">MORE THAN 30 PROFESSIONAL</P>
            <button data-target="#exampleModal" data-toggle="modal" class="Appiontment-btn"> JOIN TO US</button>
        </div>
    </div>
    <!-- stsrt join us modal--------------------------------------------------------- -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Medica</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="lead joints">Welcome To Medica Community , Please Choose What Represent Your Service.
                    </p>
                    <div class="container">
                        <div class="row joinbt">
                            <div class="col-sm">
                                <button class="join"
                                    onclick="window.location.href='/phm/register'">Pharmacy</button>
                            </div>
                            <div class="col-sm">
                                <button class="join"
                                    onclick="window.location.href='/doctor/register'">Doctor</button>
                            </div>
                            <div class="col-sm">
                                <button class="join"
                                    onclick="window.location.href='/labm/register'">Laboratory</button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
=======
  </div>
</div>

>>>>>>> e968097e92913f077dfb19d3be4782406035cf5b
    <!-- end join us modal--------------------------------------------------------- -->
    @include('includes.footer')
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js//bootstrap.min.js"></script>
    <script src="js//app.js"></script>
    <script src="js//all.min.js"></script>
</body>

</html>
