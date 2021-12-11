<html lang="en">

<head>
    @section('title') {{ ' - Doctor Registeration' }} @endsection
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

        <div class="container drlog">
            <div class="row">
                <div class="col-md-4 offset-md-4" style="margin-top: 45px;">
                    <h4 class="regtitle"> Doctor Register</h4>
                    <hr>
                    <form action="{{ route('Doctors.store') }}" method="post" autocomplete="off"
                        enctype="multipart/form-data">
                        @if (Session::get('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        @if (Session::get('fail'))
                            <div class="alert alert-danger">
                                {{ Session::get('fail') }}
                            </div>
                        @endif

                        @csrf
                        
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Your Name"
                                value="{{ old('name') }}">
                            <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="specialist">Specialist</label>
                            <input type="text" class="form-control" name="specialist"
                                placeholder="Enter Your Specialist" value="{{ old('specialist') }}">
                            <span class="text-danger">@error('specialist'){{ $message }} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="university">University</label>
                            <input type="text" name="university" id="university" class="form-control"
                                placeholder="Doctor University" value="{{ old('university') }}">
                            <span class="text-danger">@error('university'){{ $message }} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter Email Address"
                                value="{{ old('email') }}">
                            <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username"
                                placeholder="Choose a Unique Username" value="{{ old('username') }}">
                            <span class="text-danger">@error('username'){{ $message }} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="phone" class="form-control" name="phone" placeholder="Enter Your Phone"
                                value="{{ old('phone') }}">
                            <span class="text-danger">@error('phone'){{ $message }} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="address" placeholder="Enter Your Address"
                                value="{{ old('address') }}">
                            <span class="text-danger">@error('address'){{ $message }} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter Password"
                                value="{{ old('password') }}">
                            <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="cpassword">Confirm Password</label>
                            <input type="password" class="form-control" name="cpassword"
                                placeholder="Confirm Your Password" value="{{ old('cpassword') }}">
                            <span class="text-danger">@error('cpassword'){{ $message }} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="image">Doctor Image</label>
                            <input type="file" name="image" id="image" class="form-control"
                                value="{{ old('image') }}">
                            <span class="text-danger">@error('image'){{ $message }} @enderror</span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary logb">Register</button>
                        </div>
                        <br>
                        <a href="{{ route('doctor.login') }}"  class ="reg">I already have an account</a>
                    </form>
                </div>
            </div>
        </div>

    </body>

</html>
