<?php
session_start();
if (isset($_SESSION["autorizado"])) {
  header('Location: home.php');
  exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
  integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body class="bg-light">
  <div class="container">
    <div class="row align-items-center g-lg-5 py-5" style="min-height: 100vh">
      <div class="col-lg-7 text-center text-lg-start">
        <a href="home.php"><img src="https://cdn.pixabay.com/photo/2016/04/01/10/11/avatar-1299805_960_720.png" alt="avatar"
          class="img-fluid rounded py-5" width="300"></a>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form action="session.php" method="post" class="p-4 p-md-5 border rounded-3 bg-white">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="loginEmail" class="form-control" id="exampleInputEmail1"
              aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember me</label>
          </div>
          <button type="submit" class="btn btn-primary w-100">Submit</button>
          <hr class="my-4">
          <a href="home.php">View login credentials</a>
        </form>
      </div>
    </div>
  </div>

</body>

</html>