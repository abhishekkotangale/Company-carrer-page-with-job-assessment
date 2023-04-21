<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <style>
      .navbar-brand{
        font-weight: 600;
        color: white;
      }

      .brand-name{
          font-size: 20px;
          padding-left: 10px;
          border-bottom: 4px solid #6ab04c;
      }

      .navbar-brand:hover{
        color: green;
      }

      .logo{
          padding-right: 6px;
      }

      .nav-item a{
        text-decoration:none;
          color: white;
          
      }

      .nav-item a:hover{
          color: rgb(93, 214, 93);
          border-bottom: 2px solid #6ab04c;
      }

      footer{
    background-color: black;
    color: white;
    padding-top: 15px;
    padding-bottom: 5px;
}

    </style>

    <title>Landing Page</title>
  </head>
  <body>
  <header class="header">
        <nav class="container-fluid navbar color navbar-expand-lg" style=" background-color: #000;">
            <div class="container">
              <a class="navbar-brand"><i class="fas fa-crown"></i><span class="brand-name">Job Jeevan</span></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="authentication/adminlogin.php"><i class="fas fa-sign-in-alt logo"></i>Admin Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="authentication/login.php"><i class="fas fa-sign-in-alt logo"></i>Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="authentication/signup.php"><i class="fas fa-user-plus logo"></i>SignUp</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>


          
    

    
        <main>
            <div class="background-image-company">
              <center>
                <div class="inner-banner-image">
                  <div class="banner-content">
                      <h1>To view Various Job</h1>
                      <h3 class="text-white">Please Register Yourself</h3>
                      <a href="authentication/login.php" class="button">Login</a>
                      <a href="authentication/Signup.php" class="button">SignUp</a>
                  </div>
                </div>
              </center>
          </div>
        </main>
        
      <footer>
        <div class="footer-para text-center">
            <p>Copyright ©  All Rights Reserved | Contact Us: +91 90000 00000</p>
        </div>
      </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>