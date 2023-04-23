<?php

    session_start();

     if(!isset($_SESSION['username_u']) and !isset($_SESSION['username'])){
        header('location:../authentication/login.php');
      }

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="header-ad.css">
    <title>Hello, world!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="#"><i class="fas fa-crown"></i><span class="brand-name">Job Jeevan</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link" href="jobpage.php">Home</a>
          </li>
      

        <?php

          if(isset( $_SESSION['username'])){
            echo '<li class="nav-item">
            <a class="nav-link" href="jobpage.php">jobs</a>
          </li>';
           echo '<li class="nav-item">
            <a class="nav-link" href="addjob.php">Add Job</a>
          </li>';
          echo '<li class="nav-item">
            <a class="nav-link" href="studentresponse.php">Student Apply</a>
          </li>';
          
          }else{
            echo '<li class="nav-item">
            <a class="nav-link" href="jobapplied.php">Job History</a>
          </li>';
          echo '<li class="nav-item">
          <a class="nav-link" href="profile.php">Profile</a>
          </li>';
          }
           

        ?>

       
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>

        
      
    </div>
  </div>
</nav>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
    
  </body>
</html>