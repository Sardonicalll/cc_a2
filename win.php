<!DOCTYPE html>
<html>
    <!-- Tab Title -->
<title>Cloud Battle Arena</title>
    <!-- Head containing stylesheet link -->
<head>
    <link rel="mainSS" href="css/mainstyles.css">
</head>
    <!-- Navigation Menu -->
<nav>
    <div class="topnav">
        <a href="https://cloudcomp-a2.ts.r.appspot.com/main">Home</a>
        <a href="https://cloudcomp-a2.ts.r.appspot.com/account">My Account</a>
        <a href="https://cloudcomp-a2.ts.r.appspot.com/leaderboards">Leaderboard</a>
        <a href="https://cloudcomp-a2.ts.r.appspot.com/">Logout</a>
    </div>
</nav>
    <!-- Header -->
<header>
    <h2>Cloud Battle Arena</h2>
</header>
    <!-- Body -->
<body>
    <h3>
        You won!
    </h3>
    <br><br>
    <p>
        You have gained <?php ?> elo!
        <br><br>
        Current elo rating: <?php ?>
    </p>
    <br><br>
    <a class="gamebtn" href="https://cloudcomp-a2.ts.r.appspot.com/game">Battle Again!</a>
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