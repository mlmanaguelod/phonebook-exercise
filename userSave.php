<?php

$userfname = $_GET['fname'];
$userlname = $_GET['lname'];
$useremail = $_GET['email'];
$usercontact = $_GET['contact'];
$usermemo = $_GET['memo'];


echo "The firstname you entered is: " . $userfname . "<br />";
echo "The lastname you entered is: " . $userlname . "<br />";
echo "The email you entered is: " . $useremail . "<br />";
echo "The contact you entered is: " . $usercontact . "<br />";
echo "The memo you entered is: " . $usermemo . "<br />";


?>














<!-- <?php

$contents = file_get_contents('database.txt');
$lines = explode("\n", $contents);
$user = [];



foreach ($lines as $line) {
    //list($fname, $lname, $email, $contact, memo)
    $data = explode(',', $line);

    if($_GET['fname'] == $data[0])
    {
        $user['fname'] = $data[0];
        $user['lname'] = $data[1];
        $user['email'] = $data[2];
        $user['contact'] = $data[3];
        $user['memo'] = $data[4];

        break;
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <p><?php echo $user['fname']; ?>, '<br>' <?php echo $user['lname']; ?>, '<br>' <?php echo $user['email']; ?>, '<br>' <?php echo $user['contact']; ?>, '<br>' <?php echo $user['memo']; ?></p>
</body>
</html> -->