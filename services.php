<?php
    include("db_connect.php");
    $date='';
if(isset($_POST['submit'])){
$name=$_POST['name'];

$email=$_POST['email'];
$number=$_POST['number'];
$type=$_POST['type'];
$brand=$_POST['brand'];

$service=$_POST['service'];
$vehicle_number=$_POST['vehicle_number'];


$oil_type=$_POST['oil_type'];
$date=$_POST['date'];
$Payment_method=$_POST['Payment_method'];


$query="INSERT INTO booking (name,email,number,type,brand,service,vehicle_number,oil_type,date,Payment_method) VALUES ('$name','$email','$number','$type','$brand','$service','$vehicle_number','$oil_type','$date','$Payment_method')";


$data=mysqli_query($con,$query);

if($data){
    echo "<script> alert('inserted') </script>";
}
}
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-sclee=1.0">
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
       <a href="main.html"><img src="crudecrewlogo.png" ></a>
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
           <h1>SERVICES</h1>
    </section>
    
    <!----------------------------------services--------------------->
    <section class="course">

             <h1>Mobile <p>oil change</p> in Hubli and Dharwad</h1>
            <div><p>Modern engines rely on advanced oils to keep them running smoothly and problem-free, mile after mile.
                Book an oil change and we’ll come to you, anywhere in Twin Cities, check and change your engine oil and filter, and have you back on the road in no time.
            </p></div>
            
            <div class="row">
                <div class="service-col">
                    <h3>Oil Delivery</h3>
                    <p>We keep your engine Purring! We regularly carry out oil deliveries regardless of your site’s location any where in twin Cities and offer a Oil top-up service to help you ensure you never run out of oils.</p>
                </div>

                <div class="service-col">
                    <h3>Oil Change Service</h3>
                    <p>Oil changes are a part of your car’s routine maintenance, so getting one should be quick and convenient. At crude crew Auto Care, our technicians perform more than six million oil changes. Our trained technician will come to you, and change your vehicle’s oil using your choice of top- quality Mobil synthetic oil.  </p>
                </div>
                <div class="service-col">
                    <h3>Emergency Oil Service</h3>
                    <p>When you need oil deliveries the most, we can come to the rescue with our 24 hour delivery service and 92% of our orders fulfilled within 24 hours. If you have unexpectedly run out of Oil we can provide you with emergency oil delivery service to ensure you receive oil in just a few hours.</p>
                </div>
            </div>
        </div>
            
                <div class="row">
                <div class="service-col2">
                    <h3>Free 8 Point vehicle Check</h3>
                    <p>Our trained technician will come to you, and change your car’s oil using your choice of top- quality Mobil synthetic oil. He’ll also change the oil filter and conduct a free 8-point vehicle check. T&C Apply </p>
                </div>
                <div class="service-col2">
                    <h3>Online cum Local Service</h3>
                    <p>We provide you a complete Online cum local service at economical cost.we provide you a complete user friendly interface to contact us online! hit us & we'll be there at your service </p>
                </div>
                <div class="service-col2">
                    <h3>Reasonable cost</h3>
                    <p>What we offer you is in the best possible service out of a complete Economic package of yours. The right Oil Change at the right. Book us NOW! </p>
                </div>
             </div>
       
        </section>
        <!--------------------------oils---------------------------------------------->
