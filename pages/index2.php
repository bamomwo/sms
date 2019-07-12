<?php
  require('parentreg.php');

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
              <!-- Multi Purpose Login Form -->
              <form class="border shadow p-4 m-auto">
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
                      <button type="button" id="btnteacher" class="form-control rounded-0 btn btn-danger" onclick = "openteacher();"> Register Teacher</button>
                    </div>
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                      <button type="button" id="btnparent" class="form-control rounded-0 btn btn-danger" onclick="openparent();"> Register Parent</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
             <!-- Parent Registeration form -->
            <div id="parentreg">
              <form class="border shadow p-4 m-auto" method="POST" action="parentreg.php">
                <div class="form-group p-2">
                  <h3 class="text-center">Parent Registeration Form</h3>
                </div>

                  <!-- Basic Information tab -->
                  <div class="form-group p-2">
                    <h4 class="text-center"> Basic Information</h4>
                  </div>

                  <div class="form-group p-4">
                  <div class="row">
                    <div class="col-sm-4">
                      <input type="text" name="firstname" class='form-control border border-top-0 border-left-0 border-right-0 rounded-0' placeholder="Firstname" value="<?php if(isset($firstname)){print($firstname);} ?>" required>
                    </div>
                    <div class="col-sm-4">
                      <input type="text" name="lastname" class="form-control border border-top-0 border-left-0 border-right-0 rounded-0" placeholder="Lastname" value="<?php if(isset($lastname)){print($lastname);} ?>" required>
                    </div>
                    <div class="col-sm-4">
                      <input type="text" name="middle" class="form-control border border-top-0 border-left-0 border-right-0 rounded-0" placeholder="Middle Name" value="<?php if(isset($middlename)){print($middlename);} ?>" required>
                    </div>
                  </div>
                </div>

                <div class="form-group p-4">
                  <div class="row">
                    <div class="col-sm-6 autocomplete ">
                      <input type="text" id="myInput" class='form-control rounded-0 border-right-0 border-left-0 border-top-0' name="myCountry" placeholder="Country" value="<?php if(isset($country)){print($country);} ?>" required>
                    </div>
                    <div class="col-sm-6">
                      <input type="date" class="form-control rounded-0 border border-right-0 border-left-0 border-top-0" placeholder="Date Of Birth" name="dob" value="<?php if(isset($dob)){print($dob);} ?>" required>
                    </div>

                  </div>
                </div>

                <div class="form-group p-4 ">
                  <div class="row">
                     <div class="col-sm-6 autocomplete ">
                      <input type="text" id="region" class='form-control rounded-0 border-right-0 border-left-0 border-top-0' name="region" placeholder="Regions" value="<?php if(isset($region)){print($region);} ?>" required>
                    </div>
                   <div class="col-sm-6">
                      <select name="gender" class="form-control border border-top-0 border-right-0 border-left-0 rounded-0">
                        <option value="<?php if(isset($gender)){print($gender);} ?>">Male</option>
                        <option  value="<?php if(isset($gender)){print($gender);} ?>">Female</option>
                        <option value="<?php if(isset($gender)){print($gender);} ?>">Other</option>
                      </select>
                    </div>
                  </div>
                </div>
               

                <!-- Contact Information -->
                <div class="form-group p-2">
                    <h4 class="text-center"> Contact Information</h4>
                  </div>
                  <div class="form-group p-2">
                    <input type="email" class="form-control border border-top-0 border-right-0 border-left-0 rounded-0" name="email" placeholder="Email Address" value="<?php if(isset($email)){print($email);} ?>" required>
                  </div>
                  <div class="form-group p-2">
                    <div class="row">
                      <div class="col-sm-6">
                        <input type="number" class="form-control border border-top-0 border-right-0 border-left-0 rounded-0" name="phone1" placeholder="Phone Number 1" value="<?php if(isset($phone1)){print($phone1);} ?>" required>
                      </div>
                      <div class="col-sm-6">
                        <input type="number" class="form-control border border-top-0 border-right-0 border-left-0 rounded-0" name="phone2" placeholder="Phone Number 2" value="<?php if(isset($phone2)){print($phone2);} ?>" required>
                      </div>
                    </div>
                  </div>
                   <div class="form-group pt-2">
                      <input type="text" class="form-control border border-top-0 border-right-0 border-left-0 rounded-0" name="residence" placeholder="Residence Address" value="<?php if(isset($residence)){print($residence);} ?>" required>
                    </div>
               
                <!-- Account Information -->
                <div class="form-group p-2">
                    <h4 class="text-center"> Account Information</h4>
                  </div>
                  <div class="form-group p-2">
                    <input type="text" class="form-control border border-top-0 border-right-0 border-left-0 rounded-0" name="username" placeholder="Username" value="<?php if(isset($username)){print($username);} ?>" required>
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

              <!-- Teachers Registeration form -->
              <div id="teacherreg">
                <form class="border shadow p-4 m-auto" method="POST" action="teachreg.php">
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