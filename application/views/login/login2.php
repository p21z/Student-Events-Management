<?php
    // session_start(); 
    // print_r($_SESSION);
    // session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url()?>Template/css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link href="template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="<?base_url()?>template/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?base_url()?>template/css/main.css" rel="stylesheet">

    
    <title>School Events Management System</title>
</head>

<body>
<section>
    
    <div class="form-container">
            <h1>School 
            <br>Events Management System</h1>
            <br>
            <?php
                if (isset($_SESSION['login'])){
                    if ($_SESSION['login']==1){
                        echo "
                            <div class='card border-bottom-danger text-danger'>
                                <div class='card-body' style='border-bottom-color: #d9534f; border-bottom-style: solid; border-bottom-width: thick;'>
                                Invalid Username or Password
                                </div> 
                            </div><br>";
                            unset($_SESSION['login']);
                    }
                }
                if (isset($_SESSION['login'])){
                    if ($_SESSION['login']==2){
                        echo "
                            <div class='card' style='border-bottom-color: #d9534f; border-bottom-style: solid; border-bottom-width: thick;'>
                                <div class='card-body text-danger'>
                                <b style='font-size:20px; text-align:center;'>Account Disabled</b> <p> Reset your password or contact the Admin to get help</p>
                                </div>
                            </div>";
                            unset($_SESSION['login']);
                    }
                }
            ?>
    
        <form method=post action="<?=base_url()?>login/login_proc">

            <div class="control">
            <label for="name">Username</label>
                <input type="text" name="username"required autocomplete="off" class="form-control form-control-user">

            <div class="control">
            <label for="name">Password</label>
                <input type="password" name="password" required autocomplete="off" class="form-control form-control-user" >

                <div id="box-container">
                    <div id="box1">
                        <input type="submit" value="Login" class="btn btn-success text-white" style="margin-top: 10px; width: 99%;">
                    </div>
                    <div id="box2">
                        <a href="<?=base_url()?>login/forgot_pass" class="btn btn-secondary text-white" style="margin-top: 10px; width: 99%; padding: 7px">Forgot Password</a>
                    </div>
                </div>
        </form>
</section>

        <video class="video-container" poster="<?=base_url()?>assets/img/SITE.jpg" autoplay loop muted> 
            <source src="<?=base_url()?>assets/img/SITE.m4v" type="video/mp4">
        </video>

</body>
</html>