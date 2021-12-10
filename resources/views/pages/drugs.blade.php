<html lang="en">

<head>
    @section('title') {{ ' - Drugs' }} @endsection
    @include('includes.header')
</head>

<body>
    <!-----------------------------  Navbar---------------------------------------------------------------->
    <nav class="navbar navbar-expand-md navbar-light fixed-top">
        <a class="navbar-brand" href="#">
            <i class="fas fa-capsules"></i> MEDICA
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
            </ul>
        </div>
    </nav>
    <!---------------------------------------------Navbar End------------------------------------------------>
    <div class="container">
        <form method="GET" action="{{ url('/Drugs/Search') }}">
            <div class="example">
                <input type="text" placeholder="Please Inter Your Drug Name..." name="query"
                    value="{{ request()->input('query') }}">
                <span class="text-danger">@error('query'){{ $message }} @enderror</span>
                <button><i class="fa fa-capsules"></i></button>
            </div>
        </form>

        @if (isset($attempts))
            <div id="" class="reultbox">
                @if ($attempts->count() >= 1 && $drugs->count() == 0)

                    <p class="lead">Did You Mean
                        @foreach ($attempts as $attempt)
                            @if ($attempts->count() < 2)
                                <span>
                                    <a
                                        href="{{ url('/Drugs/Search?query=' . $attempt->name) }}">{{ $attempt->name }}</a>
                                </span>
                            @else
                                <span>
                                    <a
                                        href="{{ url('/Drugs/Search?query=' . $attempt->name) }}">{{ $attempt->name }}</a>
                                </span>
                            @endif
                        @endforeach
                    </p>
                @endif
                @if (isset($pharmacies))

                    @if ($pharmacies->count() >= 1 && $drugs->count() > 0)
                        {{-- no exact drugs found --}}
                        <h4><span>{{ count($pharmacies) }}</span> results found for
                            <span></span>
                        </h4>
                        <table class="table">
                            {{-- <caption>List of Results</caption> --}}
                            <tbody>
                                {{-- @if ($pharmacies->count() > 0) --}}
                                @foreach ($pharmacies as $pharmacy)
                                    <tr>
                                        <td><i class="fas fa-clinic-medical"></i><span>{{ $pharmacy['name'] }}</span>
                                        </td>
                                        <td><i class="fas fa-map-marker-alt"></i><a href="{{ $pharmacy['link'] }}">
                                                {{ $pharmacy['address'] }}</a></td>
                                        <td><i class="fas fa-phone-square"></i><a
                                                href="tel:{{ $pharmacy['phone'] }}">{{ $pharmacy['phone'] }}</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else



                                <tr>
                                    <td>No result found!</td>
                                </tr>
                                {{-- @endif --}}
                    @endif
            </div>
            </tbody>
            </table>

            <div class="pagination-block">
                {{-- {{ $pharmacies->appends(request()->input())->links('layouts.pagination') }} --}}
            </div>

        @endif
        @endif
    </div>
    @include('includes.footer')
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js//bootstrap.min.js"></script>
    <script src="js//app.js"></script>
    <script src="js//all.min.js"></script>
</body>


</html>
