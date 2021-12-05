<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.header')
    <title>Dashboard</title>
</head>

<body>
    <div class=" lapsBrand">
        <p><strong>Altra Laps </strong><span class="badge bg-info">
                {{ Auth::guard('labm')->user()->lname }}</span>
            <span><a href="{{ route('labm.logout') }}"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                <form action="{{ route('labm.logout') }}" id="logout-form" method="post">@csrf</form>
            </span>
        </p>
    </div>
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
                                <input type="text" id="fname" name="firstname" placeholder="Patint Name..">
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
            <h3>Home Visit</h3>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Patint Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Test Name</th>
                        <th scope="col">Fav Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Omdurman</td>
                        <td>Covid 19</td>
                        <td>14/ 10/</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <section class="testmenue container">
        <h3>Test Menue <span> <button type="button" class="btn btn-info btn-md" data-toggle="modal"
                    data-target="#addtest">Add Test</button></span> </h3>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Test Name</th>
                    <th scope="col">Modifiy</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Calcium in Urine</td>
                    <td>
                        <button type="button" class="btn btn-info btn-md" data-toggle="modal"
                            data-target="#edittest">Edit</ button>
                            <button type="button" class="btn btn-info btn-md" data-toggle="modal"
                                data-target="#del">Del</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
    <!----------------start----- edite test modal---------------------------->
    <div class="modal fade" id="edittest" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <label for="exampleInputPassword1">Test Name</label>
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
    <!----------------end----- edite test modal---------------------------->
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
                    <form action="">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Test Name</label>
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
