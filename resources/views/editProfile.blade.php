
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
    <form class="form-signin" method="POST" action="{{ route('user.update') }}" >
      {{ csrf_field() }}
      <h1 class="h3 mb-3 font-weight-normal">Edit Profile</h1>
      <label for="inputFirstName" class="sr-only">First Name</label>
      <input type="text" name="FirstName" id="inputFirstName" class="form-control {{ $errors->has('FirstName')? 'is-invalid' : '' }}" placeholder="First Name" value="{{ old('FirstName') }}" required autofocus>
      <?php if ($errors->has('FirstName')): ?>
          <div class="">
              {{ $errors->first('FirstName') }}
          </div>
      <?php endif; ?>

      <label for="inputLastName" class="sr-only">Last Name</label>
      <input type="text" name="LastName" value="{{ old('LastName') }}" id="inputLastName" class="form-control {{ $errors->has('LastName')? 'is-invalid' : '' }}" placeholder="Last Name" required >
      <?php if ($errors->has('LastName')): ?>
          <div class="">
              {{ $errors->first('LastName') }}
          </div>
      <?php endif; ?>

      <label for="inputInstitutionName" class="sr-only">Institution Name</label>
      <input type="text" name="InstitutionName" value="{{ old('InstitutionName') }}" id="inputInstitutionName" class="form-control {{ $errors->has('InstitutionName')? 'is-invalid' : '' }}" placeholder="Institution Name" required >
      <?php if ($errors->has('InstitutionName')): ?>
          <div class="">
              {{ $errors->first('InstitutionName') }}
          </div>
      <?php endif; ?>

      <label for="inputIdentityNumber" class="sr-only">Identity Number</label>
      <input type="text" name="IdentityNumber" value="{{ old('IdentityNumber') }}" id="inputIdentityNumber" class="form-control {{ $errors->has('IdentityNumber')? 'is-invalid' : '' }}" placeholder="Identity Number" required >
      <?php if ($errors->has('IdentityNumber')): ?>
          <div class="">
              {{ $errors->first('IdentityNumber') }}
          </div>
      <?php endif; ?>

      <label for="inputPhoneNumber" class="sr-only">Phone Number</label>
      <input type="text" name="PhoneNumber" value="{{ old('PhoneNumber') }}" id="inputPhoneNumber" class="form-control {{ $errors->has('PhoneNumber')? 'is-invalid' : '' }}" placeholder="Phone Number" required >
      <?php if ($errors->has('PhoneNumber')): ?>
          <div class="">
              {{ $errors->first('PhoneNumber') }}
          </div>
      <?php endif; ?>

      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="EmailAddress" value="{{ old('EmailAddress') }}" id="inputEmail" class="form-control {{ $errors->has('EmailAddress')? 'is-invalid' : '' }}" placeholder="Email address" required >
      <?php if ($errors->has('EmailAddress')): ?>
          <div class="">
              {{ $errors->first('EmailAddress') }}
          </div>
      <?php endif; ?>

      <label for="inputAddress" class="sr-only">Address</label>
      <input type="text" name="Address" value="{{ old('Address') }}" id="inputAddress" class="form-control {{ $errors->has('Address')? 'is-invalid' : '' }}" placeholder="Address" required >
      <?php if ($errors->has('Address')): ?>
          <div class="">
              {{ $errors->first('Address') }}
          </div>
      <?php endif; ?>

      <label for="inputUsername" class="sr-only">Username</label>
      <input type="text" name="Username" value="{{ old('Username') }}" id="inputUsername" class="form-control {{ $errors->has('Username')? 'is-invalid' : '' }}" placeholder="Username" required >
      <?php if ($errors->has('Username')): ?>
          <div class="">
              {{ $errors->first('Username') }}
          </div>
      <?php endif; ?>

      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="Password" id="inputPassword" class="form-control {{ $errors->has('Password')? 'is-invalid' : '' }}" placeholder="Password" required>
      <?php if ($errors->has('Password')): ?>
          <div class="">
              {{ $errors->first('Password') }}
          </div>
      <?php endif; ?>

      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="Password_confirmation" id="inputPassword_confirmation" class="form-control {{ $errors->has('Password_confirmation')? 'is-invalid' : '' }}" placeholder="Password Confirmation" required>
      <?php if ($errors->has('Password_confirmation')): ?>
          <div class="">
              {{ $errors->first('Password_confirmation') }}
          </div>
      <?php endif; ?>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Edited</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>

</html>