<?php include_once "../classes/users_class.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa người dùng</title>
</head>
<body>
    <?php 
        $users = new users_class();
        //Kiểm tra người dùng chọn chức năng sửa hay không
        if (isset($_GET['editid'])) {
            $id = $_GET['editid'];
        }else header("Location:userlist.php");
        //Lấy dữ liệu từ form và cập nhật
        if (isset($_POST['txtName'])) {
            $edituser = $users->update_user($_POST['txtName'],$id);
        }
        if (isset($edituser)) {
            echo $edituser;
            header("refresh:3;url=userlist.php");
        }
    ?>
    <form action="" method="post">
        <p>
            Họ tên người dùng <input type="text" name="txtName">
        </p>
        <p>
            <button type="submit">Cập nhật</button>
        </p>
    </form>
</body>
</html>