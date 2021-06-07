<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <script src="{{asset('//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js')}}"></script>
  <link href="{{asset('//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css')}}" rel="stylesheet" id="bootstrap-css">
  <script src="{{asset('//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js')}}"></script>
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <meta charset="utf-8">
  <title> login</title>
</head>

<body>

  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->

      <div class="fadeIn first mt-5">
      </div>

      <!-- Login Form -->
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <input type="text" id="name" class="fadeIn second" placeholder="User Name" name="name">
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="password" id="password" class="fadeIn third" placeholder="Password" name="password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="submit" class="fadeIn fourth" value="Log In">
      </form>

    </div>
  </div>
</body>

</html>
