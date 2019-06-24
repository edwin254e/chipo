<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="custom.css">
    <title>Welcome to LinkEAZY homepage</title>
</head>
<body>
<header>
<nav>
<div class="menu_toggle"><img src="images/bars.svg" alt=""></div>
<div class="logo">LinkEAZY</div>
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
    <div class="container-fluid wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-wrap">
               <img src="images/del.jpg" alt="" class="img-fluid rounded" width="100%" height="auto"> 
            </div>

        <div class="col-md-7 register">

<form class="text-center" action="../include.info/register.inc.php" method="post" >

<p class="h4 mb-4">Sign up</p>

<div class="form-row mb-4">
   <div class="col">
       <!-- First name -->
       <label for="firstName">First Name</label>
       <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name" name="firstName" id="firstName">

   </div>
   <div class="col">
       <!-- Last name -->
       <label for="lastname">Last Name:</label>
       <input type="text"  class="form-control" placeholder="Last name" name="secondName" id="secondName">
   
   </div>
</div>

<!-- E-mail -->
<label for="email">Email:</label>
<input type="email"  class="form-control mb-4" placeholder="E-mail" name="email" id="email">


<label for="password">Password:</label>
<input type="password"  class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock" name="password" id="password">

<label for="repeat_password">Confirm Password:</label>
<input type="password"  class="form-control" placeholder="Password_repeat" aria-describedby="defaultRegisterFormPasswordHelpBlock" name="repeat_password" id="repeatPassword">

<!-- Sign up button -->
<button class="btn btn-info my-4 btn-block" type="submit" name="submit">Sign Up</button>

<!-- Social register -->

<hr>

<!-- Terms of service -->
<p><em>if you already have an account please</em>
   <a href="login.php" target="_self">login here</a>
</p>
</form>
<!-- Default form register -->

</div>
<!-- Default form register -->


        </div>
   
    </div>

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
   
