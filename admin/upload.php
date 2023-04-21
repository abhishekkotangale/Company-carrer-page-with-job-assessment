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
        $abtDesc = $_POST['aboutCompany'];
        $jbdes = $_POST['jobDesc'];
        $file = $_FILES['file'];

        $filename = $file['name'];
        $filepath = $file['tmp_name'];
        $fileerror = $file['error'];

        if($fileerror == 0){
            $destfile = '../upload/'.$filename;

            move_uploaded_file($filepath,$destfile);

            $insertquery = "insert into addjobprofile(job_name,company_desc,job_desc,pic) values('$jbName','$abtDesc','$jbdes','$destfile')";

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