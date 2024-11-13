<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link rel="stylesheet" href="{{ asset('css/admin.css') }} ">
</head>
<body>
  <div class="login">
    <div class="container">
      <img src="https://static.vecteezy.com/system/resources/previews/009/636/683/non_2x/admin-3d-illustration-icon-png.png">
      <form method="post">
        @csrf
        <label for="email">Email</label>
        <input id="email" type="email" value="{{ old('email')}}" name="email">
        @error('email') <div class="error"> {{ $message }}</div> @enderror
        <label for="password">Password</label>
        <input id="password" type="password" name="password">
        @error('password') <div class="error"> {{ $message }}</div> @enderror
        <button>Login</button>
      </form>
    </div>
  </div>
</body>
</html>