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

<button id="defaultOpen" class="tablink" onclick="openPage('Home', this, 'rgba(0, 255, 234, 0.315)')" >Adminstrators</button>
<button class="tablink" onclick="openPage('News', this, 'rgba(0, 195, 255, 0.356)')" >Laps</button>
<button class="tablink" onclick="openPage('Contact', this, 'rgba(0, 255, 106, 0.315)')">Doctors</button>
<button class="tablink" onclick="openPage('About', this, 'rgba(43, 255, 0, 0.315)')">Drogs</button>

<div id="Home" class="tabcontent">
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
         <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#modall">Edit</button>
         <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#modall">Add</button>
         <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#modall">Del</button>
      </td>
    </tr>
  </tbody>
</table>
</div>
<div id="News" class="tabcontent">
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
      <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#modall">Edit</button>
         <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#modall">Add</button>
         <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#modall">Del</button>
      </td>
    </tr>
    <tr>
  </tbody>
</table>
</div>

<div id="Contact" class="tabcontent">
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
        <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#modall">Edit</button>
         <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#modall">Add</button>
         <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#modall">Del</button>
      </td>
    </tr>
   
  </tbody>
</table>

</div>

<div id="About" class="tabcontent">
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
      <td>Your body needs vitamin A,</td>
      <td>
      <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#modall">Edit</      button>
         <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#modall">Add</button>
         <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#modall">Del</button>
      </td>
    </tr>
    
  </table>
</div>
</div>
<div class="modal fade" id="modall" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">  
        ..........
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