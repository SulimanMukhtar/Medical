<html lang="en">
<head>
    @section('title') {{ ' - Doctors' }} @endsection
  @include('includes.header')
</head>
<body>
    <!-----------------------------  Navbar---------------------------------------------------------------->
    <nav class="navbar navbar-expand-md navbar-light fixed-top">
      <a class="navbar-brand" href="#">
        MEDICA
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
            <a class="nav-link" href="/Pharmacies">Drogs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Labs">Labs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Search">Search</a>
          </li>
        </ul>
      </div>
    </nav>
    <!---------------------------------------------Navbar End------------------------------------------------>
 
    <div class="container cards">
      <div class="row">
        @foreach ($doctors as $doctor)
        <div class=" col-xl-3 col-md-4 col-sm-6 col-xs-12">
              <div class="card card-box" style="width: 15rem;">
                <img class="card-img-top" src="{{URL::asset('img/Dr-Mike.jpeg')}}" style="border-radius:10%;" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{ $doctor['name'] }}</h5>
                  <p class="card-text">
                  <ul>
                    <li>{{ $doctor['university'] }}</li>  
                    <li>{{ $doctor['specialist'] }}</li> 
                    <li>{{ $doctor['phone'] }}</li>                   </ul></p>
                  <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal1">Make An Appointment</button>
                </div>
              </div>
        </div>
        @endforeach
        
            
  
      </div>
   </div>
   <!----- Start Modal number one ----------------------------------------------------------->
   <!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Dr. Mike Varshavski</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">  
        <p class="lead">Welcome to Dr. Mike Varshavski Medical Center You can reserve an appointment immediately, and for any inquires contact with us  reserve through the following form Working hours daily except Saturday and Thursday from (<span class= "work-time">8:00 PM  <span class="spanTO">TO </span>11:00PM</span>)</p>
      <form>
          <div class="form-group">
          <div class="row">
              <div class="col">
              <label for="exampleInputEmail1">First Name</label>
                <input type="text " class="form-control">
              </div>
              <div class="col">
              <label for="exampleInputEmail1">First Name</label>
            <input type="text " class="form-control">
              </div>
          </div>  
            
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Phone Number</label>
            <input type="phone" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Address</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Date</label>
            <input type="date" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
              <label for="exampleFormControlSelect1">Gender</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>...</option>
                <option>Man</option>
                <option>Women</option>
                <option>Child</option>
              </select>
            </div>
          
          <button type="submit" class="btn btn-primary">Make An Appointment</button>
      </form>
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!----- End Modal number one ----------------------------------------------------------->

<!----- Start Modal number tow ----------------------------------------------------------->
<div class="modal fade" id="myModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Dr. Ahmed Varshavski</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p class="lead">Welcome to Dr. Ahmed Varshavski Medical Center You can reserve an appointment immediately, and for any inquires contact with us  reserve through the following form Working hours daily except Saturday and Thursday from (<span class= "work-time">2:00 PM  <span class="spanTO">TO </span>11:00PM</span>)</p>
      <form>
          <div class="form-group">
          <div class="row">
              <div class="col">
              <label for="exampleInputEmail1">First Name</label>
                <input type="text " class="form-control">
              </div>
              <div class="col">
              <label for="exampleInputEmail1">First Name</label>
            <input type="text " class="form-control">
              </div>
          </div>  
            
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Phone Number</label>
            <input type="phone" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Address</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Date</label>
            <input type="date" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
              <label for="exampleFormControlSelect1">Gender</label>
              <select class="form-control" id="exampleFormControlSelect1">
              <option>...</option>
                <option>Man</option>
                <option>Women</option>
                <option>Child</option>
              </select>
            </div>
          
          <button type="submit" class="btn btn-primary">Make An Appointment</button>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!----- End Modal number tow ----------------------------------------------------------->
<!----- Start Modal number three ----------------------------------------------------------->
<div class="modal fade" id="myModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Dr. Kalid Varshavski</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p class="lead">Welcome to Dr. Mike khali Medical Center You can reserve an appointment immediately, and for any inquires contact with us  reserve through the following form Working hours daily except Saturday and Thursday from (<span class= "work-time">4:00 PM  <span class="spanTO">TO </span>11:00PM</span>)</p>
      <form>
          <div class="form-group">
          <div class="row">
              <div class="col">
              <label for="exampleInputEmail1">First Name</label>
                <input type="text " class="form-control">
              </div>
              <div class="col">
              <label for="exampleInputEmail1">First Name</label>
            <input type="text " class="form-control">
              </div>
          </div>  
            
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Phone Number</label>
            <input type="phone" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Address</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Date</label>
            <input type="date" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
              <label for="exampleFormControlSelect1">Gender</label>
              <select class="form-control" id="exampleFormControlSelect1">
              <option>...</option>
                <option>Man</option>
                <option>Women</option>
                <option>Child</option>
              </select>
            </div>
          
          <button type="submit" class="btn btn-primary">Make An Appointment</button>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!----- End Modal number three ----------------------------------------------------------->
<!----- Start Modal number four ----------------------------------------------------------->
<div class="modal fade" id="myModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Dr. Qamer Varshavski</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p class="lead">Welcome to Dr. Mike Qamer Medical Center You can reserve an appointment immediately, and for any inquires contact with us  reserve through the following form :<br> Working hours daily except Saturday and Thursday from (<span class= "work-time">7:00 PM  <span class="spanTO">TO </span>11:00PM</span>)</p>
      <form>
          <div class="form-group">
          <div class="row">
              <div class="col">
              <label for="exampleInputEmail1">First Name</label>
                <input type="text " class="form-control">
              </div>
              <div class="col">
              <label for="exampleInputEmail1">First Name</label>
            <input type="text " class="form-control">
              </div>
          </div>  
            
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Phone Number</label>
            <input type="phone" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Address</label>
              <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Date</label>
            <input type="date" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
              <label for="exampleFormControlSelect1">Gender</label>
              <select class="form-control" id="exampleFormControlSelect1">
              <option>...</option>
                <option>Man</option>
                <option>Women</option>
                <option>Child</option>
              </select>
            </div>
          
          <button type="submit" class="btn btn-primary">Make An Appointment</button>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!----- End Modal number four ----------------------------------------------------------->



    @include('includes.footer')
    <script src="js/jquery-3.6.0.min.js"></script>
     <script src="js//bootstrap.min.js"></script>
     <script src="js//app.js"></script>
     <script src="js//all.min.js"></script>    
</body>
</html>