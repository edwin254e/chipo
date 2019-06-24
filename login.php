<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="styles.css">
    <title>welcome to log in</title>
    
  
 
</head>
<body>
    <div class=" container-fluid acol-md-12 wrap">

    <div class="container text-center">
<div class="row">
    <div class="col-md-5 col-wrap ">

    <img src="images/del.jpg" alt="" class="img-fluid rounded" width="100%" height="auto"> 
    </div>
        <div class="col-sm-7 login">


                <form class="text-center " action="../include.info/login.inc.php" method="post" name="registerForm" onsubmit="return validate()">
                
                <p class="h4 mb-4">Sign in</p>
                
                <!-- Email -->
                <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail" name="email">
                
                <!-- Password -->
                <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password" name="password">
                
                <div class="d-flex justify-content-around">
                <div>
                    <!-- Remember me -->
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                        <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                    </div>
                </div>
                <div>
                    <!-- Forgot password -->
                    <a href="">Forgot password?</a>
                </div>
                </div>
                
                <!-- Sign in button -->
                <button class="btn btn-info btn-block my-4" type="submit" name="login">Sign in</button>
                
                <!-- Register -->
                <p>Not a member?
                <a href="register.php" target="_self">Register</a>
                </p>
                
                <!-- Social login -->
                
                <a type="button" class="light-blue-text mx-2">
                <i class="fab fa-facebook-f"></i>
                </a>
                <a type="button" class="light-blue-text mx-2">
                <i class="fab fa-twitter"></i>
                </a>
                <a type="button" class="light-blue-text mx-2">
                <i class="fab fa-linkedin-in"></i>
                </a>
                <a type="button" class="light-blue-text mx-2">
                <i class="fab fa-github"></i>
                </a>
                
                </form>
                
                </div>
                
                
                    </div>
   
    </div>
    
<script src="main.js"></script>
</body>
</html>

