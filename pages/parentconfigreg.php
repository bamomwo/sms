<?php
/* Require file here */
  session_start();
  require('connect.php');
/*End of Require file here */

if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){

  $sql = "SELECT * FROM accounts INNER JOIN registration ON accounts.pid = registration.parentid WHERE registration.parentid = '". $_SESSION['user_id']."'";
  $result = $conn->query($sql);
  if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    $lastname = ucwords($row['lastname']);
  }

}else{
  header("Location: index.php");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/allstyles.css">
    <link rel="stylesheet" href="../styles/autocomplete.css">
    <!-- <link rel="stylesheet" href="../styles/multistep.css"> -->
    <title>School Management System</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-light bg-default shadow-sm" >
      <div class="container">
              <a href="#" class="navbar-brand mb-0 h1" style="font-family: 'Lucida Calligraphy';">Logo</a>
      </div>

    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-5  m-auto  p-3">
          <h3 class="text-center mb-4 mt-4" style="font:bold 25px Georgia;">Welcome Mr. <?php if(isset($lastname)){echo $lastname;} ?></h3>
          <p>Please provide information about your wards for the configuration of your account.
          This will only take a second. Thank You</p>

          <ul class="list-group my-4 border-left-0">
            <li class="list-group-item h5 text-center">INSTRUCTIONS</li>
            <li class="list-group-item sp">1. <span class="tab"> Select the number on children you have in the school </span></li>
            <li class="list-group-item sp">2. <span class="tab"> Enter the child name and identification number respectively in the form provide</span></li>
            <li class="list-group-item sp">3. <span class="tab"> Click on Procede to Account</span></li>
          </ul>
        </div>


        <div class="col-sm-6  border shadow-sm">
          <div class="m-auto">
            <h4 class="text-center m-4 p-2" style="font:bold 25px Georgia;"> Complete The Form</h4>
            <form class="form-inline"  action="numberofwards.php" method="post">
              <div class="form-group p-2">
                <label class="sr-only">Choose The number Of Children</label>
                <select class="form-control rounded-0" id="wards" name="wards">
                  <option value="" selected disabled>Choose The number Of Children</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                  <option value="4">Four</option>
                </select>
              </div>
              <div class="form-group p-2">
                <button type="button" class="btn btn-primary btn-block rounded-0" id="war"> Select</button>
              </div>
            </form>
            <h5 class="text-center my-4">Account Configuration</h5>
            <div id="displayinfo" style="line-height:25px;">
              <p> Form information will be displayed here upon selection the number of childred you have in the school</p>
            </div>
          </div>
        </div>
      </div>
    </div>

















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <!-- Personal Javascript files -->
    <!-- <script src="../jscripts/registerationtoggler.js"></script> -->
    <script src="../jscripts/autocomplete.js"></script>
    <!-- <script src="../jscripts/multistep.js"></script> -->
    <script src="../jscripts/ward.js"></script>
  </body>
</html>
