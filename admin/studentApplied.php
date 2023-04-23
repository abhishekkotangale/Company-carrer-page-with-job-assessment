

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="addjob.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Student Applied</title>
  </head>
  <body>

  <?php
    include 'header-ad.php';
    include '../assets/connection.php';
    $jobid = $_GET['stureslist'];
    $showquery = "select * from addjobprofile where jobidcom='$jobid' ";
    $showData = mysqli_query($con,$showquery);

    $result = mysqli_fetch_array($showData);
  ?>
  
    <div class="table-responsive">
    <table class="table table-hover table-bordered">
        <h1 class="pb-5 text-center"><?php echo $result['job_name'];?></h1>
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">email</th>
            <th scope="col">Hsc college</th>
            <th scope="col">Hsc percentage</th>
            <th scope="col">Graduation College</th>
            <th scope="col">Degree</th>
            <th scope="col">Graduation Percentage</th>
            <th scope="col">Work Experience</th>
            <th scope="col">Skills</th>
            <th scope="col">Resume</th>
            <th scope="col">Accept Or Decline</th>
          </tr>
        </thead>
        <tbody>
          <?php
                    include '../assets/connection.php';
                    $jobid = $_GET['stureslist'];
                    $selectQuery = "SELECT * from jobapplied INNER JOIN users on users.id = jobapplied.uid INNER JOIN addjobprofile on addjobprofile.jobidcom = jobapplied.jobid where jobid = '$jobid'";
                    $query = mysqli_query($con , $selectQuery);
                    while($result = mysqli_fetch_array($query)){
            

          if($result['status'] == "Selected" or $result['status'] == "Pending"){
            ?>

          <tr>
            <td><?php echo $result['appid'];?></td>
            <td><?php echo $result['username_user'];?></td>
            <td><?php echo $result['email'];?></td>
            <td><?php echo $result['hscCollege'];?></td>
            <td><?php echo $result['hscPercentage'];?></td>
            <td><?php echo $result['graduationCollege'];?></td>
            <td><?php echo $result['Degree'];?></td>
            <td><?php echo $result['gradPer'];?></td>
            <td><?php echo $result['workExperience'];?></td>
            <td><?php echo $result['userskills'];?></td>
            <td><a href="<?php echo $result['resume'];?>" target="_blank">Open</a></td>
            <td><?php if ($result['status'] == "Pending") {
              ?>
               <a href="accept.php?update=<?php echo $result['appid']; ?>">Accept</i></a>
              </br>
               <a href="decline.php?update=<?php echo $result['appid']; ?>">Decline</i></a>
              
              
              <?php 
            }else{
              echo $result['status'];
            }?></td>
          </tr>

            <?php
          }
          ?>


              <?php
            }
            ?>
          
        </tbody>
      </table>
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