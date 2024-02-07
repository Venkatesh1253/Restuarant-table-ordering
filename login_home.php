<?php
session_start();
$name1=$_POST["username"];
$_SESSION['user']=$name1;
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$connection=mysqli_connect("localhost","root","","Info");
		if($connection){
			echo "connected";
		}
		else{
			echo "not connected";
		}
		$email=mysqli_real_escape_string($connection,$_POST["email"]);
		$name=mysqli_real_escape_string($connection,$_POST["username"]);
		$password=mysqli_real_escape_string($connection,$_POST["password"]);
		$que="select * from Details where email=? and password=?";
		echo $email;
		echo $password;
		echo $name;
		$stmt1=mysqli_stmt_init($connection);
		if(!mysqli_stmt_prepare($stmt1,$que)){
			echo"hlo";
		}
		else{
				echo "hi";
			mysqli_stmt_bind_param($stmt1,"ss",$email,$password);
			mysqli_stmt_execute($stmt1);
			$results=mysqli_stmt_get_result($stmt1);
			$data=mysqli_num_rows($results);
			if($data<=0){
				$error="invalid Email or password";
				echo "unsucc";
				header("Location:login_uncc.html");
			}
			else{
				echo " success";
				header("Location:pizza.php");	
				
			}
		}
}
?>
