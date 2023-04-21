
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Software Developer Form</title>
        
    <style>
        .formpage{
          padding-top: 30px;
        }

        footer{
          padding-top: 15px;
        }
    </style>
  </head>
  <body>
    <?php
        include 'header-ad.php';
    ?>

    <div class="container-fluid formpage">
        <div class="container text-center" style="width:60%;margin:auto;">
        <div class="container">
        <div class="upload-form">
        <form action="companyupload.php" method="post" enctype="multipart/form-data">
        
            <div class="mb-3">
                <input type="text" class="form-control" name="fName" placeholder="First Name">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="lName" placeholder="Last Name">
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" name="email" placeholder="email" value="<?php echo $_SESSION['email']; ?>" disabled>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="Female">
                <label class="form-check-label" for="flexRadioDefault1">
                  Female
                </label>
            </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="Male" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                  Male
                </label>
              </div>
            <div class="mb-3">
                <input type="number" class="form-control" name="mobile" placeholder="mobile">
            </div>
            <div class="mb-3">
                <input type="textarea" class="form-control" name="skills" placeholder="skills">
            </div>
            <div class="mb-3">
                <input type="textarea" class="form-control" name="location" placeholder="location">
            </div>
            <div class="mb-3">
                <input type="file" class="form-control" name="file">
            </div>
            
            <button type="submit" name="submit" class="btn btn-primary">submit</button>

        </form>
    </div>

        </div>
    </div>

    <footer>
        <div class="footer-para text-center">
            <p>Copyright ©  All Rights Reserved | Contact Us: +91 90000 00000</p>
        </div>
      </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>