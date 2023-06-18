<html>
  <head>
    <title>Setting</title>
  </head>
  <body>
  <?php include('header-ad.php');?>
<table class="table table-hover table-bordered table-responsive container">
        
        <thead>
        </thead>
        <div class="container">
        <img src="<?php echo $result['userpic'];?>" width="200" height="200" class="mt-lg-5 mb-lg-5 img-thumbnail">
        </div>
        <tbody>
          <?php
                    include '../assets/connection.php';
                    $userid = $_SESSION['id'];
                    $selectQuery = "select * from users where id = '$userid'";
                    $query = mysqli_query($con , $selectQuery);
                    while($result = mysqli_fetch_array($query)){
            ?>

          <tr>
            <td class="width:30%;"><b>Username</b></td><td><?php echo $result['username_user'];?></td>
          </tr>
          <tr>
            <td><b>Email</b></td><td><?php echo $result['email'];?></td>
          </tr>
          <tr>
            <td><b>Phone No</b></td><td><?php echo $result['mobile'];?></td>
          </tr>
          <tr>
            <td><b>hscCollege</b></td><td><?php echo $result['hscCollege'];?></td>
          </tr>
          <tr>
            <td><b>hscPercentage</b></td><td><?php echo $result['hscPercentage'];?></td>
          </tr>
          <tr>
            <td><b>graduationCollege</b></td><td><?php echo $result['graduationCollege'];?></td>
          </tr>
          <tr>
            <td><b>Degree</b></td><td><?php echo $result['Degree'];?></td>
          </tr>
          <tr>
            <td><b>gradPer</b></td><td><?php echo $result['gradPer'];?></td>
          </tr>
          <tr>
            <td><b>workExperience</b></td><td><?php echo $result['workExperience'];?></td>
          </tr>

            
            <td colspan="2" class="text-center"><a href="profileupdate.php?update=<?php echo $result['id']; ?>" class="text-center">Update</a></td>
            

              <?php
            }
            ?>

          
        </tbody>
        
      </table>

      <div class="delete container text-center p-lg-5" style="width: 100%;">
            <h1 class="pb-lg-4">Delete Account</h1>
      <?php
                    include '../assets/connection.php';
                    $selectQuery = "select * from users";
                    $query = mysqli_query($con , $selectQuery);
                    $result = mysqli_fetch_array($query)
                    
                   ?>
                   
                    <a href="deleteaccount.php?deleteData=<?php echo $_SESSION['id']; ?>" class="text-center p-lg-2 text-white bg-danger">Delete Account</i></a></td>
                    


    </div>

    <?php include('../assets/footer.php'); ?>
  </body>
</html>
