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
        <a href="https://cloudcomp-a2.ts.r.appspot.com/about">About</a>
        <a href="https://cloudcomp-a2.ts.r.appspot.com/stats">Statistics</a>
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
        Choose your cloud!
    </h3>
    <div class="clouds">
    	<a class="cloud" href="#" onclick="#">
            <div>
                <h4>
                    Grass Cloud
                </h4>
                <img src="https://i.ibb.co/jvcncWy/Grass-Cloud.png" alt="grass_cloud">
                <p>
                    Grass Cloud is a grass type cloud introduced in Generation 1. Grass Cloud is a well balanced all rounder cloud that is easy to battle with! Grass Cloud is known to be very calm and leafs are known to be produced by Grass Cloud during it's attacks.
                </p>
                <br>
                </div>
            </a>
        <hr>
            <a class="cloud" href="#" onclick="#">
                <div>
                    <h4>
                        Fire Cloud
                    </h4>
					<img src="https://i.ibb.co/Qb2FKSW/Fire-Cloud.png" alt="fire_cloud">
                    <p>
                        Fire Cloud is a fire type cloud introduced in Generation 1. Fire Cloud has a strong attack but is known to be weak on it's defense making Fire Cloud a tougher cloud to battle with. Fire Cloud is known to have temper issues and it brust into flames when threaten or agitated. Myths has been said that Fire Cloud is the first Cloud to be created.
                    </p>
                <br>
                </div>
            </a>
        <hr>
            <a class="cloud" href="#" onclick="#">
                <div>
                    <h4>
                        Water Cloud
                    </h4>
                    <img src="https://i.ibb.co/PQ0VNmb/Water-Cloud.png" alt="water_cloud">
                    <p>
                        Water Cloud is a water type cloud introduced in Generation 1. Water Cloud has a strong defense but falls behind in it's attacks making it a tanky and easy to use cloud to battle with. Water Cloud is known to be calm but when agitated, Water Cloud could release a monstrous rain.
                    </p>  
                <br>
            </div>
        </a>
            <!-- Dropdown selection menu  -->
        	<!-- <select id="chosencloud" name="cloud">
              <option value="Grass Cloud">Grass Cloud</option>
              <option value="Fire Cloud Cloud">Fire Cloud</option>
              <option value="Water Cloud">Water Cloud</option>
    		</select> 
    	<br><br> -->
    </div>
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
body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    background-color: #512E5F;
    text-align: center;
    color: #FFFFFF;
  }
  
h3 {
	color: #FFFFFF;
  }
  
hr {
  width: 80%;
  color: #FFFFFF;
  }

div[class=clouds] {
	background-color: #333;
    color: white;
    text-align: center;
    text-decoration: none;
    font-size: 20px;
    width: 80%;
    padding: 15px;
    margin: auto;
  }
  
img {
	width: 150px;
}

a[class=cloud] {
    text-decoration: none;
    color: white;
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

select {
	background-color: #000000;
    border: 3px solid #FFFFFF;
    color: white;
    text-align: center;
    text-decoration: none;
    font-size: 20px;
  }
  
footer {
    background-color: #333;
    padding: 14px 16px;
    color: #FFFFFF;
    text-align: center;
    font-size: 12px;
    position: static;
    left: 0;
    bottom: 0;
    width: 100%;
  }
</style>
<?php

?>
</html>