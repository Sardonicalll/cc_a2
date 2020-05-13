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
        <label for="username">Username:</label>
        <br>
        <input type="key" id="username" name="username" placeholder="Username">
        <br><br>
        <label for="username">E-mail:</label>
        <br>
        <input type="key" id="email" name="email" placeholder="E-mail">
        <br><br>
        <label for="password">Password:</label>
        <br>
        <input type="integer" id="password" name="password" placeholder="Password">
        <br><br>
        <label for="password">Confirm Password:</label>
        <br>
        <input type="integer" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password">
        <br><br>
        <input type="submit" value="Create Account">
    </form>
    <!-- Return to Login Button -->
    <br>
    Already have an account?
    <br>
    <input type="button" value="Return to login" class="returnbtn" id="returnbtn" onClick="#"/>
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
}

footer {
    background-color: #F7F7F7;
    padding: 14px 16px;
    color: #333;
    text-align: center;
    font-size: 12px;
}
</style>
<?php

?>
</html>