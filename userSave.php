<?php

$userfname = $_GET['fname'];
$userlname = $_GET['lname'];
$useremail = $_GET['email'];
$usercontact = $_GET['contact'];
$usermemo = $_GET['memo'];

$userList = fopen("userdatabase.txt", 'w');
fwrite($userList, $userfname);
fwrite($userList, $userlname);
fwrite($userList, $useremail);
fwrite($userList, $usercontact);
fwrite($userList, $usermemo);
fclose($userList);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Save</title>
</head>
<body>
   <h1>CONTACT SAVE!</h1>
</body>
</html>






 <!-- <?php

// $contents = file_get_contents('database.txt');
// $lines = explode("\n", $contents);
// $user = [];



// foreach ($lines as $line) {
//     //list($fname, $lname, $email, $contact, memo)
//     $data = explode(',', $line);

//     if($_GET['fname'] == $data[0])
//     {
//         $user['fname'] = $data[0];
//         $user['lname'] = $data[1];
//         $user['email'] = $data[2];
//         $user['contact'] = $data[3];
//         $user['memo'] = $data[4];

//         break;
//     }
// }

?>
 -->

