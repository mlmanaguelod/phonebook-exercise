<?php
    $usersList = fopen("database.txt", "a+");
    $inputTxt = "Firstname: ".$_POST['fname']." -> Lastname: ".$_POST['lname'];
    fwrite($usersList, $inputTxt);
    fclose($usersList);



?>






<!-- <?php


$users = [
        [
            'fname' => 'Maria Laarni',
            'lname' => 'Managuelod',
            'email' => 'mlm.managuelod@gmail.com',
            'contact' => '09176764690',
            'memo' => 'Hello world!'
        ],

        [
            'fname' => 'Maria Laarni',
            'lname' => 'Managuelod',
            'email' => 'mlm.managuelod@gmail.com',
            'contact' => '09176764690',
            'memo' => 'Hello world!'
        ]
    ];


?> -->

<!-- <table>
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
        <?php foreach($users as $user): ?>
        <tr>
            <td><a href="users.php?fname=<?php echo $user['fname']; ?>"> --><?php echo $user['fname']; ?></a></td>
            <td><?php echo $user['lname']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td><?php echo $user['contact']; ?></td>
            <td><?php echo $user['memo']; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table> -->