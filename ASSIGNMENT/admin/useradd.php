<?php include_once "../classes/users_class.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $user = new users_class();
        if (isset($_POST['txtName']) && isset($_POST['txtEmail']) && isset($_POST['txtPass'])){
            $int_user = $user->insert_user($_POST['txtName'], $_POST['txtEmail'], $_POST['txtPass']);
        }
        if (isset($int_user)) {
            echo $int_user;
            header("refresh:2;url=userlist.php");
        }
    ?>
    <form action="useradd.php" method="post">
        <p>
            Họ tên <input type="text" name="txtName">
        </p>
        <p>
            Email <input type="email" name="txtEmail">
        </p>
        <p>
            Mật khẩu <input type="text" name="txtPass">
        </p>
        <button type="submit">Thêm</button>
    </form>
</body>
</html>