<!DOCTYPE html>
<html lang="en">
<head>
@include('includes.header')
<title>Dashboard</title>
    <script>
        $(document).ready(function() {
          document.getElementById("defaultOpen").click();
        });
          function openPage(pageName, elmnt, color) {
          // Hide all elements with class="tabcontent" by default */
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          // Remove the background color of all tablinks/buttons
          tablinks = document.getElementsByClassName("tablink");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";
          }
          // Show the specific tab content
          document.getElementById(pageName).style.display = "block";
          // Add the specific color to the button used to open the tab content
          elmnt.style.backgroundColor = color;
        }
        // Get the element with id="defaultOpen" and click on it
    </script>
</head>
<body>
<div class="info admin">
  <p><strong>Admin</strong> Qamer Ibrhim</p>
</div>

<button class="tablink" onclick="openPage('Home', this, 'rgba(0, 255, 234, 0.315)')">Adminstrators</button>
<button class="tablink" onclick="openPage('News', this, 'rgba(0, 195, 255, 0.356)')" id="defaultOpen">Laps</button>
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
      <td> <button class = "btn1" data-bs-toggle="tooltip" data-bs-placement="left" title="edite"><i class="fas fa-edit"></i></button> <button class="btn2" data-bs-toggle="tooltip" data-bs-placement="left" title="delete"><i class="fa fa-trash"></i></button> <button class ="btn3"data-bs-toggle="tooltip" data-bs-placement="left" title="save"><i class="far fa-save"></i></button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>09090</td>
      <td>Drogs</td>
      <td> <button class = "btn1" data-bs-toggle="tooltip" data-bs-placement="top" title="edite"><i class="fas fa-edit"></i></button> <button class="btn2" data-bs-toggle="tooltip" data-bs-placement="top" title="delete"><i class="fa fa-trash"></i></button> <button class ="btn3"data-bs-toggle="tooltip" data-bs-placement="top" title="save"><i class="far fa-save"></i></button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>76778</td>
      <td>Doctors</td>
      <td> <button class = "btn1" data-bs-toggle="tooltip" data-bs-placement="top" title="edite"><i class="fas fa-edit"></i></button> <button class="btn2" data-bs-toggle="tooltip" data-bs-placement="top" title="delete"><i class="fa fa-trash"></i></button> <button class ="btn3"data-bs-toggle="tooltip" data-bs-placement="top" title="save"><i class="far fa-save"></i></button></td>
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
      <td> <button class = "btn1" data-bs-toggle="tooltip" data-bs-placement="top" title="edite"><i class="fas fa-edit"></i></button> <button class="btn2" data-bs-toggle="tooltip" data-bs-placement="top" title="delete"><i class="fa fa-trash"></i></button> <button class ="btn3"data-bs-toggle="tooltip" data-bs-placement="top" title="save"><i class="far fa-save"></i></button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <<td>Lap check</td>
      <td>0907557112</td>
      <td>Khrtoum uin</td>
      <td>emage alt</td>
      <td> <button class = "btn1" data-bs-toggle="tooltip" data-bs-placement="top" title="edite"><i class="fas fa-edit"></i></button> <button class="btn2" data-bs-toggle="tooltip" data-bs-placement="top" title="delete"><i class="fa fa-trash"></i></button> <button class ="btn3"data-bs-toggle="tooltip" data-bs-placement="top" title="save"><i class="far fa-save"></i></button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Speed lap</td>
      <td>0907557112</td>
      <td>Khrtoum uin</td>
      <td>emage alt</td>
      <td> <button class = "btn1" data-bs-toggle="tooltip" data-bs-placement="top" title="edite"><i class="fas fa-edit"></i></button> <button class="btn2" data-bs-toggle="tooltip" data-bs-placement="top" title="delete"><i class="fa fa-trash"></i></button> <button class ="btn3"data-bs-toggle="tooltip" data-bs-placement="top" title="save"><i class="far fa-save"></i></button></td>
    </tr>
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
      <td> <button class = "btn1" data-bs-toggle="tooltip" data-bs-placement="left" title="edite"><i class="fas fa-edit"></i></button> <button class="btn2" data-bs-toggle="tooltip" data-bs-placement="left" title="delete"><i class="fa fa-trash"></i></button> <button class ="btn3"data-bs-toggle="tooltip" data-bs-placement="left" title="save"><i class="far fa-save"></i></button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>mohammed sir</td>
      <td>Dental</td>
      <td>Khrtoum</td>
      <td>23456</td>
      <td>Live in sudan </td>
      <td> <button class = "btn1" data-bs-toggle="tooltip" data-bs-placement="top" title="edite"><i class="fas fa-edit"></i></button> <button class="btn2" data-bs-toggle="tooltip" data-bs-placement="top" title="delete"><i class="fa fa-trash"></i></button> <button class ="btn3"data-bs-toggle="tooltip" data-bs-placement="top" title="save"><i class="far fa-save"></i></button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Ahmed Kd</td>
      <td>Dental</td>
      <td>Khrtoum</td>
      <td>54545</td>
      <td>Live in sudan </td>
      <td> <button class = "btn1" data-bs-toggle="tooltip" data-bs-placement="top" title="edite"><i class="fas fa-edit"></i></button> <button class="btn2" data-bs-toggle="tooltip" data-bs-placement="top" title="delete"><i class="fa fa-trash"></i></button> <button class ="btn3"data-bs-toggle="tooltip" data-bs-placement="top" title="save"><i class="far fa-save"></i></button></td>
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
      <td> <button class = "btn1" data-bs-toggle="tooltip" data-bs-placement="left" title="edite"><i class="fas fa-edit"></i></button> <button class="btn2" data-bs-toggle="tooltip" data-bs-placement="left" title="delete"><i class="fa fa-trash"></i></button> <button class ="btn3"data-bs-toggle="tooltip" data-bs-placement="left" title="save"><i class="far fa-save"></i></button></td>
    </tr>
    <th scope="row">2</th>
    <td>Fursmid</td>
      <td>lasix</td>
      <td>Elsmah</td>
      <td>6564</td>
      <td>atbra str</td>
      <td>Your body needs vitamin A,</td>
      <td> <button class = "btn1" data-bs-toggle="tooltip" data-bs-placement="left" title="edite"><i class="fas fa-edit"></i></button> <button class="btn2" data-bs-toggle="tooltip" data-bs-placement="left" title="delete"><i class="fa fa-trash"></i></button> <button class ="btn3"data-bs-toggle="tooltip" data-bs-placement="left" title="save"><i class="far fa-save"></i></button></td>
    </tr>
    <th scope="row">1</th>
    <td>Fursmid</td>
      <td>lasix</td>
      <td>Elsmah</td>
      <td>6564</td>
      <td>atbra str</td>
      <td>Your body needs vitamin A,</td>
      <td> <button class = "btn1" data-bs-toggle="tooltip" data-bs-placement="left" title="edite"><i class="fas fa-edit"></i></button> <button class="btn2" data-bs-toggle="tooltip" data-bs-placement="left" title="delete"><i class="fa fa-trash"></i></button> <button class ="btn3"data-bs-toggle="tooltip" data-bs-placement="left" title="save"><i class="far fa-save"></i></button></td>
    </tr>
  </table>

</div>

</div>
@include('includes.footer')
    <script src="js/popper.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
     <script src="js//bootstrap.min.js"></script>
     <script src="js//app.js"></script>
     <script src="js//all.min.js"></script>    
</body>
</html>