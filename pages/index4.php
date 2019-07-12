<?php

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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


      <div class="container">
        <div class="row">
          <div class="col-sm-3"></div>
          <div class="col-sm-3"></div>
          <div class="col-sm-6 p-4">
            <div id="loginform">
              <!--  Login Form -->
              <form class="border shadow p-4 m-auto" method="POST" action="">
                <div class="form-group p-2">
                  <h3 class="text-center"> LOGIN FORM</h3>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-4 m-auto">
                      <label class="rad">
                        <input type="radio" name="option" value="parent" checked> Parent
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="col-sm-4 m-auto">
                      <label class="rad">
                        <input type="radio" name="option" value="teacher" > Teacher
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="col-sm-4 m-auto">
                      <label class="rad">
                        <input type="radio" name="option" value="admin" > Admin
                        <span class="checkmark"></span>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group p-2">
                  <input type="text" class="form-control border rounded-0" name="username" placeholder="Username" required>
                </div>
                <div class="form-group p-2">
                  <input type="password" class="form-control border rounded-0 " name="password" placeholder="Password" required>
                </div>

                <div class="form-group p-2">
                  <label class="chbox">
                    <input type="checkbox" name="rember" checked> Remember Me
                    <span class="cmark"></span>
                  </label>
                </div>

                <div class="form-group p-2">
                  <input type="submit" class="form-control rounded-0 btn btn-primary" name="submit" value="Login">
                </div>

                <div class="form-group p-2">
                  <div class="row">
	                    <div class="col-sm-4">
	                      <a href="teachreg.php" role="button" class="btn btn-danger rounded-0 border border-top-0 border-left-0 border-right-0"> Register Teacher</a>
	                  </div>
	                    <div class="col-sm-4"></div>
	                    <div class="col-sm-4">
	                      <a href="parentreg.php" role="button" class="btn btn-danger rounded-0 border border-top-0 border-left-0 border-right-0"> Register Parent</a>
	                    </div>
                	</div>
            	</div>
              </form>
            </div>
          </div>
        </div>
 
      </div>















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Personal Javascript files -->
    <!-- <script src="../jscripts/registerationtoggler.js"></script> -->
    <script src="../jscripts/autocomplete.js"></script>
    <!-- <script src="../jscripts/multistep.js"></script> -->
  </body>
</html>