

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title></title>
  </head>
  <body>






  <?php

include '../assets/connection.php';
include 'header-ad.php';


    $jobid = $_GET['job_id'];
    $uid = $_SESSION['id'];
    $showquery = "select * from users where id='$uid' ";
    $showData = mysqli_query($con,$showquery);

    $result = mysqli_fetch_array($showData);


if(isset($_POST['submit'])){
    
    $userskills = $_POST['userskills'];
    $file = $_FILES['file'];

    $filename = $file['name'];
    $filepath = $file['tmp_name'];
    $fileerror = $file['error'];

    if($fileerror == 0){
        $destfile = '../resume/'.$filename;

        move_uploaded_file($filepath,$destfile);

        $insertquery = "insert into jobapplied(uid,jobid,userskills,resume,status) values('$uid','$jobid','$userskills','$destfile','Pending')";

        

        $query = mysqli_query($con,$insertquery); 

        if($query){
            header('location:apply.php');
        }else{
            echo "not inserted";
        }
    }
}

?>



<div class="container">
  <center class="text-danger">If you want to make any changes then update profile section</center>
    <div class="upload-form">

        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <input type="text" class="form-control" name="username_user" placeholder="type your name" value="<?php echo $result['username_user'];?>" disabled>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="email" placeholder="Enter your email" value="<?php echo $result['email'];?>" disabled>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="mobile" placeholder="Mobile number" value="<?php echo $result['mobile'];?>" disabled>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="city" placeholder="City" value="<?php echo $result['city'];?>" disabled>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="graduationCollege" placeholder="Graduation College name" value="<?php echo $result['graduationCollege'];?>" disabled>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="Degree" placeholder="Degree" value="<?php echo $result['Degree'];?>" disabled>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="gradPer" placeholder="graduation Percentage" value="<?php echo $result['gradPer'];?>"disabled>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="hscCollege" placeholder="HSC college name" value="<?php echo $result['hscCollege'];?>"disabled>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="hscPercentage" placeholder="Hsc percentage" value="<?php echo $result['hscPercentage'];?>" disabled>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="workExperience" placeholder="Work Experience" value="<?php echo $result['workExperience'];?>" disabled>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="userskills" placeholder="User Skills">
            </div>
            <div class="mb-3">
                <input type="file" class="form-control" name="file" >
            </div>
            
            <button type="submit" name="submit" class="btn btn-primary" value="update">Apply</button>

        </form>
    </div>
</div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>