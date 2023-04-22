 <?php
    include("db_connect.php");
if(isset($_POST['submit'])){
$username=$_POST['username'];

$password=$_POST['password'];

$query="SELECT * FROM sign WHERE username='$username'  && password='$password' ";

$data=mysqli_query($con,$query);

$total=mysqli_num_rows($data);
echo "$total";
if($total==1){
echo "success";
header('location:main.html');
}
else{
    echo "failed";
    echo "<script>alert('Wrong password or username')</script>";
}
}
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

 <!--font style-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<link rel="stylesheet" href="login.css">

</head>
<body>
    
<div class="contain" id="form">

    <form action="" method="POST">
        <h3>Login</h3>
        <h5>Login to your account</h5>

        <i class="fas fa-user"></i>
            <input type="text" placeholder="username" name="username">
            <i class="fas fa-at"></i>
            <input type="email" placeholder="email" name="email">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="password" name="password">
            <input type="submit" value="login" name="submit">
         <h5>don't have an account? <a href="signup.php" class="sign up" style="color: rgba(222, 35, 215, 0.915);">sign up</a></h5>
         
    </form>


</div>

<!-- <script>

   var form = document.getElementById('form')
   
   form.addEventListener('mousemove', (e)=>{

    var x = (window.innerwidth / 2 - e.pageX) / 12;
    var y = (window.innerHeight / 2 - e.pageY) / 12;
  
form.style.transform = 'rotateX(' + x + 'deg ) rotateY(' + y + 'deg )'
}); 


</script>  -->

<script src="VanillaTilt.js"></script>
<script>
VanillaTilt.init(document.querySelector(".contain"), {
		max: 25,
		speed: 400
	});
	

</script>


</body>
</html>





