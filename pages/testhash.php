<?php
// 	$ha = password_hash('victor',PASSWORD_BCRYPT);

// 	print(strlen($ha));
// // 	print(password_hash('victor',PASSWORD_BCRYPT));

// // 	if(password_verify('victor',$ha)){
// // 		print("<br> password is valid");
// // 	}else{
// // 		print("<br> Password is not valid");
// // 	}

//

	// $name = "victor";

	// (isset($name) ? print("name is set"): print("it worked"));

	if(isset($_POST['submit'])){

		if($_POST['password'] == $_POST['passworda']){
			print("gud");
		}else{
			print("passwords do not match");
		}
	}



 ?>
 <form method="POST" action="">
 	<input type="text" name="username"><br><br>
 	<input type="password" name="password"><br><br>
 	<input type="password" name="passworda"><br><br>
 	<input type="submit" name="submit">
 </form>