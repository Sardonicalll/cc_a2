<?PHP

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


# This section needs to change, somehow create an array with all the datastore so it can dynamically grow as more users come in.
$id1 = $datastore->key(user, 's3717184');
$id2 = $datastore->key(user, 's37171841');
$id3 = $datastore->key(user, 's37171842');

$u1 = $datastore->lookup($id1);
$u2 = $datastore->lookup($id2);
$u3 = $datastore->lookup($id3);
# ---------------------------------------------------------------------------------------


# Some of this needs changing, will fix when i have gcloud access
echo $uid . "       " . $pword;
if (array_key_exists('uid', $_POST)) {

    $uid = ($_POST['uid']);
    $pword = ($_POST['pword']);

    if ($uid = $u1['name'] and $pword = $u1['password']) {


        $_SESSION['user'] = $uid;
        $_SESSION['profile'] = $u1;
        $_SESSION['id'] = 1;
        $pwordcorrect = true;
        $_SESSION['password'] = $pword;
        $pwordcorrect = true;


        # This exists because if you have pre-existing echos in the php, it doesnt allow redirects
        echo "<script type='text/javascript'>window.top.location='PLACEHOLDER';</script>";
        exit;
    } elseif ($uid == $u2['name'] and $pword == $u2['password']) {


        $idcorrect = true;
        $_SESSION['user'] = $uid;
        $_SESSION['profile'] = $u2;
        $_SESSION['id'] = 2;
        $pwordcorrect = true;
        $_SESSION['password'] = $pword;


         # This exists because if you have pre-existing echos in the php, it doesnt allow redirects
        echo "<script type='text/javascript'>window.top.location='PLACEHOLDER';</script>";
        exit;
    } elseif ($uid == $u3['name'] and  $pword == $u3['password']) {


        $idcorrect = true;
        $_SESSION['user'] = $uid;
        $_SESSION['profile'] = $u3;
        $pwordcorrect = true;
        $_SESSION['id'] = 3;
        $_SESSION['password'] = $pword;


        # This exists because if you have pre-existing echos in the php, it doesnt allow redirects
        echo "<script type='text/javascript'>window.top.location='PLACEHOLDER';</script>";
        exit;
    } else {
        echo "User ID is wrong";
    }
}


if ($idcorrect == true and $pwordcorrect == true) {
}




?>







<!DOCTYPE html>
<html>
    <!-- Tab Title -->
<title>Login</title>
    <!-- Head containing stylesheet link -->
<head>
    <link rel="loginSS" href="css/loginstyles.css">
</head>
    <!-- Header -->
<header>
    <h1>
        Login
    </h1>
</header>
    <!-- Body -->
<body>
    <!-- Login Form -->
    <form method="post">
        <input type="key" id="username" name="username" placeholder="Username">
        <br>
        <input type="integer" id="password" name="password" placeholder="Password">
        <br><br>
        <input type="submit" value="Log In">
    </form>
    <!-- Signup Button -->
    <br>
    OR
    <br><br>
    <a class="registerbtn" href="https://cloudcomp-a2.ts.r.appspot.com/register">Create an Account</a>
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

input[type=key] {
	border: none;
    border-bottom: 2px solid #1ad33d;
    padding: 12px 20px;
    font-size: 15px;
    color: #DDD;
    background-color: #000000;
}

input[type=integer] {
	border: none;
    border-bottom: 2px solid #1ad33d;
    padding: 12px 20px;
    font-size: 15px;
    color: #DDD;
    background-color: #000000;
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