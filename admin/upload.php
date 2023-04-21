<?php

    session_start();

     if(!isset($_SESSION['username'])){
        header('location:../login_signup/adminlogin.php');
      }

?>

<?php

    include '../assets/connection.php';

    if(isset($_POST['submit'])){
        $jbName = $_POST['jobName'];
        $jobDesc = $_POST['jobdesc'];
        $skills = $_POST['skills'];
        $salary = $_POST['salary'];
        $file = $_FILES['file'];

        $filename = $file['name'];
        $filepath = $file['tmp_name'];
        $fileerror = $file['error'];

        if($fileerror == 0){
            $destfile = '../upload/'.$filename;

            move_uploaded_file($filepath,$destfile);

            $insertquery = "insert into addjobprofile(job_name,jobDesc,skills,salary,pic) values('$jbName','$jobDesc','$skills','$salary','$destfile')";

            $query = mysqli_query($con,$insertquery);

            if($query){
                echo "inserted";
                header('location:addjob.php');
            }else{
                echo "not inserted";
            }
        }
    }

?>