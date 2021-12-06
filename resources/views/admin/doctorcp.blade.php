<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.header')
    <title>Dashboard</title>
</head>

<body>
    <div class=" lapsBrand">
        <p><strong>Dr Suliman Moktar </strong><span class="badge bg-info">
                {{ Auth::guard('doctor')->user()->name }}</span>
            <span><a href="{{ route('doctor.logout') }}"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                <form action="{{ route('doctor.logout') }}" id="logout-form" method="post">@csrf</form>
            </span>
        </p>
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
                @foreach ($appointments as $appointment)
                    <tr>
                        <th scope="row">{{ $appointment['id'] }}</th>
                        <td>{{ $appointment['fname'] }}</td>
                        <td>{{ $appointment['lname'] }}</td>
                        <td>{{ $appointment['email'] }}</td>
                        <td>{{ $appointment['phone'] }}</td>
                        <td>{{ $appointment['address'] }}</td>
                        <td>{{ $appointment['date'] }}</td>
                        <td>{{ $appointment['gender'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @include('includes.footer')
</body>

</html>
