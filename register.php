<!DOCTYPE html>
<html>
    <!-- Tab Title -->
<title>Register</title>
    <!-- Header -->
<header>
    <h1>
        Create an Account
    </h1>
</header>
    <!-- Body -->
<body>
    <!-- Registration Form -->
    <form method="post">
        <input type="key" id="username" name="username" placeholder="Username">
        <br>
        <input type="key" id="email" name="email" placeholder="E-mail">
        <br>
        <input type="integer" id="password" name="password" placeholder="Password">
        <br>
        <input type="integer" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password">
        <br><br>
        <input type="submit" value="Create Account">
    </form>
    <!-- Return to Login Button -->
    <br>
    Already have an account?
    <br>
    <input type="button" value="Return to Login Page" class="returnbtn" id="returnbtn" onClick="#"/>
    <br><br>
</body>
    <!-- Footer -->
<footer>
    <p>
        A Cloud Computing Assignment 2
        <br>
        Created by:
        <br>
        Caleb McCash | s3717184
        <br>
        De Yie Lu | s3700032
    </p>
</footer>
   <!-- Style -->
<style>
header {
	
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  text-align: center;
  color: #DDD;
  background-color: #000000;
}

input[type=key] {
	border: none;
    border-bottom: 2px solid #1ad33d;
    padding: 12px 20px;
    font-size: 15px;
    color: #DDD;
    background-color: #111111;
}

input[type=integer] {
	border: none;
    border-bottom: 2px solid #1ad33d;
    padding: 12px 20px;
    font-size: 15px;
    color: #DDD;
    background-color: #111111;
}

input[type=submit] {
	background-color: #000000;
  border: 2px solid #1ad33d;
  color: white;
  padding: 8px 28px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 18px;
  width: 24%;
}

input[type=button] {
	background-color: #000000;
  border: 2px solid #1ad33d;
  color: white;
  padding: 8px 28px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 18px;
  width: 24%;
}

footer {
    background-color: #333333;
    padding: 14px 16px;
    color: #DDD;
    text-align: center;
    font-size: 12px;
}
</style>
<?php

?>
</html>