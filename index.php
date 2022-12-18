<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IEM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<section class="signup-section">
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            
            <form id="form01"action="tasks.php" method="post" class="signup-form">
                <div class="welcome-logo"><img src="assets/img/logo.jpg" alt=""></div>
                <h3>Register</h3>
                <input id="action" type="hidden" name="action" value="register">
                <div class="fname">
                    <i class="fa-solid fa-user-tie"></i>
                    <input type="text" name="fname" id="fname" placeholder="First Name..." >
                </div>
                <div class="lname">
                    <i class="fa-solid fa-user-tie"></i>
                    <input type="text" name="lname" id="lname" placeholder="Last Name..." >
                </div>
                <div class="email">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="email" id="email" placeholder="Email..." required>
                </div>
                <div class="password">
                <i class="fa-solid fa-lock"></i>
                    <input type="password" name="password" id="password" placeholder="Password..." required>
                </div>
                <?php
                $status = $_GET['status']??0;
                if($status>0):
                ?>
                <p class="alert alert-<?php if($status == 3){ echo 'success';}else{echo 'danger';}?>" role="alert">
                    <?php
                    
                    if($status){
                        echo getStatusMessage($status);
                    }
                    ?>
                </p>
                <?php
                endif;
                ?>
                <div class="row">
                    <div class="col-md-6">
                        <button type="submit" value="submit">Create Account</button>
                    </div>
                    <div id="btn1" class="col-md-6 left-border">
                        
                            <a id="login" href="#">Already have an account.</a>
                        
                    </div>
                </div>
                
                
            </form>
        </div>
    </div>
</div>
</section>



<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="assets/js/main.js"></script>
</body>
</html>