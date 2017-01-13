<?php


$userList = fopen("userdatabase.txt", 'w');
fwrite($userList, $userfname);
fwrite($userList, $userlname);
fwrite($userList, $useremail);
fwrite($userList, $usercontact);
fwrite($userList, $usermemo);
fclose($userList);

$userList = fopen("userdatabase.txt", 'r');
$userInfo = fgets($userList);
fclose($userList);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>PhoneBook</h1>
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
                <td><?php echo $userInfo['fname']; ?></td>
                <td><?php echo $userInfo['lname']; ?></td>
                <td><?php echo $userInfo['email']; ?></td>
                <td><?php echo $userInfo['contact']; ?></td>
                <td><?php echo $userInfo['memo']; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