<section class="oils">
 <h1>Brands <p>@</p> your service</h1>
 <p>Finest Brands At Your Service. Choose Right Oil For Your Vehicle</p>

 <div class="row">
     <div class="oil-col">
         <img src="https://d1yjjnpx0p53s8.cloudfront.net/styles/logo-original-577x577/s3/052017/untitled-1_124.png?itok=C5psNyUu" >
         <div class="layer">
             <h3>Castrol</h3>
         </div>
     </div>
     <div class="oil-col">
            <img src="https://s3-prod.tirebusiness.com/s3fs-public/NEWS_181109953_AR_0_NNEVGWTBWSTP.jpg">
            <div class="layer">
             <h3>valvoline</h3>
         </div>
         </div>
     <div class="oil-col">
         <img src="https://i.pinimg.com/originals/de/17/4c/de174cb4b493a9879d3fb9b14dfe8c8d.jpg">
         <div class="layer">
             <h3>Veedol</h3>
         </div>
         </div>
    
 
         <div class="oil-col">
             <img src="https://th.bing.com/th/id/R.3a4bbdcff4aa6dcaac59441f80490989?rik=b6vlz%2fISbgTTCw&riu=http%3a%2f%2fimg4.wikia.nocookie.net%2f__cb20120831094645%2flogopedia%2fimages%2fb%2fb3%2fShell_1961.png&ehk=kp7aftlj87lR9qI9Oc3x%2fbSjA2Ne89kXgTqSw7%2b4Juc%3d&risl=&pid=ImgRaw&r=0" >
             <div class="layer">
                 <h3>Shell</h3>
             </div>
         </div>
         <div class="oil-col">
                <img src="https://th.bing.com/th/id/OIP.Zl_4teaLaco7qjAJTugExwHaEl?pid=ImgDet&w=960&h=595&rs=1">
                <div class="layer">
                 <h3>Servo</h3>
             </div>
             </div>
         <div class="oil-col">
             <img src="https://ih1.redbubble.net/image.1050875725.5224/st,small,507x507-pad,600x600,f8f8f8.u1.jpg">
             <div class="layer">
                 <h3>Mobil</h3>
             </div>
             </div>
         </div>


         <div class="row">
         <div class="about-right">
            <h3>Service Price</h3>
            <div>
                <span>SERVICES</span>
                <span>COST</span>
            </div>
            <div>
                <span>Engine oil change and oil filter change</span>
                <span>300</span>
            </div>
            <div>
                <span>Gear box oil change</span>
                <span>150</span>
            </div>
            <div>
                <span>Housing(differential) oil change</span>
                <span>150</span>
                
            </div>
            <div>
                <span>Power steering oil change or /top-up</span>
                <span>75</span>
            </div>
            <div>
                <span>Fuel filter change</span>
                <span>50</span>
            </div>
            <div>
                <span>Break fluid /top-up</span>
                <span>100</span>
            </div>
            <div>
                <span>Air filter change or cleaning</span>
                <span>100</span>
            </div>

            <div>
                <span>Hydraulic oil change</span>
                <span>500</span>
            </div>
        </div>
    </div>
</section>

         
         




<!---------------------------------TABLE---------------------------->

<section class="  booking ">
    <div class="row">
       
        <div class="forms"> 
              <div><h3>BOOK <a>NOW</a></h3></div>  
               
               <form class="comment-form" method="POST">
                                    
                   <input type="text" placeholder="Enter Name" name="name">

                   <select id="dropdown" type="text" placeholder="Payment Method" name="Payment_method">
                        <option value="text">Payment Method</option>
                        <option value="cash">Cash</option>
                        <option value="card">Card</option>
                        <option value="UPI">UPI</option>

                    <input type="email" placeholder="Enter Email" name="email">

                   
                    
                    <input type="number" placeholder=" Enter Phone number" name="number">
                    
                   
                    <select id="dropdown" type="text" placeholder="Vehicle type" name="type">
                    <option value="text " disabled selected value>Vehicle Type</option>
                    <option value="Four wheeler">Four wheeler</option>
                    <option value="Three wheeler">Three wheeler</option>
                    <option value="Two wheeler">Two wheeler</option>
                   
                    <input type="text" placeholder=" Enter Vehicle brand" name="brand">
                    
                    
                    
                   
                    <select id="dropdown" type="text" placeholder=" Select Service" name="service">
                    <option value="Select Service " disabled selected value>Select Service</option>
                    <option value="">Engine oil change and oil filter change</option>
                    <option value="Gear box oil change">Gear box oil change</option>
                    <option value="Housing(differential) oil change">Housing(differential) oil change</option>
                    <option value="Power steering oil change or /top-up">Power steering oil change or /top-up</option>
                    <option value="Fuel filter change">Fuel filter change</option>
                    <option value="Break fluid /top-up">Break fluid /top-up</option>
                    <option value="Air filter change or cleaning">Air filter change or cleaning</option>
                    <option value="Hydraulic oil change">Hydraulic oil change</option>
                   
                    <input type="number" placeholder="Enter Vehicle number" name="vehicle_number">
                    
                    <select id="dropdown" type="text" placeholder=" Select Oil Brand" name="oil_type">
                        <option value="Select Oil Brand" disabled selected value>Select Oil Brand</option>
                       <option value="Castrol">Castrol</option>
                       <option value="Shell">Shell</option>
                       <option value="Veedol">Veedol</option>
                       <option value="Valvoline">Valvoline</option>
                       <option value="Servo">Servo</option>
                       <option value="Mobil">Mobil</option> 
                       <label>Appointment date:</label><br> 
                      
                     <input type="date" placeholder="Select Appointment date " name=" date" >
                      
                       <button type="submit" class="hero-btn red-btn" name="submit" > Send Message</button><br>
                      
                   
                   
               </form>
               </div>
            </div>
        </section>  
     
 <!-- ---------------footer--------------------------------- -->
      
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
