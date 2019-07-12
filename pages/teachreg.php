<?php
	print("eacher registr form");
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

              <!-- Teachers Registeration form -->
                <form class="border shadow p-4 m-auto" method="POST" action="">
                  <div class="form-group p-2">
                    <h3 class="text-center"> Teacher Registeration Form</h3>
                  </div>
                  <div class="form-group p-2">
                    <h4 class="text-center"> Basic Information</h4>
                  </div>
                  <div class="form-group p-4">
                  <div class="row">
                    <div class="col-sm-4">
                      <input type="text" name="firstname" class='form-control border border-top-0 border-left-0 border-right-0 rounded-0' placeholder="Firstname" required>
                    </div>
                    <div class="col-sm-4">
                      <input type="text" name="lastname" class="form-control border border-top-0 border-left-0 border-right-0 rounded-0" placeholder="Lastname" required>
                    </div>
                    <div class="col-sm-4">
                      <input type="text" name="middle" class="form-control border border-top-0 border-left-0 border-right-0 rounded-0" placeholder="Middle Name">
                    </div>
                  </div>
                </div>

                <div class="form-group p-4">
                  <div class="row">
                    <div class="col-sm-6 autocomplete ">
                      <input type="text" id="myInput" class='form-control rounded-0 border-right-0 border-left-0 border-top-0' name="myCountry" placeholder="Country">
                    </div>
                    <div class="col-sm-6">
                      <input type="date" class="form-control rounded-0 border border-right-0 border-left-0 border-top-0" placeholder="Date Of Birth" name="dob">
                    </div>

                  </div>
                </div>

                <div class="form-group p-4 ">
                  <div class="row">
                     <div class="col-sm-12 autocomplete ">
                      <input type="text" id="region" class='form-control rounded-0 border-right-0 border-left-0 border-top-0' name="myCountry" placeholder="Regions">
                    </div>
                  </div>
                </div>
               

                <!-- Contact Information -->
                  <div class="form-group p-2">
                    <h4 class="text-center"> Contact Information</h4>
                  </div>

                  <div class="form-group p-2">
                    <input type="email" class="form-control border border-top-0 border-right-0 border-left-0 rounded-0" name="email" placeholder="Email Address" required>
                  </div>
                  <div class="form-group p-2">
                    <div class="row">
                      <div class="col-sm-6">
                        <input type="number" class="form-control border border-top-0 border-right-0 border-left-0 rounded-0" name="phone1" placeholder="Phone Number 1" required>
                      </div>
                      <div class="col-sm-6">
                        <input type="number" class="form-control border border-top-0 border-right-0 border-left-0 rounded-0" name="phone2" placeholder="Phone Number 2">
                      </div>
                    </div>
                  </div>
                   <div class="form-group pt-2">
                      <input type="text" class="form-control border border-top-0 border-right-0 border-left-0 rounded-0" name="residence" placeholder="Residence Address" required>
                    </div>
               
                <!-- Account Information -->
                  <div class="form-group p-2">
                    <h4 class="text-center"> Account Information</h4>
                  </div>
                  <div class="form-group p-2">
                    <input type="text" class="form-control border border-top-0 border-right-0 border-left-0 rounded-0" name="username" placeholder="Username" required>
                  </div>

                  <div class="form-group p-2">
                    <input type="password" class="form-control border border-top-0 border-right-0 border-left-0 rounded-0" name="password" placeholder="Enter Password" required>
                  </div>
                  <div class="form-group p-2">
                    <input type="password" class="form-control border border-top-0 border-right-0 border-left-0 rounded-0" name="passworda" placeholder="Enter Password Again" required>
                  </div>
              

                <div class="form-group p-2">
                  <input type="submit" class="form-control rounded-0 btn btn-primary" name="submit" value="Register">
                </div>
                </form>
           
          </div>
        </div>
 
      </div>















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Personal Javascript files -->
    <script src="../jscripts/registerationtoggler.js"></script>
    <script src="../jscripts/autocomplete.js"></script>
    <!-- <script src="../jscripts/multistep.js"></script> -->
  </body>
</html>