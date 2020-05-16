<!DOCTYPE html>
<html>
    <!-- Tab Title -->
<title>Login</title>
    <!-- Head containing stylesheet link -->
<head>
    <link rel="loginSS" href="css/loginstyles.css">
</head>
    <!-- Heaader -->
<header>
    <h1>
        Cloud Battle Arena
    </h1>
</header>
    <!-- Body -->
<body>
    <h2>
        Login
    </h2>
    <!-- Login Form -->
    <form method="post">
        <input type="key" id="username" name="username" placeholder="Username">
        <br>
        <input type="integer" id="password" name="password" placeholder="Password">
        <br><br>
        <input type="submit" value="Log In">
    </form>
    <!-- Signup Button -->
    OR
    <br>
    <input type="button" value="Create an Account" class="registerbtn" id="registerbtn" onClick="#"/>
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
<!-- Stylesheet -->
<style>
h1 {
    font-family: "Times New Roman", Times, serif;
}

body {
    margin: 0;
    font-family: "Courier New", Courier, monospace;
    text-align: center;
    color: #DDD;
    background-color: #000000;
}

h2 {
	color: #FFFFFF;
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
}

footer {
    background-color: #333;
    padding: 14px 16px;
    color: #FFFFFF;
    text-align: center;
    font-size: 12px;
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
} 
</style>
<?php

?>
</html>