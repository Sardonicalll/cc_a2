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
?>

    <!-- Registration Form -->
    <form method="post">
        <input type="text" id="uid" name="uid" placeholder="Username" required="required">
        <br>
        <input type="email" id="email" name="email" placeholder="E-mail" required="required">
        <br>
        <input type="text" id="pword" name="pword" placeholder="Password" required="required">
        <br><br>
        <?php
            
            $email = "";
            $uid = "";
            $pword = "";

            // Date function
            $time = time();
            $date = date('Y-m-d', $time);

            // Insert new entity into datastore
            $account = $datastore->entity('account', [
                'uid' => $_POST['uid'],
                'pword' => $_POST['pword'],
                'email' => $_POST['email'],
                'elo' => '100',
                'created' => $date
            ]);
            $datastore->insert($account);
        ?>
        <input type="submit" value="Create Account" href="http://www.cloudbattlearena.com"> 
    </form>
    <!-- Return to Login Button -->
    <br>
    Already have an account?
    <br><br>
    <a class="loginbtn" href="http://www.cloudbattlearena.com">Return to Login Page</a>
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
    border: 2px solid #8900BF;
    color: white;
    padding: 8px 28px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    font-family: helvetica;
}

input[type=email] {
	border: none;
    border-bottom: 2px solid #8900BF;
    padding: 12px 20px;
    font-size: 15px;
    color: #DDD;
    background-color: #000000;
}

input[type=text] {
	border: none;
    border-bottom: 2px solid #8900BF;
    padding: 12px 20px;
    font-size: 15px;
    color: #DDD;
    background-color: #000000;
}

input[type=submit] {
    background-color: #000000;
    border: 2px solid #8900BF;
    color: white;
    padding: 8px 28px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
}

input[type=button] {
	background-color: #000000;
    border: 2px solid #8900BF;
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