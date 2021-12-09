<html lang="en">

<head>
    @section('title') {{ ' - Doctors' }} @endsection
    @include('includes.header')
</head>

<body>
    <!-----------------------------  Navbar---------------------------------------------------------------->
    <nav class="navbar navbar-expand-md navbar-light fixed-top">
        <a class="navbar-brand" href="#">
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
                <li class="nav-item active">
                    <a class="nav-link" href="/Doctors">Doctors <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Drugs">Drugs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Labs">Labs</a>
                </li>
            </ul>
        </div>
    </nav>
    <div>
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
    </div>
    <span class="text-danger">@error('fname'){{ $message }} @enderror</span>
    <span class="text-danger">@error('lname'){{ $message }} @enderror</span>
    <span class="text-danger">@error('email'){{ $message }} @enderror</span>
    <span class="text-danger">@error('phone'){{ $message }} @enderror</span>
    <span class="text-danger">@error('address'){{ $message }} @enderror</span>
    <span class="text-danger">@error('date'){{ $message }} @enderror</span>
    <span class="text-danger">@error('gender'){{ $message }} @enderror</span>
    <!---------------------------------------------Navbar End------------------------------------------------>

    <div class="container  cards">
        <div class="row">
            @foreach ($doctors as $doctor)
                <div class=" col-xl-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="card card-box" style="width: 15rem;">
                        <img class="card-img-top" height="200" src="/images/doctors/{{ $doctor['image'] }}"
                            style="border-radius:10%;" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Dr. {{ $doctor['name'] }}</h5>
                            <p class="card-text">
                            <ul>
                                <li>{{ $doctor['university'] }}</li>
                                <li>{{ $doctor['specialist'] }}</li>
                                <li>{{ $doctor['phone'] }}</li>
                            </ul>
                            </p>
                            <button type="button" class="btn btn-info btn-md" data-toggle="modal"
                                data-target="#{{ $doctor['id'] }}">Make An Appointment</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!----- Start Modal ----------------------------------------------------------->
    @foreach ($doctors as $doctor)
        <div class="modal fade" id="{{ $doctor['id'] }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Dr. {{ $doctor['name'] }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form method="POST" action="{{ route('makeAppoint') }}">
                            @csrf
                            <input type="hidden" name="Doc_id" value="{{ $doctor['id'] }}">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="fname">First Name</label>
                                        <input type="text " name="fname" class="form-control"
                                            value="{{ old('fname') }}">
                                    </div>
                                    <div class="col">
                                        <label for="lname">last Name</label>
                                        <input type="text " name="lname" class="form-control"
                                            value="{{ old('lname') }}">
                                    </div>
                                </div>

                                <label for="email">Email address</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    value="{{ old('email') }}" aria-describedby="emailHelp">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                    anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="phone" class="form-control" name="phone" value="{{ old('phone') }}">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="address"
                                    value="{{ old('address') }}">
                            </div>
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" class="form-control" name="date" value="{{ old('date') }}">
                                <small id="emailHelp" class="form-text text-muted">The Date Must Be After
                                    Tomorrow.</small>
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select class="form-control" name="gender">
                                    <option>...</option>
                                    <option value="Man" @if (old('gender') == 'Man') {{ 'selected' }} @endif>Man</option>
                                    <option value="Women" @if (old('gender') == 'Women') {{ 'selected' }} @endif>Women</option>
                                    <option value="Child" @if (old('gender') == 'Child') {{ 'selected' }} @endif>Child</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Make An Appointment</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    @endforeach
    <!----- End Modal ----------------------------------------------------------->
    @include('includes.footer')
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js//bootstrap.min.js"></script>
    <script src="js//app.js"></script>
    <script src="js//all.min.js"></script>
</body>

</html>
