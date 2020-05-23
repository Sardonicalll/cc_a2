<!DOCTYPE html>
<html>
    <!-- Tab Title -->
<title>Register</title>
    <!-- Head containing stylesheet link -->
<head>
    <link rel="loginSS" href="css/loginstyles.css">
</head>
    <!-- Header -->
<header>
    <h1>
        Create an Account
    </h1>
</header>
    <!-- Body -->
<body>
    <!-- PHP -->
<?php
    session_start();

    putenv('s3700032 CC-d0ac9e92faf7.json');
    
    # Includes the autoloader for libraries installed with composer
    require __DIR__ . '/vendor/autoload.php';
    
    # Imports the Google Cloud client library
    use Google\Cloud\Datastore\DatastoreClient;
    
    # Your Google Cloud Platform project ID
    $projectId = 'cloudcomp-a2';
    
    # Instantiates a client
    $datastore = new DatastoreClient([
        'projectId' => $projectId
    ]);
    
    $uid;
    $pword;
    $email;

    $key = $datastore->key('account', 's3700032');
    $task = $datastore->lookup($key);   

    echo $key;
    echo $task;
    echo $pword;
?>
    <!-- Registration Form -->
    <form method="post">
        <input type="text" id="uid" name="uid" placeholder="Username" required="required">
        <br>
        <input type="string" id="email" name="email" placeholder="E-mail" required="required">
        <br>
        <input type="text" id="pword" name="pword" placeholder="Password" required="required">
        <br><br>
        <input type="submit" value="Create Account">
    </form>
    <!-- Return to Login Button -->
    <br>
    Already have an account?
    <br><br>
    <a class="loginbtn" href="https://cloudcomp-a2.ts.r.appspot.com/">Return to Login Page</a>
    <br><br>
</body>
    <!-- Footer -->
<footer>

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
</style>
<?php

?>
</html>