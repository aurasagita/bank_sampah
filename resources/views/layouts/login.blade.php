<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Bank Sampah</title>

  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/95c066a903.js" crossorigin="anonymous"></script>

</head>
<body>
  <section class="login d-flex">
    <div class="login-left w-50">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-6">
          <div class="header">
            <h1>Login Bank Sampah</h1>
          </div>
            <div class="login-form">
              <form action="{{url('/login')}}" method="post">
                @csrf
                <label for="email" class="form-label">Email</label>
                <input name="email" type="text" class="form-control" placeholder="Enter your email">
                <label for="password" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" placeholder="Enter your password">
                <button type="submit" class="signin">Sign In</button>
                <div class="text-center">
                  <span class="d-inline">Don't have an account? <a href="{{url('/register')}}" class="d-inline text-decoration-none">Register</a></span>
                </div>
            </div>
        </div>
      </div>
    </div>
    <div class="login-right">
      <div class="row justify-content-center align-items-center h-100">
        <img src="assets/dist/img/login3.png" alt="">
      </div>
    </div>
  </section> 
</body>
</html>