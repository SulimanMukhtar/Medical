<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctor Register</title>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4" style="margin-top: 45px;">
                <h4>Doctor Register</h4>
                <hr>
                <form action="{{ route('Doctors.store') }}" method="post" autocomplete="off"
                    enctype="multipart/form-data">
                    @if (Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif

                    @csrf
                    <div class="form-group">
                        <label for="image">Doctor Image</label>
                        <input type="file" name="image" id="image" class="form-control" value="{{ old('image') }}">
                        <span class="text-danger">@error('image'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Your Name"
                            value="{{ old('name') }}">
                        <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="specialist">Specialist</label>
                        <input type="text" class="form-control" name="specialist" placeholder="Enter Your Specialist"
                            value="{{ old('specialist') }}">
                        <span class="text-danger">@error('specialist'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="university">University</label>
                        <input type="text" name="university" id="university" class="form-control"
                            placeholder="Doctor University" value="{{ old('university') }}">
                        <span class="text-danger">@error('university'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter Email Address"
                            value="{{ old('email') }}">
                        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Choose a Unique Username"
                            value="{{ old('username') }}">
                        <span class="text-danger">@error('username'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="phone" class="form-control" name="phone" placeholder="Enter Your Phone"
                            value="{{ old('phone') }}">
                        <span class="text-danger">@error('phone'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Enter Your Address"
                            value="{{ old('address') }}">
                        <span class="text-danger">@error('address'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter Password"
                            value="{{ old('password') }}">
                        <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="cpassword">Confirm Password</label>
                        <input type="password" class="form-control" name="cpassword"
                            placeholder="Confirm Your Password" value="{{ old('cpassword') }}">
                        <span class="text-danger">@error('cpassword'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                    <br>
                    <a href="{{ route('doctor.login') }}">I already have an account</a>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
