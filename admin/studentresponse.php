<?php 
    include 'header-ad.php';
    include '../assets/connection.php';
                    $selectQuery = "select * from addjobprofile";
                    $query = mysqli_query($con , $selectQuery);
                    while($result = mysqli_fetch_array($query)){
            ?>

          <tr>
            <?php echo $result['job_name']; ?>
            <a href="studentApplied.php?stureslist=<?php echo $result['jobidcom']; ?>">Click here for all responses</a>
                    </br></br></br>
          </tr>



              <?php
            }
?>