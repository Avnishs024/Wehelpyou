<?php
session_start();
include("config.php");

if (isset($_POST['login'])) {

    $uemail = $_POST['email'];
    $upassword = $_POST['password'];

    $select = mysqli_query($con, "SELECT * FROM user_login WHERE email = '$uemail'");
    $arr = mysqli_fetch_array($select);

    $password = $arr['password'];
    $email = $arr['email'];
     $id = $arr['id'];

    if ($uemail!=$email) {
        $message ="enter valid email";
          echo '<script type="text/javascript"> alert("'.$message.'")</script>';
       	 
    }  else if ($password != $upassword) {
    	$message="invalid pass";
          echo '<script type="text/javascript"> alert("'.$message.'")</script>';
         header("Location:index.php");
          
    }
    else {
     	$_SESSION['id']=$id; 
        header("Location: web.php");
    }
}

{

	
include("config.php");
                                if(isset($_POST['register']))
                                {
								
                                $a = $_POST['name'];
                                $b = $_POST['contact'];
                                $c = $_POST['email'];
                                $d = $_POST['password'];
                               
								
         $query = mysqli_query($con,"INSERT INTO `user_login`( `name`, `contact`, `email`, `password`) VALUES
								
					 ('".$a."','".$b."','".$c."','".$d."')");
                                if($query)
                                {echo "success";}
                              else
                              {echo "failed";}
                              }
							  
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>We Help You/login and registration</title>
	<link rel="stylesheet" href="css/style2.css">
</head>
<body>
	<div class="hero">
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="login()">log in</button>
				<button type="button" class="toggle-btn" onclick="register()">Register</button>
			</div>
			<div class="social-icon">
			<img src="fb.png">
			<img src="In.png">
			<img src="gp.png">
		</div>
		<form  action="login.php" method="post" id="login" class="input-group">
			<input type="email" name="email" class="input-field" placeholder="User id" required>
			<input type="text" name="password" class="input-field" placeholder="Enter Password" required>
			<input type="checkbox" class="check-box"><span>Remember Password</span>
			<input type="submit" name="login" class="button submit-btn" value="log in">
			 
		</form>
		<form id="register" class="input-group" action="login.php" method="post">
			<input type="text" name="name" class="input-field" placeholder="Name" required>
			<input type="text" name="contact" class="input-field" placeholder="Contact Number" required>
			<input type="email" name="email" class="input-field" placeholder="Enter Email" required>
			<input type="text" name="password" class="input-field" placeholder="Enter Password" required>
			<input type="checkbox" class="check-box"><span>I agree to terms and consitions</span>
			<input type="submit" name="register" name="register" class="button submit-btn" value="Register">
		
		</form>
		</div>
		
	</div>
<script>
	var x= document.getElementById("login");
	var y= document.getElementById("register");
	var z= document.getElementById("btn");
	function register(){
		x.style.left= "-400px";
		y.style.left= "50px";
		z.style.left= "110px";
	}
	function login(){
		x.style.left= "50px";
		y.style.left= "450px";
		z.style.left= "0";
	}
</script>
</body>
</html>>