<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

    <div class="container">

        <form action="users.php" method="POST">
            <div class="form-fname">
                <h4>First Name: </h4>
                <input class="input-box" type="text" name="fname">
            </div>
            <div class="form-lname">
                <h4>Last Name: </h4>
                <input class="input-box" type="text" name="lname">
            </div>
            <div class="form-email">
                <h4>Email: </h4>
                <input class="input-box" type="text" name="email">
            </div>
            <div class="form-contact">
                <h4>Contact: </h4>
                <input class="input-box" type="text" name="contact">
            </div>
            <div class="text-memo">
                <h4>MEMO:</h4>
                <textarea class="memotxt" name="memo">
                </textarea>
            </div>
        </form>

        <form action="userSave.php" method="GET">
            <div class="save-btn">
                <button type="submit">SAVE</button>
            </div>
        </form>

        <form action="viewPB.php" method="POST">
            <div class="view-btn">
                <button type="submit">VIEW PHONEBOOK</button>
            </div>
        </form>

    </div>

</body>
</html>