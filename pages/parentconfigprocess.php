<?php
  require('connect.php');
  session_start();
  if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
    if(isset($_POST['submit'])){
      $nform = $_POST['wnum'];
      $processarray = array();
      $counter = 0;
      while($counter < $nform){$processarray[] = $counter;$counter++;}


      // validation array;
      $valarray = array();

      $sql = "SELECT * FROM allstudents WHERE id = ?";
      $stmt = $conn->prepare($sql);
      foreach($processarray as $p){
        $studentid = $_POST["idname$p"];
        $stmt->bind_param('s', $studentid);
        if($stmt->execute()){
          $stmt->store_result();
          if($stmt->num_rows > 0){
            $valarray[] = 'true';
          }else{
            $valarray[] = 'false';
          }
        }
      }

      if (count(array_unique($valarray)) === 1 && end($valarray) === 'true') {
        // relocate the user to the parent account
        $sql = "INSERT INTO determine (id) VALUES ('".$_SESSION['user_id']."')";
        if($conn->query($sql)){
            header("Location: parentaccount.php");
        }

      }else{
        // display an error message and prompt user to go back and fill
        // the form correctly
        $errmsg = "Student(s) Not Found. Make sure you input the correct student identification number given to you by the school for either your child or children";
      }



    }else{
      header("Location: parentconfigreg.php");
    }
  }else{
    header("Location: index.php");
  }

?>
<!DOCTYPE html>
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


    <!-- main content of the page -->
    <div class="container">
        <div class="row">
          <div class="col-sm-3"></div>
          <div class="col-sm-6" style="margin-top:90px;">
            <div class="border shadow-sm  p-3">
              <h4 class='text-center mt-3' style="color:red; font:bold 25px Georgia;"> Student Confirmation Message</h4>
              <div class='m-4 p-3' style="font:italic 20px vollkorn; line-height:30px;">
                <?php
                if(isset($errmsg) && !empty($errmsg)){
                  echo($errmsg);
                }
                ?>
                <div class="row mt-4">
                  <div class="col-sm-6"></div>
                  <div class="col-sm-6">
                    <a href="parentconfigreg.php" role="button" class="btn btn-secondary btn-block rounded-0 "><span class="fas fa-arrow-left"></span>     Go Back</a>
                  </div>
                </div>

              </div>

            </div>
          </div>
          <div class="col-sm-3"></div>
        </div>

    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Personal Javascript files -->
    <!-- <script src="../jscripts/registerationtoggler.js"></script> -->
    <!-- <script src="../jscripts/autocomplete.js"></script> -->
    <!-- <script src="../jscripts/multistep.js"></script> -->
  </body>
</html>
