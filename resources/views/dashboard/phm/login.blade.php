<html lang="en">

<head>
    @section('title') {{ ' - Pharmacy Login' }} @endsection
    @include('includes.header')
</head>

<body>
    <!-----------------------------  Navbar---------------------------------------------------------------->
    <nav class="navbar navbar-expand-md navbar-light fixed-top">
        <a class="navbar-brand" href="/">
            <i class="fas fa-user-md"></i> MEDICA
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
                <li class="nav-item">
                    <a class="nav-link" href="/Drugs">Drugs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Labs">Labs</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a onclick="myFunction()" class="dropbtn nav-link">Login as</a>
                        <div id="myDropdown" class="dropdown-content">
                            <a href="/doctor/login">Doctor</a>
                            <a href="/phm/login">Pharmacy</a>
                            <a href="/labm/login">Lab</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4" style="margin-top: 45px;">
                    <h4>Pharmacy Manger Login</h4>
                    <hr>
                    <form action="{{ route('phm.check') }}" method="post" autocomplete="off">
                        @if (Session::get('fail'))
                            <div class="alert alert-danger">
                                {{ Session::get('fail') }}
                            </div>
                        @endif
                        @csrf
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Enter Your Username"
                                value="{{ old('username') }}">
                            <span class="text-danger">@error('username'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter password"
                                    value="{{ old('password') }}">
                                <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                                <br>
                                <a href="{{ route('phm.register') }}">Create new Account</a>
                            </form>
                        </div>
                    </div>
                </div>

            </body>

        </html>
