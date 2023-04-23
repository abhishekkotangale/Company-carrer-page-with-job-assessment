

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="jobpage.css">
</head>
<body>
<?php
    include 'header-ad.php';
  ?>

      <main class="container-fluid jobpagetitle">
        <div class="container-fluid">
          <div class="jumbotron jobtitle">
            <h1 class="display-3 text-center pb-3">
              Hello <?php
                    if(isset( $_SESSION['username'])){
                       echo $_SESSION['username'];
                    }else{
                      echo $_SESSION['username_u'];
                    }
              ?>
              </br>
              This is Job Page
            </h1>
            <p class="text-center">you can find all job listed here”</p>
          </div>
        </main>
          <div class="container-fluid">
          <div class="row text-center container alljobs">
           <?php
                include '../assets/connection.php';
                $sql = "SELECT * FROM addjobprofile LEFT JOIN jobapplied on addjobprofile.jobidcom = jobapplied.jobid";
                $query = mysqli_query($con,$sql);
                while($result = mysqli_fetch_array($query)){
            ?>
            <div class="border-start col-md-4 p-lg-4 col-sm-6 mb-5">
                <img src="<?php echo $result['pic'];?>" alt="" class="img-thumbnail">
                  <div class="caption">
                    <h3><?php echo $result['job_name'];?></h3>
                    <h5><?php echo $result['jobDesc'];?></h5>
                    <p><?php echo $result['skills'];?></p>
                    <p><?php echo $result['salary'];?></p>
                    <?php
                    $uid = $_SESSION['id'];
                    $jobid = $result['jobidcom'];
                    if($result['uid']=="$uid" and $result['jobid']=="$jobid"){
                      ?>
                      <a class="btn btn-primary btn-block" disabled>Already Applied</a>
                      <?php
                    }else{
                      ?>
                      <a class="btn btn-primary btn-block" href="applyjobform.php?job_id=<?php echo $result['jobidcom']; ?>">Apply</a>
                      <?php
                    }
                    ?>
                  </div>  
            </div>
            <?php
            }
            
            ?>
          </div>
        </div>
          </div>
      



      <footer>
        <div class="footer-para text-center">
            <p>Copyright ©  All Rights Reserved | Contact Us: +91 90000 00000</p>
        </div>
      </footer>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>