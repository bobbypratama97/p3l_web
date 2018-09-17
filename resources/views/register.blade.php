
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="POST" action="{{ route('register') }}">
      {{ csrf_field() }}
      <h1 class="h3 mb-3 font-weight-normal">Please Register</h1>
      <label for="inputFIrstName" class="sr-only">First Name</label>
      <input type="text" name="firstName" id="inputFIrstName" class="form-control {{ $errors->has('firstName')? 'is-invalid' : '' }}" placeholder="First Name" value="{{ old('firstName') }}" required autofocus>
      <?php if ($errors->has('firstName')): ?>
          <div class="">
              {{ $errors->first('firstName') }}
          </div>
      <?php endif; ?>

      <label for="inputLastName" class="sr-only">Last Name</label>
      <input type="text" name="lastName" value="{{ old('lastName') }}" id="inputLastName" class="form-control {{ $errors->has('lastName')? 'is-invalid' : '' }}" placeholder="Last Name" required >
      <?php if ($errors->has('lastName')): ?>
          <div class="">
              {{ $errors->first('lastName') }}
          </div>
      <?php endif; ?>

      <label for="inputInstitutionName" class="sr-only">Institution Name</label>
      <input type="text" name="institutionName" value="{{ old('institutionName') }}" id="inputInstitutionName" class="form-control {{ $errors->has('institutionName')? 'is-invalid' : '' }}" placeholder="Institution Name" required >
      <?php if ($errors->has('institutionName')): ?>
          <div class="">
              {{ $errors->first('institutionName') }}
          </div>
      <?php endif; ?>

      <label for="inputIdentityNumber" class="sr-only">Identity Number</label>
      <input type="text" name="identityNumber" value="{{ old('identityNumber') }}" id="inputIdentityNumber" class="form-control {{ $errors->has('identityNumber')? 'is-invalid' : '' }}" placeholder="Identity Number" required >
      <?php if ($errors->has('identityNumber')): ?>
          <div class="">
              {{ $errors->first('identityNumber') }}
          </div>
      <?php endif; ?>

      <label for="inputPhoneNumber" class="sr-only">Phone Number</label>
      <input type="text" name="phoneNumber" value="{{ old('phoneNumber') }}" id="inputPhoneNumber" class="form-control {{ $errors->has('phoneNumber')? 'is-invalid' : '' }}" placeholder="Phone Number" required >
      <?php if ($errors->has('phoneNumber')): ?>
          <div class="">
              {{ $errors->first('phoneNumber') }}
          </div>
      <?php endif; ?>

      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="email" value="{{ old('email') }}" id="inputEmail" class="form-control {{ $errors->has('email')? 'is-invalid' : '' }}" placeholder="Email address" required >
      <?php if ($errors->has('email')): ?>
          <div class="">
              {{ $errors->first('email') }}
          </div>
      <?php endif; ?>

      <label for="inputAddress" class="sr-only">Address</label>
      <input type="text" name="address" value="{{ old('address') }}" id="inputAddress" class="form-control {{ $errors->has('address')? 'is-invalid' : '' }}" placeholder="Address" required >
      <?php if ($errors->has('address')): ?>
          <div class="">
              {{ $errors->first('address') }}
          </div>
      <?php endif; ?>

      <label for="inputUsername" class="sr-only">Username</label>
      <input type="text" name="username" value="{{ old('username') }}" id="inputUsername" class="form-control {{ $errors->has('username')? 'is-invalid' : '' }}" placeholder="Username" required >
      <?php if ($errors->has('username')): ?>
          <div class="">
              {{ $errors->first('username') }}
          </div>
      <?php endif; ?>

      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control {{ $errors->has('password')? 'is-invalid' : '' }}" placeholder="Password" required>
      <?php if ($errors->has('password')): ?>
          <div class="">
              {{ $errors->first('password') }}
          </div>
      <?php endif; ?>

      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password_confirmation" id="inputPassword_confirmation" class="form-control {{ $errors->has('password_confirmation')? 'is-invalid' : '' }}" placeholder="Password Confirmation" required>
      <?php if ($errors->has('ipassword_confirmation')): ?>
          <div class="">
              {{ $errors->first('password_confirmation') }}
          </div>
      <?php endif; ?>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>
