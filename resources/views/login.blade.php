<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Samchar Sagar</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('assets/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/blue.css') }}">


</head>

<body class="login-page">
    <div class="login-box">
        <div class="login-logo">
            <img src="{{ url('assets/img/samachar-sagar-high-resolution-logo-black-transparent.png') }}" width="350px;">
        </div><!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <form action="{{url('login')}}" method="post">
                @csrf
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Email" name='email'>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name='password'>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row ">

                    <div class="col-md-6 d-flex mx-auto ">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div><!-- /.col -->
                </div>
            </form>



        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->


    <script src="{{ url('assets/js/jQuery-2.1.4.min.js') }}"></script>
    <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>

</body>

</html>
