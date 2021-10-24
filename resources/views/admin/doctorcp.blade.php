<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.header')
    <title>Dashboard</title>
</head>
<body>
  <div class=" lapsBrand">
      <p><strong>Dr Suliman Moktar </strong><span class="badge bg-info">Qamer Ibrhim</span> </p>
  </div>
  <h3>Appointments</h3>
  <div class="container-xl">
  <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">FName</th>
                    <th scope="col">LName</th>
                    <th scope="col">Email</th>
                    <th scope="col">PhoneN</th>
                    <th scope="col">Address</th>
                    <th scope="col">Date</th>
                    <th scope="col">Gender</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Gamer</td>
                    <td>Ibrahim</td>
                    <td>Gameribrahim9</td>
                    <td>0907557112</td>
                    <td>Khrtoum</td>
                    <td>fri/24/10</td>
                    <td>Male</td>
                </tr>

            </tbody>
        </table>
  </div>
  @include('includes.footer')
</body>
</html>
