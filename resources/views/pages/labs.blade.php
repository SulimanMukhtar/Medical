<html lang="en">

<head>
    @section('title') {{ ' - Labs' }} @endsection
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
                <li class="nav-item">
                    <a class="nav-link" href="/Drugs">Drugs</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/Labs">Labs <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Search">Search</a>
                </li>
            </ul>
        </div>
    </nav>
    <!---------------------------------------------Navbar End------------------------------------------------>
    @foreach ($labs as $lab)
        <div class="container cards">
            <div class="row">
                <div class=" col-xl-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="card card-box" style="width: 15rem;">
                        <img class="card-img-top" height="200" src="/images/labs/{{ $lab['image'] }}"
                            style="border-radius:10%;" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $lab['name'] }}</h5>
                            <p class="card-text">
                            <ul>
                                <li>{{ $lab['address'] }}</li>
                            </ul>
                            </p>
                            <button type="button" class="btn btn-info btn-md" data-toggle="modal"
                                data-target="#lap_{{ $lab['id'] }}">{{ $lab['name'] }} Patient Services</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!----- Modal Start ----------------------------------------------------------->

        <div class="modal fade" id="lap_{{ $lab['id'] }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ $lab['name'] }} Patient Services</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-4">
                                    <button type="button" class="btn btn-info btn-md" data-toggle="modal"
                                        data-target="#Result_{{ $lab['id'] }}"> Test Result</button>
                                </div>
                                <div class="col-4">
                                    <button type="button" class="btn btn-info btn-md" data-toggle="modal"
                                        data-target="#Test_{{ $lab['id'] }}"> Test Menu </button>
                                </div>
                                <div class="col-4">
                                    <button type="button" class="btn btn-info btn-md" data-toggle="modal"
                                        data-target="#Visit_{{ $lab['id'] }}"> Home Visit </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!----- Modal End ----------------------------------------------------------->

        <!------------- Lap Modal Start------------------------------------------------->
        <div class="modal fade" id="Result_{{ $lab['id'] }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Test Result</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Patint ID</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Name</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <button type="submit" class="btn btn-primary">Get Result</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-------------Tests Menu Start------------------------------------------------------------>
        <div class="modal fade" id="Test_{{ $lab['id'] }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Test Menue</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#Id</th>
                                    <th scope="col">Test Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($lab->TestMenu as $TestMenu)
                                    <tr>
                                        <th scope="row">{{ $TestMenu['id'] }}</th>
                                        <td>{{ $TestMenu['test_name'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-------------Tests Menu End------------------------------------------------------------>
        <!-------------Visit Menu Start------------------------------------------------------------>
        <div class="modal fade" id="Visit_{{ $lab['id'] }}" tabindex="-1" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="">Home visit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('submitVisit') }}">
                            @csrf
                            <input type="hidden" name="lab_id" value="{{ $lab['id'] }}">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="address">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="text" class="form-control" name="phone">
                            </div>

                            <div class="form-group">
                                <label for="test">Select A Test</label>
                                <select class="form-control" name="test">
                                    @foreach ($lab->TestMenu as $TestMenu)
                                        <option>{{ $TestMenu['test_name'] }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="date">Fav Date</label>
                                <input type="date" class="form-control" name="date">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <!--------------Visit Menu End-------------------------------------------->
    <!--------------Lab Modal End-------------------------------------------->
    @include('includes.footer')
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js//bootstrap.min.js"></script>
    <script src="js//app.js"></script>
    <script src="js//all.min.js"></script>
</body>

</html>
