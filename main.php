<!DOCTYPE html>
<html>
    <!-- Tab Title -->
<title>Main</title>
    <!-- Head containing stylesheet link -->
<head>
    <link rel="mainSS" href="css/mainstyles.css">
</head>
    <!-- Navigation Menu -->
<nav>
    <div class="topnav">
        <a class="active" href="hhttps://www.cloudbattlearena.com/main">Home</a>
        <a href="https://www.cloudbattlearena.comaccount">My Account</a>
        <a href="https://www.cloudbattlearena.com/leaderboards">Leaderboard</a>
        <a href="https://www.cloudbattlearena.com/">Logout</a>
    </div>
</nav>
    <!-- Header -->
<header>
    <h2>Cloud Battle Arena</h2>
</header>
    <!-- Body -->
<body>
    <p>
        Welcome to Cloud Battle Arena 
        <?
        session_start();
        echo  $_SESSION['user'];
        ?>
        ! A turn based RPG game which battles various cloud services.
    </p>
    <h3>
        Latest Updates
    </h3>
	<p>
    	Fire Cloud, Grass Cloud and Water Cloud has been added into the game.
    </p>
    <br><br>
    <a class="gamebtn" href="http://www.cloudbattlearena.com/game">Battle Now!</a>
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
body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    color: #FFF;
    text-align: center;
    background-color: #111;
  }
  
a[class=gamebtn] {
	background-color: #000000;
    border: 2px solid #8900BF;
    color: white;
    padding: 8px 28px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 28px;
    font-family: helvetica;
}
  
.topnav {
    overflow: hidden;
    background-color: #333;
  }
  
.topnav a {
    float: left;
    color: #ddd;
    text-align: center;
    padding: 12px 14px;
    text-decoration: none;
    font-size: 17px;
  }
  
.topnav a:hover {
    background-color: #ccc;
    color: black;
  }
  
.topnav a.active {
    background-color: #8900BF;
    color: white;
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
</html>