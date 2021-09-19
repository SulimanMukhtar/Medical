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
         <div class="container">
          <div class="row">
             <div class="col-4">
             <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#result"> Test Result</button><a/><a/>
             </div>
             <div class="col-4">
             <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#test-menue"> Test Menu </button><a/><a/> 
             </div>
             <div class="col-4">
             <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#vist-1"> House Visit </button><a/><a/> 
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
      <div class="container">
          <div class="row">
             <div class="col-4">
             <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#result2"> Test Result</button><a/><a/>
             </div>
             <div class="col-4">
             <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#test-menue2"> Test Menu </button><a/><a/> 
             </div>
             <div class="col-4">
             <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#vist-2"> House Visit </button><a/><a/> 
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
      <div class="container">
          <div class="row">
             <div class="col-4">
             <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#result2"> Test Result</button><a/><a/>
             </div>
             <div class="col-4">
             <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#test-menue2"> Test Menu </button><a/><a/> 
             </div>
             <div class="col-4">
             <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#vist-2"> House Visit </button><a/><a/> 
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
      <div class="container">
          <div class="row">
             <div class="col-4">
             <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#result4"> Test Result</button><a/><a/>
             </div>
             <div class="col-4">
             <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#test-menue4"> Test Menu </button><a/><a/> 
             </div>
             <div class="col-4">
             <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#vist-4"> House Visit </button><a/><a/> 
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
<!-------------------------End modal number four-------------------------->
<!-------------start--lap1------------------------------------------------->
<div class="modal fade" id="result" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
<!-------------start tests menue------------------------------------------------------------>
<div class="modal fade" id="test-menue" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <tr>
                  <th scope="row">1</th>
                  <td>Covid 19</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>liver test</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                  <td>Calcium in Urine </td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Calcium/Creatinine Ratio</td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>CASA</td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td>Mercury (Urine)</td>
                </tr>
                <tr>
                  <th scope="row">7</th>
                  <td>Drug of Abuse (Whole Profile)</td>
                </tr>
                <tr>
                  <th scope="row">8</th>
                  <td>Duffy Blood Group</td>
                </tr>
                <tr>
                  <th scope="row">9</th>
                  <td>Frozen Section</td>
                </tr>
                <tr>
                  <th scope="row">10</th>
                  <td>Melatonin (Blood)</td>
                </tr>
                
              </tbody>
            </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 
<!-------------end tests menue------------------------------------------------------------>
<!-------------strat visit menue------------------------------------------------------------>
<div class="modal fade" id="vist-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Home visit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="">
      <form action="">
          <div class="form-group">
            <label for="exampleInputPassword1">Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Address</label>
              <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Phone Number</label>
              <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          
          <div class="form-group">
              <label for="exampleInputPassword1">Fav Date</label>
              <input type="date" class="form-control" id="exampleInputPassword1">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 
<!--------------end visit modal-------------------------------------------->
<!--------------end lap1 modal-------------------------------------------->
<!-------------start--lap2------------------------------------------------->
<div class="modal fade" id="result2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
<!-------------start tests menue------------------------------------------------------------>
<div class="modal fade" id="test-menue2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <tr>
                  <th scope="row">1</th>
                  <td>Covid 20</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>liver test</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                  <td>Calcium in Urine </td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Calcium/Creatinine Ratio</td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>CASA</td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td>Mercury (Urine)</td>
                </tr>
                <tr>
                  <th scope="row">7</th>
                  <td>Drug of Abuse (Whole Profile)</td>
                </tr>
                <tr>
                  <th scope="row">8</th>
                  <td>Duffy Blood Group</td>
                </tr>
                <tr>
                  <th scope="row">9</th>
                  <td>Frozen Section</td>
                </tr>
                <tr>
                  <th scope="row">10</th>
                  <td>Melatonin (Blood)</td>
                </tr>
                
              </tbody>
            </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 
