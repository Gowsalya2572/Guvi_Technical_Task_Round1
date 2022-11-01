<?php
require 'function.php';
if(isset($_SESSION["id"])){
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <link rel="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <div class="full-page">
        <div class="navbar">
            <div >
             <a href='website.html'>LOGIN PAGE</a>
            </div>
            <nav>
                <ul id='MenuItem'>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><button class='loginbtn' onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Login
                    </button></li>
                </ul>
            </nav>
        </div>
        <div id='login-form' class="login-page">
            <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" onclick="login()" class="toggle-btn" >Log In</button>
                <button type="button" onclick="register()" class="toggle-btn" >Register</button>
                </div>
                <form id="login" action="" class="input-group-login">
                    <input type="hidden" id="action" value="login">
                    <input type="text" class="input-field" id="username" placeholder="Username" required>
                    <input type="password" class="input-field" id="password" placeholder="Enter Password" required>
                    <input type="checkbox" class="check-box"><span>Remember Password</span>
                    <button type="submit" class="submit-btn" onclick="submitData()">Log In</button>
                    <?php require 'script.php'; ?>
                </form>
                <form id="register" action="" class="input-group-register">
                    <input type="hidden" id="action" value="register">
                    <input type="text" class="input-field" id="name" placeholder="Name" required>
                    <input type="text" class="input-field" id="username" placeholder="Username" required>
                    <input type="password" class="input-field" id="password" placeholder="Enter Password" required>
                    <input type="checkbox" class="check-box"><span>I agree to the terms and conditions</span>
                    <button type="button" class="submit-btn" onclick="submitData();">Register</button>
                    <?php require 'script.php'; ?>
                 </form>
            </div>
        </div>
    </div>
    <script>
        var x=document.getElementById('login');
        var y=document.getElementById('register');
        var z=document.getElementById('btn');
        function register()
        {
            x.style.left='-400px';
            y.style.left='50px';
            z.style.left='110px';
        }
        function login()
        {
            x.style.left='50px';
            y.style.left='450px';
            z.style.left='0px';
        }
    </script>
    <script>
        var modal= document.getElementById('login-form');
        window.onclick =function(event)
        {
            if(event.target==modal)
            {
                modal.style.display="none";
            }
        }
    </script>
</body>
</html>