<!DOCTYPE html>
<html lang="en">
<head>
@include('includes.header')
<title>Dashboard</title>
</head>
<body>
<div class="info admin">
  <p><strong>Admin</strong> Qamer Ibrhim</p>
</div>

<button id="defaultOpen" class="tablink" onclick="openPage('Adminstrator', this, 'rgba(0, 255, 234, 0.315)')" >Adminstrators</button>
<button class="tablink" onclick="openPage('Laps', this, 'rgba(0, 195, 255, 0.356)')" >Laps</button>
<button class="tablink" onclick="openPage('Doctors', this, 'rgba(0, 255, 106, 0.315)')">Doctors</button>
<button class="tablink" onclick="openPage('Drugs', this, 'rgba(43, 255, 0, 0.315)')">Drogs</button>

<div id="Adminstrator" class="tabcontent">
  <h3>Admnistrators</h3>
  <table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">User Name</th>
      <th scope="col">Password</th>
      <th scope="col">Department</th>
      <th scope="col">Modifiy</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>09075</td>
      <td>Laps</td>
       <td>  
         <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#editeadmin">Edit</button>
         <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#addadmin">Add</button>
         <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#modall">Del</button>
      </td>
    </tr>
  </tbody>
</table>
</div>
<div id="Laps" class="tabcontent">
  <h3>Laps</h3>
 <table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Lap Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Description</th>
      <th scope="col">Logo</th>
      <th scope="col">Modifiy</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Altra Lap</td>
      <td>0907557112</td>
      <td>Khrtoum uin</td>
      <td>emage alt</td>
      <td> 
      <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#editlap">Edit</button>
         <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#addlap">Add</button>
         <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#modall">Del</button>
      </td>
    </tr>
    <tr>
  </tbody>
</table>
</div>

<div id="Doctors" class="tabcontent">
  <h3>Doctors</h3>
  <table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Doctor Name</th>
      <th scope="col">Doctor Specialist</th>
      <th scope="col">University</th>
      <th scope="col">phone</th>
      <th scope="col">Doctor Description</th>
      <th scope="col">Modifiy</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Qamer Ibrahim</td>
      <td>Dental</td>
      <td>Khrtoum</td>
      <td>97887</td>
      <td>Live in sudan </td>
      <td>
        <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#editdoctors">Edit</button>
         <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#adddoctors">Add</button>
         <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#modall">Del</button>
      </td>
    </tr>
   
  </tbody>
</table>

</div>

<div id="Drugs" class="tabcontent">
  <h3>Drogs</h3>
  <table class="table table-striped table-hover">
       <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">chemical Name</th>
          <th scope="col">Generic Name</th>
          <th scope="col">Pharma Name</th>
          <th scope="col">Phamra Number</th>
          <th scope="col">Pharma Location</th>
          <th scope="col">Description</th>
          <th scope="col">Modifiy</th>
        </tr>
        </thead>
    <tr>  
      <th scope="row">1</th>
      <td>Fursmid</td>
      <td>lasix</td>
      <td>Elsmah</td>
      <td>6564</td>
      <td>atbra str</td>
      <td>.........,</td>
      <td>
      <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#editdruge">Edit</      button>
         <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#Adddruge">Add</button>
         <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#modall">Del</button>
      </td>
    </tr>
    
  </table>
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
<!----------------strat----- edit lap modal---------------------------->
<div class="modal fade" id="editlap" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <label for="exampleInputPassword1">Lap Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Phone Number</label>
              <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Description</label>
              <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Logo</label>
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
<!----------------end----- edit lap modal---------------------------->
<!----------------start----- add lap modal---------------------------->
<div class="modal fade" id="addlap" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <label for="exampleInputPassword1">Lap Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Phone Number</label>
              <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Description</label>
              <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Logo</label>
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
<!----------------end----- add lap modal---------------------------->
<!----------------start----- edit Doctors modal---------------------------->

<div class="modal fade" id="editdoctors" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit  Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">  
      <form action="">
          <div class="form-group">
            <label for="exampleInputPassword1">Doctor Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Doctor Specialist</label>
              <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">University</label>
              <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">phone</label>
              <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Doctor Description	</label>
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

<!----------------end----- edit doctors modal---------------------------->
<!----------------start----- add Doctors modal---------------------------->
<div class="modal fade" id="adddoctors" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add  Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">  
      <form action="">
          <div class="form-group">
            <label for="exampleInputPassword1">Doctor Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Doctor Specialist</label>
              <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">University</label>
              <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">phone</label>
              <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Doctor Description	</label>
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
<!----------------end-----  Add  Doctors  modal---------------------------->




<!----------------Start----- edit Druge modal---------------------------->
<div class="modal fade" id="editdruge" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit  Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">  
      <form action="">
          <div class="form-group">
            <label for="exampleInputPassword1">chemical Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Generic Name	</label>
              <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Pharma Name</label>
              <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Phamra Number	</label>
              <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Pharma Location</label>
              <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Description</label>
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
<!----------------end----- edit  Drugs modal---------------------------->
<!----------------start----- add  Drugs modal---------------------------->

<div class="modal fade" id="Adddruge" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add  Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">  
      <form action="">
          <div class="form-group">
            <label for="exampleInputPassword1">chemical Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Generic Name	</label>
              <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Pharma Name</label>
              <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Phamra Number	</label>
              <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Pharma Location</label>
              <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Description</label>
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
@include('includes.footer') 
</body>
</html>