<!-------------end tests menue------------------------------------------------------------>
<!-------------strat visit menue------------------------------------------------------------>
<div class="modal fade" id="vist-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Home visit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="">
      <form action="">
          <div class="form-group">
            <label for="exampleInputPassword1">Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Address</label>
              <input type="text" class="form-control" id="exampleInputPassword1" >
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Phone Number</label>
              <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          
          <div class="form-group">
              <label for="exampleInputPassword1">Fav Date</label>
              <input type="date" class="form-control" id="exampleInputPassword1">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 
<!--------------end visit modal-------------------------------------------->
<!--------------end lap2 modal-------------------------------------------->

<!--------------start lap3 modal-------------------------------------------->

<div class="modal fade" id="result3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
<!-------------start tests menue------------------------------------------------------------>
<div class="modal fade" id="test-menue3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <tr>
                  <th scope="row">1</th>
                  <td>Covid 20</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>liver test</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                  <td>Calcium in Urine </td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Calcium/Creatinine Ratio</td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>CASA</td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td>Mercury (Urine)</td>
                </tr>
                <tr>
                  <th scope="row">7</th>
                  <td>Drug of Abuse (Whole Profile)</td>
                </tr>
                <tr>
                  <th scope="row">8</th>
                  <td>Duffy Blood Group</td>
                </tr>
                <tr>
                  <th scope="row">9</th>
                  <td>Frozen Section</td>
                </tr>
                <tr>
                  <th scope="row">10</th>
                  <td>Melatonin (Blood)</td>
                </tr>
                
              </tbody>
            </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 
<!-------------end tests menue------------------------------------------------------------>
<!-------------strat visit menue------------------------------------------------------------>
<div class="modal fade" id="vist-3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Home visit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="">
      <form action="">
          <div class="form-group">
            <label for="exampleInputPassword1">Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Address</label>
              <input type="text" class="form-control" id="exampleInputPassword1" >
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Phone Number</label>
              <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          
          <div class="form-group">
              <label for="exampleInputPassword1">Fav Date</label>
              <input type="date" class="form-control" id="exampleInputPassword1">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 
<!--------------end visit modal-------------------------------------------->
<!--------------end lap3 modal------------------------------------------->
<!---------------strat lap4 modal------------------------------------------------------->
<div class="modal fade" id="result4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="FUCK YOU">
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
<!-------------start tests menue------------------------------------------------------------>
<div class="modal fade" id="test-menue4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <tr>
                  <th scope="row">1</th>
                  <td>Covid 21</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>liver test</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                  <td>Calcium in Urine </td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Calcium/Creatinine Ratio</td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>CASA</td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td>Mercury (Urine)</td>
                </tr>
                <tr>
                  <th scope="row">7</th>
                  <td>Drug of Abuse (Whole Profile)</td>
                </tr>
                <tr>
                  <th scope="row">8</th>
                  <td>Duffy Blood Group</td>
                </tr>
                <tr>
                  <th scope="row">9</th>
                  <td>Frozen Section</td>
                </tr>
                <tr>
                  <th scope="row">10</th>
                  <td>Melatonin (Blood)</td>
                </tr>
                
              </tbody>
            </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 
<!-------------end tests menue------------------------------------------------------------>
<!-------------strat visit menue------------------------------------------------------------>
<div class="modal fade" id="vist-4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Speed Lap Home visit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="">
      <form action="">
          <div class="form-group">
            <label for="exampleInputPassword1">Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Ur Fucking Name slute">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Address</label>
              <input type="text" class="form-control" id="exampleInputPassword1" >
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Phone Number</label>
              <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          
          <div class="form-group">
              <label for="exampleInputPassword1">Fav Date</label>
              <input type="date" class="form-control" id="exampleInputPassword1">
          </div>
          <button type="submit" class="btn btn-primary"> Fucking Submit </button>
      </form>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 
<!--------------end visit modal-------------------------------------------->
<!--------------end lap4 modal-------------------------------------------->
<!-----------------end lap4 modal------------------------------------------------------>

    @include('includes.footer')
    <script src="js/jquery-3.6.0.min.js"></script>
     <script src="js//bootstrap.min.js"></script>
     <script src="js//app.js"></script>
     <script src="js//all.min.js"></script>    
</body>
</html>
