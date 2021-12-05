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
                    <th scope="col">Modifiy</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Heth Care</td>
                    <td>Mahala</td>
                    <td>Gameribrahim9</td>
                    <td>0907557112</td>
                    <td>

                        <button type="button" class="btn btn-info btn-md" data-toggle="modal"
                            data-target="#editinfo">Edit</ button>
                            <button type="button" class="btn btn-info btn-md" data-toggle="modal"
                                data-target="#del">Del</button>
                    </td>
                </tr>
            </tbody>
        </table>


        <table class="table table-sm table-striped table-hover table-responsive-xl">
            <h3>Drug List <span> <button type="button" class="btn btn-info btn-md" data-toggle="modal"
                        data-target="#adddrug">Add Druge</button></h3>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Chenric Name</th>
                    <th scope="col">... Name</th>
                    <th scope="col">Modifiy</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Lazix</td>
                    <td>Paracitmol</td>
                    <td>

                        <button type="button" class="btn btn-info btn-md" data-toggle="modal"
                            data-target="#editdrug">Edit</ button>
                            <button type="button" class="btn btn-info btn-md" data-toggle="modal"
                                data-target="#del">Del</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!----------------Start----- edit Druge modal---------------------------->
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
                        <input type="hidden" name="pharma_id" id="pharma_id">
                        <div class="form-group">
                            <label for="Generic">Generic Name </label>
                            <input type="text" class="form-control" name="generic" id="generic">
                        </div>
                        <div class="form-group">
                            <label for="Name">Name</label>
                            <input type="text" class="form-control" name="name" id="name">
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

    <div class="modal fade" id="editinfo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    </div>
    <!----------------end----- add Druge modal---------------------------->
    <!----------------Start----- edit pharma modal---------------------------->
    <div class="modal fade" id="editdrug" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <label for="exampleInputPassword1">Generic Name </label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">.... Name</label>
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
    @include('includes.footer')
</body>

</html>
