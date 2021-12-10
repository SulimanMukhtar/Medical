<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.header')
    <title>Dashboard</title>
</head>

<body>
    <div class=" lapsBrand">
        <p><strong>Dr {{ Auth::guard('doctor')->user()->name }} </strong>
            <span><a href="{{ route('doctor.logout') }}"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                <form action="{{ route('doctor.logout') }}" id="logout-form" method="post">@csrf</form>
            </span>
        </p>
    </div>
    @if (Session::get('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
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
                    <th scope="col">Status</th>
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
                        @if ($appointment['status'] == 'NotCompleted')
                            <td>
                                <form method="POST" action="{{ Route('updateStatus', $appointment['id']) }}">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit">Mark As Completed</button>
                                </form>
                            </td>
                        @else
                            <td>{{ $appointment['status'] }}</td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @include('includes.footer')
</body>

</html>
