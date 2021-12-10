<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.header')
    <title>Dashboard</title>
</head>

<body>
    <div class="info admin">
        <p><strong>Admin </strong>{{ Auth::guard('admin')->user()->name }} <span><a
                    href="{{ route('admin.logout') }}"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                <form action="{{ route('admin.logout') }}" id="logout-form" method="post">@csrf</form>
            </span></p>
    </div>

    <button id="defaultOpen" class="tablink"
        onclick="openPage('Submissions', this, 'rgba(0, 255, 234, 0.315)')">Submissions</button>
    <button class="tablink" onclick="openPage('Labs', this, 'rgba(0, 195, 255, 0.356)')">Labs</button>
    <button class="tablink" onclick="openPage('Doctors', this, 'rgba(0, 255, 106, 0.315)')">Doctors</button>
    <button class="tablink" onclick="openPage('Pharmacies', this, 'rgba(43, 255, 0, 0.315)')">Pharmacies</button>

    <div id="Submissions" class="tabcontent">
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
        <h3>Submissions</h3>
        <table class="table table-striped table-hover table-responsive-xl">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Department</th>
                    <th scope="col">Modifiy</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($docS as $doc)
                        <th scope="row">{{ $doc['id'] }}</th>
                        <td>{{ $doc['name'] }}</td>
                        <td>{{ $doc['address'] }}</td>
                        <td>{{ $doc['email'] }}</td>
                        <td>{{ $doc['phone'] }}</td>
                        <td>Doc</td>
                        <td>
                            <form method="POST" action="{{ route('DocApprove', $doc['id']) }}">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id" value="{{ $doc['id'] }}">
                                <button type="submit" class="btn btn-info btn-md">Approve</button>
                            </form>
                        </td>
                    @endforeach
                </tr>
                <tr>
                    @foreach ($laS as $la)
                        <th scope="row">{{ $la['id'] }}</th>
                        <td>{{ $la['name'] }}</td>
                        <td>{{ $la['address'] }}</td>
                        <td>{{ $la['email'] }}</td>
                        <td>{{ $la['phone'] }}</td>
                        <td>Labs</td>
                        <td>
                            <form method="POST" action="{{ route('LabApprove', $la['id']) }}">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id" value="{{ $la['id'] }}">
                                <button type="submit" class="btn btn-info btn-md">Approve</button>
                            </form>
                        </td>
                    @endforeach
                </tr>
                <tr>
                    @foreach ($phaS as $pha)
                        <th scope="row">{{ $pha['id'] }}</th>
                        <td>{{ $pha['name'] }}</td>
                        <td>{{ $pha['address'] }}</td>
                        <td>{{ $pha['email'] }}</td>
                        <td>{{ $pha['phone'] }}</td>
                        <td>Pharmacy</td>
                        <td>
                            <form method="POST" action="{{ route('PhaApprove', $pha['id']) }}">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id" value="{{ $pha['id'] }}">
                                <button type="submit" class="btn btn-info btn-md">Approve</button>
                            </form>
                        </td>
                    @endforeach
                </tr>

            </tbody>
        </table>
    </div>
    <div id="Labs" class="tabcontent">
        <div>
            <h3>Labs<span><button type="button" class="btn btn-info btn-md" data-toggle="modal"
                        data-target="#AddLab">Add Lab</button></span></h3>
            {{-- <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#AddLab">Add Lab</button> --}}
        </div>
        <table class="table table-striped table-hover table-responsive-xl">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Name</th>
                    <th scope="col">Location</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Logo</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($labs as $lab)
                        <th scope="row">{{ $lab['id'] }}</th>
                        <td>{{ $lab['name'] }}</td>
                        <td>{{ $lab['address'] }}</td>
                        <td>{{ $lab['phone'] }}</td>
                        <td><img width="100" height="100" src="{{ URL::asset('/images/labs/' . $lab['image']) }}"
                                alt=""></td>
                        <td>
                            <button type="button" class="btn btn-info btn-md" data-toggle="modal"
                                data-target="#editLab{{ $lab['id'] }}">Edit</button>
                            <button type="button" class="btn btn-danger btn-md" data-toggle="modal"
                                data-target="#dellab{{ $lab['id'] }}">Del</button>
                            <div class="modal fade" id="editLab{{ $lab['id'] }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Lab</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            @if (Session::has('success'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ Session::get('success') }}
                                                </div>
                                            @endif
                                            <form action="{{ Route('Labs.update', $lab['id']) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group">
                                                    <label for="name">Lab Name</label>
                                                    <input type="text" value="{{ $lab['name'] }}" name="name"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="address">Location</label>
                                                    <input type="text" value="{{ $lab['address'] }}" name="address"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="phone">Phone Number</label>
                                                    <input type="text" value="{{ $lab['phone'] }}" name="phone"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="image">Logo</label>
                                                    <input type="file" name="image" class="form-control">
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
                            <div class="modal fade" id="dellab{{ $lab['id'] }}" tabindex="-1"
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
                                            <form action="{{ Route('Labs.destroy', $lab['id']) }}" method="POST">
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
                        </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <div id="Doctors" class="tabcontent">
        <div>
            <h3>Doctors<span><button type="button" class="btn btn-info btn-md" data-toggle="modal"
                        data-target="#AddDoctor">Add Doctor</button></span></h3>
            {{-- <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#AddDoctor">Add
                Doctor</button> --}}
        </div>
        <table class="table table-sm table-striped table-hover table-responsive-xl ">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Doctor Name</th>
                    <th scope="col">Doctor Specialist</th>
                    <th scope="col">University</th>
                    <th scope="col">phone</th>
                    <th scope="col">Image</th>
                    <th scope="col">Modifiy</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($doctors as $doctor)
                    <tr>
                        <th scope="row">{{ $doctor['id'] }}</th>
                        <td>{{ $doctor['name'] }}</td>
                        <td>{{ $doctor['specialist'] }}</td>
                        <td>{{ $doctor['university'] }}</td>
                        <td>{{ $doctor['phone'] }}</td>
                        <td><img width="100" height="100"
                                src="{{ URL::asset('/images/doctors/' . $doctor['image']) }}" alt=""></td>
                        </td>
                        <td>
                            <button type="button" class="btn btn-info btn-md" data-toggle="modal"
                                data-target="#editdoctors{{ $doctor['id'] }}">Edit</button>
                            <button type="button" class="btn btn-danger btn-md" data-toggle="modal"
                                data-target="#del{{ $doctor['id'] }}">Del</button>
                            <div class="modal fade" id="editdoctors{{ $doctor['id'] }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                            @if (Session::has('Doctor_Edited'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ Session::get('Doctor_Edited') }}
                                                </div>
                                            @endif
                                            <form action="{{ Route('Doctors.update', $doctor['id']) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group">
                                                    <label for="Name">Doctor Name</label>
                                                    <input type="text" name="name" value="{{ $doctor['name'] }}"
                                                        class="form-control" id="name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Specialist">Doctor Specialist</label>
                                                    <input type="text" name="specialist"
                                                        value="{{ $doctor['specialist'] }}" class="form-control"
                                                        id="specialist">
                                                </div>
                                                <div class="form-group">
                                                    <label for="University">University</label>
                                                    <input type="text" name="university"
                                                        value="{{ $doctor['university'] }}" class="form-control"
                                                        id="university">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Phone">phone</label>
                                                    <input type="text" name="phone" value="{{ $doctor['phone'] }}"
                                                        class="form-control" id="phone">
                                                </div>
                                                <div class="form-group">
                                                    <label for="file">Doctor Image </label>
                                                    <input type="file" name="image" class="form-control" id="image">
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
                            <div class="modal fade" id="del{{ $doctor['id'] }}" tabindex="-1"
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
                                            <form action="{{ Route('Doctors.destroy', $doctor['id']) }}"
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
                        </td>


                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div id="Pharmacies" class="tabcontent">
        <div>
            <h3>Pharmacies <span> <button type="button" class="btn btn-info btn-md" data-toggle="modal"
                        data-target="#Addpharma">Add Pharmacy</button></h3>
            <table class="table table-striped table-hover table-responsive-xl">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Pharmacy Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Modifiy</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pharms as $pharm)
                        <tr>
                            <th scope="row">{{ $pharm['id'] }}</th>
                            <td>{{ $pharm['name'] }}</td>
                            <td>{{ $pharm['address'] }}</td>
                            <td>{{ $pharm['phone'] }}</td>
                            <td>{{ $pharm['email'] }}</td>
                            <td>
                                <button type="button" class="btn btn-info btn-md" data-toggle="modal"
                                    data-target="#Drug_{{ $pharm['id'] }}">View</button>
                                <button type="button" class="btn btn-info btn-md" data-toggle="modal"
                                    data-target="#editpharma_{{ $pharm['id'] }}">Edit</button>

                                <button type="button" class="btn btn-danger btn-md" data-toggle="modal"
                                    data-target="#delpharm_{{ $pharm['id'] }}">Del</button>

                                <div class="modal fade" id="delpharm_{{ $pharm['id'] }}" tabindex="-1"
                                    aria-labelledby="" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="">Confirm Deletion</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <form action="{{ Route('DelPH', $pharm['id']) }}" method="POST">
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

                                <div class="modal fade" id="Drug_{{ $pharm['id'] }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Test Menu</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Drug Name</th>
                                                            <th scope="col">Quantity</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($pharm->drugs as $drug)
                                                            <tr>
                                                                <th scope="row">{{ $drug['id'] }}</th>
                                                                <td>{{ $drug['name'] }} </td>
                                                                <td>{{ $drug['quantity'] }} </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="editpharma_{{ $pharm['id'] }}" tabindex="-1"
                                    aria-labelledby="" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="">Edit Record</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="{{ route('phmUpdate', $pharm['id']) }}">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-group">
                                                        <label for="name">Pharmacy Name </label>
                                                        <input type="text" class="form-control" name="name"
                                                            value="{{ $pharm['name'] }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="username">Username</label>
                                                        <input type="text" class="form-control" name="username"
                                                            value="{{ $pharm['username'] }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="text" class="form-control" name="email"
                                                            value="{{ $pharm['email'] }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="address">Address</label>
                                                        <input type="text" class="form-control" name="address"
                                                            value="{{ $pharm['address'] }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="phone">Phone</label>
                                                        <input type="text" class="form-control" name="phone"
                                                            value="{{ $pharm['phone'] }}">
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
    </div>
    </div>

    </div>
    </div>
    <!----------------start----- Edit admin modal---------------------------->
    <div class="modal fade" id="editeadmin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Record</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group">
                            <label for="exampleInputPassword1">User Name</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Department</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
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
    <!----------------start----- Add admin modal---------------------------->
    <div class="modal fade" id="addadmin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Record</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group">
                            <label for="exampleInputPassword1">User Name</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Department</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!----------------end----- add admin modal---------------------------->

    <!----------------start----- add Lab modal---------------------------->
    <div class="modal fade" id="AddLab" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Record</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('Labs.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="image">Lab Image</label>
                            <input type="file" class="form-control" name="image" value="{{ old('image') }}">
                            <span class="text-danger">@error('image'){{ $message }} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Your Lab name"
                                value="{{ old('name') }}">
                            <span class="text-danger">@error('name'){{ $message }} @enderror</span>
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
                        <button type="submit" class="btn btn-primary">Save Change</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!----------------end----- add Lab modal---------------------------->

    <!----------------start----- add Doctors modal---------------------------->
    <div class="modal fade" id="AddDoctor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Record</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('Doctors.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="image">Doctor Image</label>
                            <input type="file" name="image" id="image" class="form-control"
                                value="{{ old('image') }}">
                            <span class="text-danger">@error('image'){{ $message }} @enderror</span>
                        </div>
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
                        <button type="submit" class="btn btn-primary">Save Change</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!----------------start----- add  pharma modal---------------------------->

    <div class="modal fade" id="Addpharma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Record</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('phm.create') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter full name"
                                value="{{ old('name') }}">
                            <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username"
                                placeholder="Choose a Unique Username" value="{{ old('username') }}">
                            <span class="text-danger">@error('username'){{ $message }} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter Email Address"
                                value="{{ old('email') }}">
                            <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="address" placeholder="Enter Your Address"
                                value="{{ old('address') }}">
                            <span class="text-danger">@error('address'){{ $message }} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number"
                                value="{{ old('phone') }}">
                            <span class="text-danger">@error('phone'){{ $message }} @enderror</span>
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
                        <button type="submit" class="btn btn-primary">Save Change</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    @include('includes.footer')

</body>

</html>
