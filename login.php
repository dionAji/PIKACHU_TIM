<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Menu Log In</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/floating-labels/">

    

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    
    <link href="css/floating-labels.css" rel="stylesheet">
  </head>
  <body>
    
<form class="form-signin" method="POST" action="home.php">
  <div class="text-center mb-4">
    <img class="mb-4" src="img/user.png" alt="" width="110" height="72">
    <h1 class="h3 mb-3 font-weight-normal">log in</h1>
    <p>Masukan Email Dan Password Anda</p>
  </div>
<div class="form-label-group">
    <div>Log in sebagai :</div>
    <select class="form-control" name="level">
    <option value="Admin">Admin</option>
    <option value="User">User</option>
    </select>
  </div>
  <div class="form-label-group">
    <input type="text" name="username"  class="form-control" placeholder="Masukan email" required autofocus>
    <label >Masukan email</label>
  </div>

  <div class="form-label-group">
    <input type="password" name="password" class="form-control"  placeholder="Password" required>
    <label >Password</label>
  </div>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted text-center">&copy;Halaman Log in sumur ember 2020/2021</p>
</form>


    
  </body>
</html>
