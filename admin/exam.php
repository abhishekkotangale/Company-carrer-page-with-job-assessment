<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Exam</title>
  </head>
  <body>
    <?php 
    include('header-ad.php');
    include '../assets/connection.php';
    $selectQuery = "select * from questions";
    $query = mysqli_query($con , $selectQuery);
    while($result = mysqli_fetch_array($query)){
    ?>
            
            <div class="container pt-lg-5">
            <h3><?php echo $result['qid'];?> :- <?php echo $result['que'];?></h3>
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="<?php echo $result['op1'];?>">
                <label class="form-check-label" for="flexRadioDefault1" style="font-size:20px;">
                <?php echo $result['op1'];?>
                </label>
            </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="<?php echo $result['op2'];?>">
                <label class="form-check-label" for="flexRadioDefault2" style="font-size:20px;">
                <?php echo $result['op2'];?>
                </label>
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="<?php echo $result['op1'];?>">
                <label class="form-check-label" for="flexRadioDefault1" style="font-size:20px;">
                <?php echo $result['op3'];?>
                </label>
            </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="<?php echo $result['op2'];?>">
                <label class="form-check-label" for="flexRadioDefault2" style="font-size:20px;">
                <?php echo $result['op4'];?>
                </label>
              </div>
            </div>
            
            
            <br>

        <?php    
                    } 

    ?>
</body>
</html>