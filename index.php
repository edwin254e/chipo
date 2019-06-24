<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="custom.css">
    <title>Welcome to Chipohoby homepage</title>
</head>
<body>
<header>
<nav>
<div class="menu_toggle"><img src="images/bars.svg" alt=""></div>
<div class="logo">ChipoHoby</div>
<div class="menu">
<ul>
<li><a href="" class="active">Home</a></li>
<li><a href="">about</a></li>
<li><a href="">Contact</a></li>
<li><a href="">events</a></li>
<li><a href="reserve.php">booking</a></li>
</ul>
</div>

  </nav>

</header>

<div class="container-fluid text-center">
    <div class="showcase">
<h2>special of the week</h2>


    </div>
    <section id="section-c " class="row services">
    <div class="col-md-12 text-center">   <h2>Here is Our Services</h2></div>
      <div class="col-md-4 ">
     
      <div class="card" width="100%" >
      <img class="img-fluid" src="images/car.svg" alt="Card image cap" >
      <div class="card-body">
        <h5 class="card-title">Delivery Services</h5>
        <p class="card-text">we offer home and office delivery. From food delivery, parcels, clothes and services, we deliver on time and our delivery fees are the lowest in town</p>
        <a href="#" class="btn btn-primary">Ask for delivery</a>
      </div>
    </div>
        </div>
     
        <div class="col-md-4 ">
    
        <div class="card" >
      <img class="img-fluid" src="images/money-check-alt.svg" alt="Card image cap" >
      <div class="card-body">
        <h5 class="card-title">Online Marketing</h5>
        <p class="card-text">We offer online marketing for our customers, we have a crowdy site that enables our clients to interact with customers from various parts of the country.</p>
        <a href="#" class="btn btn-primary">Check for offers</a>
      </div>
    </div>
        
        </div>
        <div  class="col-md-4 ">
         
        <div class="card" >
        <img class="img-fluid" src="images/html5.svg" alt="Card image cap" >
      <div class="card-body">
        <h5 class="card-title">Web development</h5>
        <p class="card-text">For those who would like to have their own business website, for marketing and product or service presentatons, please contact us and we shall asist you.</p>
        <a href="#" class="btn btn-primary">check for offers</a>
      </div>
    </div>
      
        </div>
      </section>
    
    </div>
     <footer class="mainFooter text-center">
       
    &copy;linkEAZY 2018-<?php echo Date("y")?>
     </footer>

<script src="jquery-3.4.1.slim.min.js"></script>
  <script src="script.js"></script>
  <script>
  $(document).ready(function(){
$(".menu_toggle"). on("click", function(){
  $("nav ul").toggleClass("showing");
});
});
$(window).on("scroll",function(){
  if($(window).scrollTop()){
    $('nav').addClass('black');
  }else{
    $('nav').removeClass('black')
  }
});
</script>
</body>
</html>