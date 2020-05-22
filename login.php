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

$id1 = $datastore->key(user, 's3717184');
$id2 = $datastore->key(user, 's3700032');
$id3 = $datastore->key(user, 's3765432');

$u1 = $datastore->lookup($id1);
$u2 = $datastore->lookup($id2);
$u3 = $datastore->lookup($id3);
//echo $u1['name'] . "   " . $u2['name'] . "   " . $u3['name'];

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
        echo "<script type='text/javascript'>window.top.location='https://cloudcomp-a2.ts.r.appspot.com/main';</script>";
        exit;
    } elseif ($uid == $u2['name'] and $pword == $u2['password']) {

        $idcorrect = true;
        $_SESSION['user'] = $uid;
        $_SESSION['profile'] = $u2;
        $_SESSION['id'] = 2;
        $pwordcorrect = true;
        $_SESSION['password'] = $pword;
        echo "<script type='text/javascript'>window.top.location='https://cloudcomp-a2.ts.r.appspot.com/main';</script>";
        exit;
    } elseif ($uid == $u3['name'] and  $pword == $u3['password']) {

        $idcorrect = true;
        $_SESSION['user'] = $uid;
        $_SESSION['profile'] = $u3;
        $pwordcorrect = true;
        $_SESSION['id'] = 3;
        $_SESSION['password'] = $pword;
        echo "<script type='text/javascript'>window.top.location='https://cloudcomp-a2.ts.r.appspot.com/main';</script>";
        exit;
    } else {
        echo "User ID is wrong";
    }
}

if ($idcorrect == true and $pwordcorrect == true) {
}
?>
    <h2>Login</h2>

    <form method="post">
        <br>
        <input type="text" id="uid" name="uid" placeholder="User ID"><br>
        <br>
        <input type="text" id="pword" name="pword" placeholder="Password"><br><br>
        <input type="submit" value="Submit">
    </form>
    <br><br>
    Not a member yet? Create an account
    <a class="herebtn" href="https://cloudcomp-a2.ts.r.appspot.com/register">here</a>!

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

a {
    color: #00FF00;
}
</style>

</html>