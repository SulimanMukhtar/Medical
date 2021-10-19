<!DOCTYPE html>
<html lang="en">
<head>
@include('includes.header')
<title>Dashboard</title>
    <script>
        
    </script>
</head>
<body>
<div class=" lapsBrand">
  <p><strong>Altra Laps </strong><span class = "badge bg-info">Qamer Ibrhim</span> </p>
</div>
<div class="container">
<div class="Resulteadd">
<p class="lead resultetitle">Add Paitint Result</p>
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
      <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
      <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Upload</button>
      </div>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
</div>
</body>
@include('includes.footer')
    <script src="js/popper.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
     <script src="js//bootstrap.min.js"></script>
     <script src="js//app.js"></script>
     <script src="js//all.min.js"></script>    
</body>
</html>