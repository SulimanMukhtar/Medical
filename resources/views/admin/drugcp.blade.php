<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.header')
    <title>Dashboard</title>
</head>

<body>
    <div class=" lapsBrand">
        <p><strong>Pharmacy </strong><span class="badge bg-info">{{ Auth::guard('phm')->user()->name }}</span>
            <span><a href="{{ route('phm.logout') }}"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                <form action="{{ route('phm.logout') }}" id="logout-form" method="post">@csrf</form>
            </span>
        </p>
    </div>


    <div class="container">
        <h3>Pharmacy Information</h3>
        <table class="table table-sm table-striped table-hover table-responsive-xl table-active">
            <thead>
                <tr>

                    <th scope="col">Pharma Name</th>
                    <th scope="col">Pharma location</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ Auth::guard('phm')->user()->name }}</td>
                    <td>{{ Auth::guard('phm')->user()->address }}</td>
                    <td>{{ Auth::guard('phm')->user()->email }}</td>
                    <td>{{ Auth::guard('phm')->user()->phone }}</td>
                </tr>
            </tbody>
        </table>


        <table class="table table-sm table-striped table-hover table-responsive-xl">
            <h3>Drug List <span> <button type="button" class="btn btn-info btn-md" data-toggle="modal"
                        data-target="#adddrug">Add Drug</button></h3>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Modifiy</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($drugs as $drug)
                    <tr>
                        <th scope="row">{{ $drug['id'] }}</th>
                        <td>{{ $drug['name'] }}</td>
                        <td>{{ $drug['quantity'] }}</td>
                        <td>

                            <button type="button" class="btn btn-info btn-md" data-toggle="modal"
                                data-target="#drug_edit_{{ $drug['id'] }}">Edit</ button>
                                <button type="button" class="btn btn-danger btn-md" data-toggle="modal"
                                    data-target="#del{{ $drug['id'] }}">Del</button>
                        </td>
                    </tr>

                    <div class="modal fade" id="drug_edit_{{ $drug['id'] }}" tabindex="-1"
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
                                    <form action="{{ Route('drugUpdate', $drug['id']) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="name">Name </label>
                                            <input type="text" class="form-control" name="name"
                                                value="{{ $drug['name'] }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="quantity">Quantity</label>
                                            <input type="text" class="form-control" name="quantity"
                                                value="{{ $drug['quantity'] }}">
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

                    <div class="modal fade" id="del{{ $drug['id'] }}" tabindex="-1" aria-labelledby=""
                        aria-hidden="true">
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
                                    <form action="{{ Route('drugDel', $drug['id']) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <h3>Are You Sure ?</h3>
                                        <p>You Won't Be Able To Revert This !</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
    </div>

    <!----------------Start----- edit Drug modal---------------------------->
    <div class="modal fade" id="adddrug" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Record</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ Route('Drug.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="pharma_id" value="{{ Auth::guard('phm')->user()->id }}">
                        <div class="form-group">
                            <label for="Name">Name</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity </label>
                            <input type="number" class="form-control" name="quantity">
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
    <!----------------end----- edit  Drugs modal---------------------------->
    <!----------------start----- add  Drugs modal---------------------------->

    {{-- <div class="modal fade" id="editinfo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <label for="exampleInputPassword1">Pharma Name</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">location </label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email </label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Phone Number </label>
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
    </div> --}}
    <!----------------end----- add Drug modal---------------------------->
    <!----------------Start----- edit pharma modal---------------------------->

    @include('includes.footer')
</body>

</html>
