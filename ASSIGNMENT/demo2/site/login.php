<div class="heading">TÀI KHOẢN</div>
<?php if (isset($MESSAGE)): ?>
<div class="alert" style="background: green"><?=$MESSAGE?></div>
<?php endif;?>
<div class="form">
    <form action="" method="POST">
        <div class="form-group">
            <label for="username">
                Tên đăng nhập
            </label> <input type="text" name="username" id="username" placeholder="username">
        </div>
        <div class="form-group">
            <label for="password">
                Mật khẩu
            </label> <input type="text" name="password" id="password" placeholder="password">
        </div>
        <button type="submit" name="btn_dangnhap" class="btn">Đăng nhập</button>
    </form>
</div>