<html lang="en">
<head>
  @include('includes.header')
</head>
<body>
<section style="padding-top:60px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Add Doctor
                    </div>
                    <div class="card-body">
                        @if(Session::has('Doctor_Added'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('Doctor_Added') }}
                        </div>
                        @endif
                        <form method="POST" action="{{ route('addADoctor'); }}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Doctor Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Doctor Name">
                            </div>
                            <div class="form-group">
                                <label for="specialist">Doctor Specialist</label>
                                <input type="text" name="specialist" id="specialist" class="form-control" placeholder="Doctor Specialist">
                            </div>
                            <div class="form-group">
                                <label for="description">Doctor Description</label>
                                <input type="text" name="description" id="description" class="form-control" rows="3" placeholder="Doctor Description">
                            </div>
                            <button type="submit" class="btn btn-success">Add A Doctor</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
    @include('includes.footer')
    <script src="js/jquery-3.6.0.min.js"></script>
     <script src="js//bootstrap.min.js"></script>
     <script src="js//app.js"></script>
     <script src="js//all.min.js"></script>    
</body>
</html>