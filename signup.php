<?php
include("db_connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>

 <!--font style-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<link rel="stylesheet" href="login.css">

</head>
<body>
    
<div class="scontain" id="form">

    <form action="" method=POST>
        <h3>Sign Up!</h3>
        <!-- <h5>Create a new account!</h5> -->

        <i class="fas fa-user"></i>
            <input type="text" placeholder="username" name="username">
            <i class="fas fa-at"></i>
            <input type="email" placeholder="email" name="email">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="password" name="password">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="confirm password" name="cpassword">
            <input type="submit" value="Sign up" name="register">
         <h5>already have an account? <a href="login.php" class="login" style="color: rgba(222, 35, 215, 0.915);">login</a></h5>
         
    </form>


</div>

<script src="VanillaTilt.js"></script>
<script>
VanillaTilt.init(document.querySelector(".contain"), {
		max: 25,
		speed: 400
	});
	

</script>


</body>
</html>

<?php
    if(isset($_POST['register'])){
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];


        if($password==$cpassword){
            $sql="INSERT INTO sign(username,email,password,cpassword) VALUES('$username','$email','$password','$cpassword')";
            $data=mysqli_query($con,$sql);
            if($data){
                echo "insert";

            }
            else{
                echo "not inserted";
            }
        }
    }
?>