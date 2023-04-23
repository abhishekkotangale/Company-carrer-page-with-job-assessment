

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applied History</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="jobpage.css">
</head>
<body>
<?php
    include 'header-ad.php';

?>
<div class="p-lg-5">
<table class="table table-responsive container">
  <thead>
    <tr>
      <th scope="col">Position</th>
      <th scope="col">Resume</th>
      <th scope="col">Message</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  <?php
    include '../assets/connection.php';
    $uid = $_SESSION['id'];

    $selectQuery = "SELECT * FROM jobapplied INNER JOIN addjobprofile on jobapplied.jobid = addjobprofile.jobidcom where uid = '$uid'";

    $query = mysqli_query($con , $selectQuery);

    while($result = mysqli_fetch_array($query)){
    
      $status = $result['status'];
     
    
    if($status == "Selected"){
        ?>
    <tr>
          <td><?php echo $result['job_name'];  ?></td>
          <td><a href="<?php echo $result['resume'];?>" target="_blank">Resume</a></td>
          <td class="text-success">Congratulation you are shortlisted for this position</td>
      <td class="text-success">Accepted</td>
    </tr>
    <?php
    }else if($status == "Not Selected"){
    ?>
    <tr>
    
          <td><?php echo $result['job_name'];  ?></td>
          <td><a href="<?php echo $result['resume'];?>" target="_blank">Resume</a></td>
      <td>Sorry,Your Resume doesn't get Shortlisted. You have lots of Skills We wish for your better Future</td>
      <td class="text-danger">Rejected</td>
    </tr>
    <?php
    }else{
        ?>
        <tr>
        <td><?php echo $result['job_name'];  ?></td>
          <td><a href="<?php echo $result['resume'];?>" target="_blank">Resume</a></td>
          <td>Your Resume Under Review</td>
          <td>Pending</td>
        </tr>
        <?php
        }
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

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>