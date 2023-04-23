
<?php include('header-ad.php');?>
<table class="table table-hover table-bordered table-responsive">
        <thead>
        </thead>
        <tbody>
          <?php
                    include '../assets/connection.php';
                    $userid = $_SESSION['id'];
                    $selectQuery = "select * from users where id = '$userid'";
                    $query = mysqli_query($con , $selectQuery);
                    while($result = mysqli_fetch_array($query)){
            ?>

          <tr>
            

            <td><?php echo $result['username_user'];?></td>
            <td><?php echo $result['email'];?></td>
            <td><?php echo $result['mobile'];?></td>
            <td><?php echo $result['hscCollege'];?></td>
            <td><?php echo $result['hscPercentage'];?></td>
            <td><?php echo $result['graduationCollege'];?></td>
            <td><?php echo $result['Degree'];?></td>
            <td><?php echo $result['gradPer'];?></td>
            <td><?php echo $result['workExperience'];?></td>
            <td><img src="<?php echo $result['userpic'];?>" width="100" height="100"></td>
            <td><a href="profileupdate.php?update=<?php echo $result['id']; ?>">Update</a></td>
          </tr>



              <?php
            }
            ?>

          
        </tbody>
      </table>

      <div class="delete">
      <h1 class="text-center p-lg-5 bg-danger">Delete Acoount</h1>

      <?php
                    include '../assets/connection.php';
                    $selectQuery = "select * from users";
                    $query = mysqli_query($con , $selectQuery);
                    $result = mysqli_fetch_array($query)
                    
                   ?>
                   
                    <a href="deleteaccount.php?deleteData=<?php echo $_SESSION['id']; ?>">Delete Account</i></a></td>
                    


    </div>