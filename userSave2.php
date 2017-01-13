<?php

$userfname = $_POST['fname'];
$userlname = $_POST['lname'];
$useremail = $_POST['email'];
$usercontact = $_POST['contact'];
$usermemo = $_POST['memo'];

$userList = fOpen("database.txt", 'w');
fwrite($userList, $userfname);
fwrite($userList, $userlname);
fwrite($userList, $useremail);
fwrite($userList, $usercontact);
fwrite($userList, $usermemo);
fclose($userList);

$userList = fOpen("database.txt", 'r');
$userInfo = fgets($userList);
fclose($userList);

?>



<table>
    <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Memo</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $userList['fname']; ?></td>
            <td><?php echo $userList['lname']; ?></td>
            <td><?php echo $userList['email']; ?></td>
            <td><?php echo $userList['contact']; ?></td>
            <td><?php echo $userList['memo']; ?></td>
        </tr>
    </tbody>
</table>














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