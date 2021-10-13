<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị website</title>
    <link rel="stylesheet" href="<?=$ADMIN_URL?>/css/common.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>QUẢN TRỊ WEBSITE</h1>
            <nav>
                <ul>
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Loại hàng</a></li>
                    <li><a href="#">Hàng hóa</a></li>
                    <li><a href="#">Khách hàng</a></li>
                    <li><a href="#">Bình luận</a></li>
                    <li><a href="#">Thống kê</a></li>
                </ul>
            </nav>
        </header>
        <article>
            <div class="headline">
                <h2>QUẢN LÝ HÀNG HÓA</h2>
            </div>
            <?php
                include_once $VIEW_PAGE;
            ?>
        </article>
    </div>
</body>

</html>