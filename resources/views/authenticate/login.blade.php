<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/login.css') }}">
  <title>Login Form</title>
</head>
<body>
    <div class="container-fluid">
      <div class="content">
          @if(Session::get('fail'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <span> {{ Session::get('fail') }} </span>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif
        <img src="{{ asset('assets/img/login.png') }}">
        <h1 class="text-white">FORM LOGIN</h1>
        <p class="text-white">Please sign in to get access</p>

        <form class="text-left" method="post" action="{{ url('/loginAction') }}">
        @csrf
          <div class="form-group">
            <label for="email" class="text-white">Email address</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" aria-describedby="validationServer03Feedback" id="email" name="email" placeholder="Enter Email Address" value="{{ old('email') }}">
            @error('email')
            <div id="validationServer03Feedback" class="invalid-feedback "> {{ $message }} </div>
            @enderror
            
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="password" class="text-white">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter Password" name="password" value="{{ old('password') }}">
                @error('password')
                <div id="validationServer03Feedback" class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col d-flex flex-row-reverse">
              <a class="link text-decoration-none text-white" href="#" target="_self">Forgot password ?</a>
            </div>
          </div>

          <div class="row text-center mt-3">
            <div class="col-md-12">
              <input type="submit" value="Login"/>
            </div>
          </div>

        </form>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/fontawesome/js/fontawesome.min.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>