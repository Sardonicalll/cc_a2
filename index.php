<?php

session_start();

putenv('PLACEHOLDER');

# Includes the autoloader for libraries installed with composer
require __DIR__ . '/vendor/autoload.php';

# Imports the Google Cloud client library
use Google\Cloud\Datastore\DatastoreClient;

# Your Google Cloud Platform project ID
$projectId = 'PLACEHOLDER';

# Instantiates a client
$datastore = new DatastoreClient([
    'projectId' => $projectId
]);

$idcorrect = false;
$pwordcorrect = false;
$uid;
$pword;

$id1 = $datastore->key(user, 's3717184');
$id2 = $datastore->key(user, 's37171841');
$id3 = $datastore->key(user, 's37171842');

$u1 = $datastore->lookup($id1);
$u2 = $datastore->lookup($id2);
$u3 = $datastore->lookup($id3);
//echo $u1['name'] . "   " . $u2['name'] . "   " . $u3['name'];





?>


<!DOCTYPE html>
<html>
    <!-- Tab Title -->
<title>Cloud Battle Arena</title>
    <!-- Head containing stylesheet link -->
<head>
    <link rel="indexSS" href="css/indexstyles.css">
</head>
    <!-- Header -->
<header>
    <h1>
        Welcome to Cloud Battle Arena
    </h1>
</header>
    <!-- Body -->
<body>
    <p>
        A Cloud Computing Assignment 2
        <br><br>
        Created by:
        <br>
        Caleb McCash | s3717184
        <br>
        De Yie Lu | s3700032
    </p>
    <br>
    <a class="loginbtn" href="https://cloudcomp-a2.ts.r.appspot.com/login">Proceed to Login</a>
    <br>
</body>
<!-- Stylesheet -->
<style>
h1 {
    font-family: "Times New Roman", Times, serif;
}

a {
	background-color: #000000;
    border: 2px solid #1ad33d;
    color: white;
    padding: 8px 28px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    font-family: helvetica;
}

body {
    margin: 0;
    font-family: "Courier New", Courier, monospace;
    text-align: center;
    color: #DDD;
    background-color: #000000;
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
</style>

</html>