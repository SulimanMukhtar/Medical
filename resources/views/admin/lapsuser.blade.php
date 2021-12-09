<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.header')
    <title>Dashboard</title>
</head>

<body>
    <div class=" lapsBrand">
        <p><strong>Altra Labs </strong><span class="badge bg-info">
                {{ Auth::guard('labm')->user()->name }}</span>
            <span><a href="{{ route('labm.logout') }}"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                <form action="{{ route('labm.logout') }}" id="logout-form" method="post">@csrf</form>
            </span>
        </p>
    </div>

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
    <span class="text-danger">@error('name'){{ $message }} @enderror</span>
    <span class="text-danger">@error('address'){{ $message }} @enderror</span>
    <span class="text-danger">@error('phone'){{ $message }} @enderror</span>
    <span class="text-danger">@error('test'){{ $message }} @enderror</span>

    <div class="container">
        <h3>Add Paitint Result</h3>
        <div class="Resulteadd">
            <form action="action_page.php">
                <div class="container">
                    <form action="action_page.php">
                        <div class="row">
                            <div class="col-25">
                                <label for="fname">Patint Name</label>
                            </div>
                            <div class="col-75">
                                <select class="custom-select" id="inputGroupSelect01">
                                    <option selected>Select a Patient</option>
                                    @foreach ($patients as $patient)
                                        <option value="{{ $patient['pid'] }}">{{ $patient['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="lname">Patint ID</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="lname" name="lastname" placeholder="Patint Id..">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="country">Upload Result</label>
                            </div>
                            <div class="col-75">
                                <div class="input-group">
                                    <input type="file" class="form-control" id="inputGroupFile04"
                                        aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                    <button class="btn btn-outline-secondary" type="button"
                                        id="inputGroupFileAddon04">Upload</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <input type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </form>
        </div>
    </div>

    <section class="homevisit">
        <div class="container">
            <h3>Paitint <span> <button type="button" class="btn btn-info btn-md" data-toggle="modal"
                        data-target="#addpatient">Add Patient</button></span> </h3>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Patint Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Test Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Fav Date</th>
                        <th scope="col">Patient id</th>
                        <th scope="col">Modify</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($patients as $patient)

                        <tr>
                            <th scope="row">{{ $patient['id'] }}</th>
                            <td>{{ $patient['name'] }}</td>
                            <td>{{ $patient['address'] }}</td>
                            <td>{{ $patient['test_name'] }}</td>
                            <td>{{ $patient['phone'] }}</td>
                            <td>{{ $patient['date'] }}</td>
                            @if (!$patient['pid'])
                                <td>
                                    <form method="POST" action="{{ route('GivePID', $patient['id']) }}">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="lab_id" value="{{ $patient['lab_id'] }}">
                                        <button type="submit" class="btn btn-info btn-md">GivePID</button>
                                    </form>
                                </td>
                            @else
                                <td>{{ $patient['pid'] }}</td>
                            @endif
                            <td><button type="button" class="btn btn-info btn-md" data-toggle="modal"
                                    data-target="#editpatient{{ $patient['id'] }}">Edit</button>
                                <button type="button" class="btn btn-danger btn-md" data-toggle="modal"
                                    data-target="#delpatient{{ $patient['id'] }}">Del</button>
                                <div class="modal fade" id="delpatient{{ $patient['id'] }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Confirm Deletion</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <form action="{{ Route('PatientDel', $patient['id']) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <h3>Are You Sure ?</h3>
                                                    <p>You Won't Be Able To Revert This !</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="editpatient{{ $patient['id'] }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Patient</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <form action="{{ Route('updatePatient', $patient['id']) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input type="text" value="{{ $patient['name'] }}" name="name"
                                                            class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="address">Address</label>
                                                        <input type="text" value="{{ $patient['address'] }}"
                                                            name="address" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="phone">Phone</label>
                                                        <input type="text" value="{{ $patient['phone'] }}"
                                                            name="phone" class="form-control">
                                                    </div>

                                                    <button type="submit" class="btn btn-primary">Save Change</button>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <section class="testmenue container">
        <h3>Test Menu <span> <button type="button" class="btn btn-info btn-md" data-toggle="modal"
                    data-target="#addtest">Add Test</button></span> </h3>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Test Name</th>
                    <th scope="col">

                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($TestMenus as $TestMenu)
                    <tr>
                        <th scope="row">{{ $TestMenu['id'] }}</th>
                        <td>{{ $TestMenu['test_name'] }}</td>
                        <td>
                            <button type="button" class="btn btn-info btn-md" data-toggle="modal"
                                data-target="#edittest">Edit</ button>
                                <button type="button" class="btn btn-info btn-md" data-toggle="modal"
                                    data-target="#del">Del</button>
                        </td>
                        <!----------------start----- edite test modal---------------------------->
                        <div class="modal fade" id="edittest" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Record</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Test Name</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1">
                                            </div>

                                            <button type="submit" class="btn btn-primary">Save Change</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!----------------end----- edite test modal---------------------------->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>

    <div class="modal fade" id="addpatient" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add A Patient</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('addPatient') }}">
                        @csrf
                        <input type="hidden" name="lab_id" value="{{ Auth::guard('labm')->user()->id }}">
                        <div class="form-group">
                            <label for="name">Patient Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="address">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="test">Select A Test</label>
                            <select class="form-control" name="test" value="{{ old('test') }}">
                                @foreach ($TestMenus as $TestMenu)
                                    <option>{{ $TestMenu['test_name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Save Change</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!----------------start----- add test modal---------------------------->

    <div class="modal fade" id="addtest" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Test</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('AddTest') }}">
                        @csrf
                        <input type="hidden" name="lab_id" value="{{ Auth::guard('labm')->user()->id }}">
                        <div class="form-group">
                            <label for="name">Test Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>

                        <button type="submit" class="btn btn-primary">Save Change</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!----------------end----- add test modal---------------------------->
</body>
@include('includes.footer')
<script src="js/popper.js"></script>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js//bootstrap.min.js"></script>
<script src="js//app.js"></script>
<script src="js//all.min.js"></script>
</body>

</html>
