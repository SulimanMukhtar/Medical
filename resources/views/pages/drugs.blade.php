<html lang="en">

<head>
    @section('title') {{ ' - Drugs' }} @endsection
    @include('includes.header')
</head>

<body>
    <!-----------------------------  Navbar---------------------------------------------------------------->
    <nav class="navbar navbar-expand-md navbar-light fixed-top">
        <a class="navbar-brand" href="#">
            MEDICA
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
                <li class="nav-item active">
                    <a class="nav-link" href="/Drugs">Drugs <span class="sr-only">(current)</span></a>
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
    <div class="container">
        <div class="example" >
            <input type="text" placeholder="Please Inter Your Drug Name..." name="search">
            <button onclick="showresult()" class="serchdr"><i class="fa fa-capsules"></i></button>
    </div>
      <div id="drugresult" class = "reultbox">
        <p class="lead">Did You Mean <span>Asprine?</span></p>
      <h4><span>10</span>  results found on <span>Asprine</span></h4>
      <table class="table">
  <caption>List of Results</caption>
  <tbody>
    <tr>
      <td><i class="fas fa-clinic-medical"></i><span>Carepoint</span></td>
      <td><i class="fas fa-map-marker-alt"></i>Atbra str </td>
      <td><i class="fas fa-phone-square"></i><a href="tel:0907557112">0907557112</a></td>
    </tr>
    
  </tbody>
</table>
       </div>
    </div>
    @include('includes.footer')
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js//bootstrap.min.js"></script>
    <script src="js//app.js"></script>
    <script src="js//all.min.js"></script>
</body>

        
</html>
