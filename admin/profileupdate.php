<?php

    session_start();

     

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Add Image</title>
  </head>
  <body>






  <?php

include '../assets/connection.php';


    $id = $_GET['update'];
    $showquery = "select * from users where id='$id' ";
    $showData = mysqli_query($con,$showquery);

    $result = mysqli_fetch_array($showData);


if(isset($_POST['submit'])){
    
    $username = $_POST['username_user'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $city = $_POST['city'];
    $graduationCollege = $_POST['graduationCollege'];
    $Degree = $_POST['Degree'];
    $gradPer = $_POST['gradPer'];
    $hscCollege = $_POST['hscCollege'];
    $hscPercentage = $_POST['hscPercentage'];
    $workExperience = $_POST['workExperience'];
    $file = $_FILES['file'];

    $filename = $file['name'];
    $filepath = $file['tmp_name'];
    $fileerror = $file['error'];

    if($fileerror == 0){
        $destfile = '../userpic/'.$filename;

        move_uploaded_file($filepath,$destfile);

        

        

        $updatequery = "update users set username_user='$username',email='$email', mobile='$mobile',city='$city',graduationCollege='$graduationCollege', Degree='$Degree',gradPer='$gradPer',hscCollege='$hscCollege', hscPercentage='$hscPercentage',workExperience='$workExperience', userpic = '$destfile' where id='$id'";

        $query = mysqli_query($con,$updatequery); 

        if($query){
            header('location:profile.php');
        }else{
            echo "not inserted";
        }
    }
}

?>



<div class="container">
    <div class="upload-form">

        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <input type="text" class="form-control" name="username_user" placeholder="type your name" value="<?php echo $result['username_user'];?>">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="email" placeholder="Enter your email" value="<?php echo $result['email'];?>">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="mobile" placeholder="Mobile number" value="<?php echo $result['mobile'];?>">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="city" placeholder="City" value="<?php echo $result['city'];?>">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="graduationCollege" placeholder="Graduation College name" value="<?php echo $result['graduationCollege'];?>">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="Degree" placeholder="Degree" value="<?php echo $result['Degree'];?>">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="gradPer" placeholder="graduation Percentage" value="<?php echo $result['gradPer'];?>">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="hscCollege" placeholder="HSC college name" value="<?php echo $result['hscCollege'];?>">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="hscPercentage" placeholder="Hsc percentage" value="<?php echo $result['hscPercentage'];?>">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="workExperience" placeholder="Work Experience" value="<?php echo $result['workExperience'];?>">
            </div>
            <div class="mb-3">
                <input type="file" class="form-control" name="file" >
            </div>
            
            <button type="submit" name="submit" class="btn btn-primary" value="update">Update</button>

        </form>
    </div>
</div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>