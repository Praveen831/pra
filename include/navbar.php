<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">




  <title>Praveen.com</title>
  <style>
    img {
      height: 500px;
      width: auto;
      background-size: cover;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">PKP</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="contact.php">Contact us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="movie.php">Movies</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Form
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="registrationform.php">Registration Form</a></li>
              <li><a class="dropdown-item" href="/">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="/">Support</a></li>
            </ul>
          </li>

        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <div class="mx-2">
          <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
          <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#SignupModal">Sign Up</button>

        </div>
      </div>
    </div>
  </nav>


  <!--Login Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Login your Account</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <form>
            <div class="mb-3">
              <label for="email" class="form-label">UserName<span class="text-danger"> *</span></label>
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required="">

            </div>
            <div class="mb-3">
              <label for="pass" class="form-label">Password<span class="text-danger"> *</span></label>
              <input type="password" class="form-control" name="pass" id="pass" required="" minlength="8"
                maxlength="15">
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
          </form>
        </div>
        
      </div>
    </div>
  </div>

  <!--Sign Up Modal -->
  <div class="modal fade" id="SignupModal" tabindex="-1" aria-labelledby="SignupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Create a new Account</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" onsubmit="return password()">
            <div class="mb-3">
              <label for="name" class="form-label">Name<span class="text-danger"> *</span></label>
              <input type="Name" class="form-control" id="name" name="name" aria-describedby="nameHelp" required="">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address<span class="text-danger"> *</span></label>
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required="">
            </div>
            <div class="mb-3">
              <label for="pass" class="form-label">Password<span class="text-danger"> *</span></label>
              <input type="password" class="form-control" id="pass" name="pass" required="" minlength="8"
                maxlength="15" value="">
            </div>
            <div class="mb-3">
              <label for="cpass" class="form-label">Confirm Password<span class="text-danger"> *</span></label>
              <input type="password" class="form-control" id="cpass" name="cpass" required="" minlength="8"
                maxlength="15" value=""><span id="msg"></span>
            </div>

            <button type="submit" class="btn btn-primary" >Create Account</button>
          </form>

        </div>
        
      </div>
    </div>
  </div>

  <script>
    function password() {
      var p = document.getElementById("pass").value;
      var c = document.getElementById("cpass").value;


      if (p!=c)) {
        document.getElementById("msg").innerHTML = "Please enter confirm password";

        return false;
      }
    }
  </script>