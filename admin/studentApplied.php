

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
  ?>
  
    <div class="table-responsive">
    <table class="table table-hover table-bordered">
        <h1 class="pb-5 text-center">Software Developer</h1>
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">email</th>
            <th scope="col">gender</th>
            <th scope="col">mobile</th>
            <th scope="col">Skills</th>
            <th scope="col">location</th>
            <th scope="col">Resume</th>
            <th scope="col">Accept Or Decline</th>
          </tr>
        </thead>
        <tbody>
          <?php
                    include '../assets/connection.php';
                    $selectQuery = "select * from software_developer";
                    $query = mysqli_query($con , $selectQuery);
                    while($result = mysqli_fetch_array($query)){
            

          if($result['status'] == "Approved" or $result['status'] == "Pending"){
            ?>

          <tr>
            <td><?php echo $result['id'];?></td>

            <td><?php echo $result['first_name'];?></td>
            <td><?php echo $result['last_name'];?></td>
            <td><?php echo $result['emailu'];?></td>
            <td><?php echo $result['gender'];?></td>
            <td><?php echo $result['mobile_no'];?></td>
            <td><?php echo $result['Skills'];?></td>
            <td><?php echo $result['location'];?></td>
            <td><a href="<?php echo $result['resume'];?>" target="_blank">Open</a></td>
            <td><?php if ($result['status'] == "Pending") {
              ?>
               <a href="accept.php?update=<?php echo $result['id']; ?>">Accept</i></a>
              </br>
               <a href="decline.php?update=<?php echo $result['id']; ?>">Decline</i></a>
              
              
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