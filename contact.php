<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crude crew</title>
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;1,100&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styled.css">

</head>
<body>
    <section class="sub-header">
     <nav>
       <a href="main.html"><img src="codecrew.png" ></a>
       <div class="nav-links" id="navLinks">
        <i class="bi bi-file-excel" onclick="hideMenu()"></i>
         <ul>
            <li><a href="main.html">HOME</a></li>
            <li><a href="about.html">ABOUT</a></li>
            <li><a href="services.php">SERVICES</a></li>
            <li><a href="contact.php">CONTACTS</a></li>
         </ul>
        </div>
        <i class="bi bi-list" onclick="showMenu()"></i>
    </nav>
           <h1>CONTACT US</h1>
    </section>
    <!----------------------------------contacts---------------------------------------------->
<section class="location">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3847.4434767925254!2d75.07980061467441!3d15.3524502893272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bb8d6b8fd942131%3A0x67b6dbf77ee7c3cb!2sKLE%20Institute%20of%20Technology!5e0!3m2!1sen!2sin!4v1673201692125!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0"></iframe>
</section>
      
       <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                 <div>
                    <i class="bi bi-house"></i>
                    <span>
                        <h5>KLE IT GOKUL ROAD, HUBBALLI</h5>
                        <p>opposite airport</p>
                    </span>
                 </div>
                <div>
                    <i class="bi bi-phone"></i>
                    <span>
                        <h5>0836-2224556</h5>
                        <p>Monday to Saturday,10Am to 7PM</p>
                    </span>
                </div>
           
            <div> <i class="bi bi-envelope"></i>
                <span>
                    <h5>crudecrew@gmail.com</h5>
                    <p>Email us your query</p>
                </span>
            </div>
            </div>
            <form action="" method="POST">
            <div class="contact-col"> 
                   <form action="">
                    <input type="text" placeholder="Enter your name" name="name" required>
                    <input type="text" placeholder="Enter Email address" name="email" required>
                    <input type="text" placeholder="Enter Service "  name="service" required>
                    <textarea  rows="8" placeholder="Message" name="message" required></textarea>
                    <button type="submit" class="hero-btn red-btn" name="submit" > Send Message</button>
                   </form>
            </div>
        </form>
         </div>
       </section>
        <!-----------------footer------------------------------------------->
        <section class="footer">
            <h4>Hit us Anytime </h4>
            <p>If you have any queries on our oil and lubes products or would like to place an order, call our experts today</p>
                     <div class="icons">
                        <i class="bi bi-twitter"></i>
                        <i class="bi bi-instagram"></i>
                        <i class="bi bi-facebook"></i>
                        <i class="bi bi-linkedin"></i>
                        <i class="bi bi-whatsapp"></i>
                     </div>
                     <p>Alrights Reservered | Team Crude Crew <i class="bi bi-heart-fill"></i> </p>
       </section>
    <!--------------------------------javascript --------------------------------->
<script>

    var navLinks=document.getElementById("navLinks");

    function showMenu(){
        navLinks.style.right="0";
    }

    function hideMenu(){
        navLinks.style.right="-200px";
    }
</script>

</body>
</html>

<?php
    include("db_connect.php");
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $service=$_POST['service'];
        $message=$_POST['message'];


        
            $sql="INSERT INTO contacts(name,email,service,message) VALUES('$name','$email','$service','$message')";
            $data=mysqli_query($con,$sql);
            if($data){
                echo "insert";

            }
            else{
                echo "not inserted";
            
        }
    }
?>
