<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | General Form Elements</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{asset('new/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('new/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('new/bower_components/Ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('new/dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{asset('new/dist/css/skins/_all-skins.min.css')}}">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<body class="sidebar-dark">
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
        <div class="row">
            <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
                <div class="card col-lg-4 mx-auto">
                    <div class="card-body px-5 py-5">
                        <h3 class="card-title text-left mb-3">Register Page</h3>

                        {{--session create & alert--}}

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if(session()->has('message'))
                            <div class="alert alert-{{ session('type') }}">
                                {{ session('message') }}
                            </div>
                        @endif

                        {{--carefully see this .....--}}
                        <form action="{{ route('register') }}" method="post" class="form form-horizontal">
                            @csrf
                            <div class="form-group">
                                <label for="full_name">Full Name</label>
                                <input name="full_name" id="full_name" type="text" class="form-control"
                                       placeholder="Enter full name" value="{{ old('full_name') }}">
                            </div>

                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input name="email" id="email" type="email" class="form-control"
                                       placeholder="Enter email"
                                       value="{{ old('email') }}">
                            </div>

                            <div class="form-group">
                                <label for="phone_number">Phone Number</label>
                                <input name="phone_number" id="phone_number" type="text" class="form-control"
                                       placeholder="Enter phone number" value="{{ old('phone_number') }}">
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input name="password" id="password" type="password" class="form-control"
                                       placeholder="Enter password">
                            </div>

                            <div class="form-group">
                                <label for="confirm_password">Confirm Password</label>
                                <input name="password_confirmation" id="confirm_password" type="password"
                                       class="form-control" placeholder="Enter password again">
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">
                                Register
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@csrf
</body>



<script src="{{asset('new/bower_components/jquery/dist/jquery.min.js')}}"></script>

<script src="{{asset('new/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<script src="{{asset('new/bower_components/fastclick/lib/fastclick.js')}}"></script>

<script src="{{asset('new/dist/js/adminlte.min.js')}}"></script>

<script src="{{asset('new/dist/js/demo.js')}}"></script>
</body>
</html>
