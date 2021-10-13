<?php
    include_once "../lib/session.php";
    session::checkSession();
?>
<h3>
    Xin chào, <?php echo $_SESSION['name'] . '<br>'; ?>
    <?php 
        if (isset($_GET['action']) && $_GET['action'] == 'logout') {
            session_destroy();
            header('Location:login.php');
        }
    ?>
    <a href="?action=logout">Đăng xuất</a> </br>
    <a href="userlist.php">Danh sách người dùng</a>
</h3>