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
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
            <a class="nav-link" href="/Pharmacies">Drogs</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/Labs">Labs  <span class="sr-only">(current)</span></a>
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
        <div class=" col-xl-3 col-md-4 col-sm-6 col-xs-12">
              <div class="card card-box" style="width: 15rem;">
                <img class="card-img-top" src="{{URL::asset('img/lap2.jpeg')}}" style="border-radius:10%;" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Altra Lap</h5>
                  <p class="card-text">
                  <ul>
                    <li>University Of Russia</li>
                    <li>Health And A Wareness</li>
                  </ul></p>
                  <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#lap1">  Altra Lap Patient Services</button><a/>
                </div>
              </div>
        </div>
        <div class=" col-xl-3 col-md-4 col-sm-6 col-xs-12 ">
              <div class="card card-box" style="width: 15rem;">
                <img class="card-img-top" src="{{URL::asset('img/lap2.jpeg')}}" style="border-radius:10%;" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Lap Cheak</h5>
                  <p class="card-text">
                  <ul>
                    <li>University Of Russia</li>
                    <li>Health And A Wareness</li>
                  </ul></p>
                  <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#lap2">LapCheck Patient Services</button><a/>
                </div>
              </div>
        </div>
        <div class=" col-xl-3 col-md-4 col-sm-6 col-xs-12">
             <div class="card card-box" style="width: 15rem;">
                <img class="card-img-top " src="{{URL::asset('img/lap2.jpeg')}}" style="border-radius:10%;" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Ferrero Lap</h5>
                  <p class="card-text">
                  <ul>
                    <li>University Of Russia</li>
                    <li>Health And A Wareness</li>
                  </ul></p>
                  <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#lap3"> Ferrero Patient Services</button><a/>
                </div>
              </div>
        </div>
        <div class=" col-xl-3 col-md-4 col-sm-6 col-xs-12 ">
             <div class="card card-box" style="width: 15rem;">
                <img class="card-img-top" src="{{URL::asset('img/lap2.jpeg')}}" style="border-radius:10%;" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Speed Laps</h5>
                  <p class="card-text">
                  <ul>
                    <li>University Of Russia</li>
                    <li>Health And A Wareness</li>
                  </ul></p>
                  <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#lap4"> Speed Patient Services</button><a/><a/>
                </div>
              </div>
        </div>
        
      </div>
   </div>
     <!----- Start Modal number one ----------------------------------------------------------->
   <!-- Modal -->
<div class="modal fade" id="lap1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Altra Lap Patient Services</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">  
        
         ......
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!----- End Modal number one ----------------------------------------------------------->

<!----- Start Modal number tow ----------------------------------------------------------->
<div class="modal fade" id="lap2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">LapCheck Patient Services</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      .....
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!----- End Modal number tow ----------------------------------------------------------->
<!----- Start Modal number three ----------------------------------------------------------->
<div class="modal fade" id="lap3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ferrero Patient Services</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     ....
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!----- End Modal number three ----------------------------------------------------------->
<!----- Start Modal number four ----------------------------------------------------------->
<div class="modal fade" id="lap4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Speed Lap Patient Services</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      ....
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 
    @include('includes.footer')
    <script src="js/jquery-3.6.0.min.js"></script>
     <script src="js//bootstrap.min.js"></script>
     <script src="js//app.js"></script>
     <script src="js//all.min.js"></script>    
</body>
</html>