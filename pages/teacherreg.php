<?php
	// Require files here
	require('connect.php');

	// End of require files

	if(isset($_POST['submit'])){

		// validation function
		function val($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}

		// Geting registeration info and storing in variables

		$firstname = val($_POST['firstname']);
		$lastname = val($_POST['lastname']);
		$middlename = val($_POST['middle']);
		$country = val($_POST['myCountry']);
		$dob = val($_POST['dob']);
		$region = val($_POST['region']);
		$email = val($_POST['email']);
		$phone1 = val($_POST['phone1']);
		$phone2 = val($_POST['phone2']);
		$username = val($_POST['username']);
		$password = val($_POST['password']);
		$residence = val($_POST['residence']);
		$gender = val($_POST['gender']);
		$passworda = val($_POST['passworda']);
		$date = date('Y-m-d h-m-s');
		$actype = 2;

		$errors = array();
	// check if email already exist
		$equery ="SELECT parentid FROM	registration WHERE email = '".$email."'";
		$result = $conn->query($equery);
		if($result->num_rows > 0){
			$emailerr = "Email already exist";
			$errors[]  = "email already exist";
		}
//	 check if username already apc_exists
		$uquery = "SELECT username FROM accounts WHERE username ='".$username."'";
		$result = $conn->query($uquery);
		if($result->num_rows > 0){
			$usererr = "Username already exist";
			$errors[] = "username already exist";
		}

//	check if passwords match

		if($password != $passworda){
				$passmatcherr = "Passwords do not match";
				$errors[] = "Password do not match";
		}else{
			$hash = password_hash($password, PASSWORD_BCRYPT);
		}
//	check if passwords length is less that 6

		if(strlen($password) < 6){
			$passserr = "Password is not strong";
			$errors[] = "Password is weak";
		}

// check if there are no errors and submit data to databases
		if(empty($errors)){
			$conn->autocommit(FALSE);
			$control = TRUE;
			$conn->query("INSERT INTO registration(firstname,lastname,middlename,country,dob,region,email,phone1,phone2,residence,gender,regdate) VALUES('$firstname','$lastname','$middlename','$country','$dob','$region','$email','$phone1','$phone2','$residence','$gender','$date')") ? $pid = $conn->insert_id : $control = FALSE;

			// $conn->query("INSERT INTO registration(firstname,lastname,middlename,country,dob,region,email,phone1,phone2,residence,gender,regdate) VALUES('$firstname','$lastname','$middlename','$country','$dob','$region','$email','$phone1','$phone2','$residence','$gender','$date')") ? $pid = $conn->insert_id : $control = FALSE;

			$conn->query("INSERT INTO accounts(pid,username,password,actype,regdate) VALUES('$pid','$username','$hash','$actype','$date')") ? null : $control = FALSE;


			if($control){
				$conn->commit();
				$regsuccess = "Registeration was successful";
				unset($firstname);unset($lastname);unset($middlename);unset($country);unset($dob);unset($region);unset($gender);unset($email);unset($residence);unset($phone1);unset($phone2);unset($username);
			}else{
				$conn->rollback();
				$regfailerr = "Registeration was unsuccessful. <br> <i> Try again later</i>";
			}
		}else{
			$formfillerr = "Please fill the form correctly";
		}


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
    <!-- Stylesheets -->
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/allstyles.css">
    <link rel="stylesheet" href="../styles/autocomplete.css">
    <!-- <link rel="stylesheet" href="../styles/multistep.css"> -->
    <title>School Management System</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-light bg-default shadow-sm " >
      <div class="container">
              <a href="#" class="navbar-brand mb-0 h1" style="font-family: 'Lucida Calligraphy';">Logo</a>
      </div>

    </nav>


      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 p-5  mt-4">
						<h4 class="mb-5"> A Comprehensive School Management System</h4>
						<!-- Carousel displaying unique factionality of school management system -->

						<div class="carousel slide" id="caro" data-ride="carousel">
								<!-- indicators -->
							<ol class="carousel-indicators">
								<li data-target="#caro" data-slide-to="0" class="active"></li>
								<li data-target="#caro" data-slide-to="1"></li>
								<li data-target="#caro" data-slide-to="2"></li>
							</ol>

							<div class="carousel-inner">
								<!-- Carousel items -->
								<div class="carousel-item active">
									<img src="../pictures/handshake.jpg" alt="Picture" class="d-block w-100" style="width:200px;height:400px;opacity:0.8;">
									<div class="carousel-caption d-none d-md-block" style="color:black;font-weight:bolder;">
										<h5> Perform Administrative work</h5>
										<p>Administrative task can be performed digitally<br> be it printing of reports or recording of class scores</p>
									</div>
								</div>

								<!-- Carousel items -->
								<div class="carousel-item">
									<img src="../pictures/crayons.jpg" alt="Picture" class="d-block w-100" style="width:200px;height:400px;">
									<div class="carousel-caption d-none d-md-block" style="color:black;font-weight:bolder;">
										<!-- <h5>Parent - Teacher Relationship</h5> -->
										<p> Parents can communicate with teachers to either<br>Log complains about their wards or<br> Seek concerns about them
									</div>
								</div>

								<!-- Carousel items -->
								<div class="carousel-item">
									<img src="../pictures/child.jpg" alt="Picture" class="d-block w-100" style="width:200px;height:400px;">
									<div class="carousel-caption d-none d-md-block" style="color:white;font-weight:bolder;">
										<h5> Monitor Your Child Progress</h5>
										<p>Parents can monitor the performances of their children with a click</p>
									</div>
								</div>


								<!-- Controls -->
									<a class="carousel-control-prev" href="#caro" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next" href="#caro" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
							</div>
						</div>
						<!-- End of carousel -->

						<!-- Navigation buttons -->
						<div class="row mt-2">
							<div class="col-sm-6">
								<a href="index.php" role="button" class="btn btn-secondary btn-block rounded-0"> Login</a>
							</div>
							<div class="col-sm-6">
								<a href="parentreg.php" role="button" class="btn btn-secondary btn-block rounded-0"> Register as Parent</a>
							</div>
						</div>
						<!-- End of Navigation buttons -->
					</div>
					<div class="col-sm-1"></div>
          <div class="col-sm-5 p-4">

             <!-- Parent Registeration form -->

              <form class="border shadow p-4 m-auto" method="POST" action="">
                <div class="form-group p-2">
                  <h3 class="text-center">Teacher Registeration Form</h3>
                </div>

                    <!-- Error Display Area -->
                    <?php
										if(isset($formfillerr) && !empty($formfillerr)){
											echo "<div class='alert alert-danger aler-dismissable fade show rounded-0'>";
											echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
											echo "$formfillerr";
											echo "</div>";
										}elseif(isset($regfailerr) && !empty($regfailerr)){
											echo "<div class='alert alert-danger aler-dismissable fade show rounded-0'>";
											echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
											echo "$regfailerr";
											echo "</div>";
										}elseif(isset($regsuccess) && !empty($regsuccess)){
											echo "<div class='alert alert-success aler-dismissable fade show rounded-0'>";
											echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
											echo "$regsuccess";
											echo "</div>";
										}

                    ?>

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
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
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
										<span class="err"><?php if(isset($emailerr)){echo $emailerr;} ?></span>
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
										<span class="err"><?php if(isset($usererr)){echo $usererr;} ?></span>
                  </div>

                  <div class="form-group p-2">
                    <input type="password" class="form-control border border-top-0 border-right-0 border-left-0 rounded-0" name="password" placeholder="Enter Password" required>
                  </div>

                  <div class="form-group p-2">
                    <input type="password" class="form-control border border-top-0 border-right-0 border-left-0 rounded-0" name="passworda" placeholder="Enter Password Again" required>
                    <span class="err"><?php if(isset($passmatcherr)){echo $passmatcherr;}elseif(isset($passserr)){echo $passserr;}  ?> </span>
                  </div>


                <div class="form-group p-2">
                  <input type="submit" class="form-control rounded-0 btn btn-primary" name="submit" value="Register" id="special">
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
    <!-- <script src="../jscripts/registerationtoggler.js"></script> -->
    <script src="../jscripts/autocomplete.js"></script>
    <!-- <script src="../jscripts/multistep.js"></script> -->
  </body>
</html>
