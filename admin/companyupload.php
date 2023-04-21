<?php

    session_start();


?>

<?php

    include '../assets/connection.php';

    if(isset($_POST['submit'])){
        $firstname = $_POST['fName'];
        $lastname = $_POST['lName'];
        $email = $_SESSION['email'];
        $gender = $_POST['gender'];
        $mobile = $_POST['mobile'];
        $skills = $_POST['skills'];
        $location = $_POST['location'];
        $file = $_FILES['file'];

        $filename = $file['name'];
        $filepath = $file['tmp_name'];
        $fileerror = $file['error'];

        if($fileerror == 0){
            $destfile = '../resume/'.$filename;

            move_uploaded_file($filepath,$destfile);

            $insertquery = "insert into software_developer(first_name,last_name,emailu,gender,mobile_no,Skills,location,resume) values('$firstname','$lastname','$email','$gender','$mobile','$skills','$location','$destfile')";

            $query = mysqli_query($con,$insertquery);

            if($query){
                echo "inserted";
            
                header('location:apply.php');
            
            }else{
                echo "not inserted";
            }
        }
    }

?>