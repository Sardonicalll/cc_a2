<!DOCTYPE html>
<html>

<?PHP
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

$idcorrect = false;
$pwordcorrect = false;
$uid;
$pword;

$id1 = $datastore->key(account, 'id=5079418695319552');

$user = $datastore->lookup($id1);


echo $uid . "       " . $pword;
if (array_key_exists('uid', $_POST)) {

    $uid = ($_POST['uid']);
    $pword = ($_POST['pword']);

    if ($uid = $u1['name'] and $pword = $u1['password']) {

        $_SESSION['uid'] = $uid;
        $_SESSION['profile'] = $u1;
        $_SESSION['id'] = 1;
        $pwordcorrect = true;
        $_SESSION['pword'] = $pword;
        $pwordcorrect = true;
        echo "<script type='text/javascript'>window.top.location='http://www.cloudbattlearena.com/main';</script>";
        exit;
    } 
}


if ($idcorrect == true and $pwordcorrect == true) {
}

?>

<body>
    <h2>Login</h2>

    <form method="post">
        <br>
        <input type="text" id="uid" name="uid" placeholder="User ID" required="required"><br>
        <br>
        <input type="text" id="pword" name="pword" placeholder="Password" required="required"><br><br>
        <input type="submit" value="Submit">
    </form>
    <br><br>
    Not a member yet? Create an account
    <a class="herebtn" href="http://www.cloudbattlearena.com/register">here</a>!

</body>

<style>
body {
    margin: 0;
    font-family: "Courier New", Courier, monospace;
    text-align: center;
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

a {
    color: #00FF00;
}
</style>

</html>