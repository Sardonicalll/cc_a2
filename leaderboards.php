<!DOCTYPE html>
<html>
    <!-- Tab Title -->
<title>Leaderboards</title>
    <!-- Head containing stylesheet link -->
<head>
    <link rel="mainSS" href="css/mainstyles.css">
</head>
    <!-- Navigation Menu -->
<nav>
    <div class="topnav">
        <a href="https://www.cloudbattlearena.com/main">Home</a>
        <a href="https://www.cloudbattlearena.com/account">My Account</a>
        <a class="active" href="https://www.cloudbattlearena.com/leaderboards">Leaderboard</a>
        <a href="https://www.cloudbattlearena.com/">Logout</a>
    </div>
</nav>
    <!-- Header -->
<header>
    <h2>Cloud Battle Arena Leaderboards</h2>
</header>
    <!-- Body -->
<body>
    <?php
    // function list_tasks(DatastoreClient $datastore) {
    //     $query = $datastore->query()
    //         ->kind('account')
    //         ->filter('uid')
    //         ->filter('elo')
    //         ->order('elo', Query::ORDER_ASCENDING);
    //     $querysearch = $datastore->runQuery($query);
    //     foreach ($querysearch as $topelo) {
    //         echo $topelo['elo'];
    //     }
    // };
    ?>
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