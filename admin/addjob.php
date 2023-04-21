

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
    <title>Add Job</title>
  </head>
  <body>

  <?php
    include 'header-ad.php';
  ?>
  
    <div class="table-responsive">
    <table class="table table-hover table-bordered">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Required Knowledge</th>
            <th scope="col">Images</th>
            <th scope="col">update</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php
                    include '../assets/connection.php';
                    $selectQuery = "select * from addjobprofile";
                    $query = mysqli_query($con , $selectQuery);
                    while($result = mysqli_fetch_array($query)){
            ?>

          <tr>
            <td><?php echo $result['id'];?></td>

            <td><?php echo $result['job_name'];?></td>
            <td><?php echo $result['company_desc'];?></td>
            <td><?php echo $result['job_desc'];?></td>
            <td><img src="<?php echo $result['pic'];?>" width="100" height="100"></td>
            <td><a href="update.php?update=<?php echo $result['id']; ?>"><i class="fa fa-edit icon" style="font-size:40px; color:#000;"></i></a></td>
            <td><a href="delete.php?deleteData=<?php echo $result['id']; ?>"><i class="fa fa-trash icon" style="font-size:40px; color:#000;"></i></a></td>
          </tr>



              <?php
            }
            ?>
          
        </tbody>
      </table>
    </div>


      

<div class="container addjob">
    <div class="upload-form">
        <form action="upload.php" method="post" enctype="multipart/form-data">
        
            <div class="mb-3">
                <input type="text" class="form-control" name="jobName" placeholder="Company Name">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="aboutCompany" placeholder="Job Description">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="jobDesc" placeholder="Skills Required">
            </div>
            <div class="mb-3">
                <input type="file" class="form-control" name="file">
            </div>
            
            <center>
            <button type="submit" name="submit" class="btn btn-primary">submit</button>
            </center>

        </form>
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