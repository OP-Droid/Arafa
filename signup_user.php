<?php
include ("include/connection.php");

if(isset($_POST['sign_up']))
{
	$name=htmlentities(mysqli_real_escape_string($con,$_POST['user_name']));
	$pass=htmlentities(mysqli_real_escape_string($con,$_POST['user_pass']));
    $email=htmlentities(mysqli_real_escape_string($con,$_POST['user_email']));
	$country=htmlentities(mysqli_real_escape_string($con,$_POST['user_country']));
	$address=htmlentities(mysqli_real_escape_string($con,$_POST['user_address']));
	$gender=htmlentities(mysqli_real_escape_string($con,$_POST['user_gender']));
	$rand= rand(1,2);

	if($name==''){
		echo "<script>alert('please input a valid username')</script>";
	}
	if($strlen($pass)<8){
		echo "<script>alert('password should be minimum 8 characters')</script>";
	exit();
	}

	$check_email="select*form users where user_email='$email'";
	$run_email=mysqli_query($con,$check_email);
	$check=mysqli_num_rows($run_email);

	if(check==1){
		echo "<script>alert('email already exist,please try again')</script>";
		echo "<script>window.open('signup.php','_self')</script>";
	exit();
	}

	if($rand==1)
		$profile_pic="images/profile.png";
else if($rand==2)
	    $profile_pic="images/profile2.png";
	
	$insert="insert into users(user_name, user_email, user_pass, user_country, user_address,user_gender)values('$name','$email','$pass','$country','$address','$gender','$profile_pic')";

	 $query = mysqli_query($con,$sql);
	if($query){	
		echo "<script>alert('congratulation $name your account has been created successfully!')</script>";
		echo "<script>window.open('signin.php','_self')</script>";
	}
	else
	{
		echo "Something went wrong please try again";
		echo "<script>window.open('signup.php','_self')</script>";
	} 
}
	
?>