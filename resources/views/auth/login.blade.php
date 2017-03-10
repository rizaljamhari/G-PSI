
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>GATES-PSI | Log in</title>
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <link rel="stylesheet" href="{{URL('/bootstrap/css/bootstrap.min.css')}}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
   <link rel="stylesheet" href="{{URL('/dist/css/AdminLTE.min.css')}}">
   <link rel="stylesheet" href="{{URL('/plugins/iCheck/square/blue.css')}}">
</head>
<body class="hold-transition login-page">
   <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>GATES</b> PSI</a>
        </div>
        
        <div class="login-box-body">
            <p class="login-box-msg">Log Masuk Sistem PSI Gates</p>

        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
            <div class="col-md-12">
                <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required autofocus>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
            <div class="col-md-12">
                <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                       <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Remember Me
                    </label>
                </div>
            </div>
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div>
        </div>
    </form>

    <div class="social-auth-links text-left">
        <a href="{{ url('/password/reset') }}">Lupa Kata Laluan</a><br>
        <a href="{{ url('/register') }}" class="text-center">Daftar Akaun Baru</a>
    </div>
</div>

<script src="{{URL('/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<script src="{{URL('/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{URL('/plugins/iCheck/icheck.min.js')}}"></script>
<script>
  $(function () {
     $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
      increaseArea: '20%'
  });
 });
</script>
</body>
</html>
