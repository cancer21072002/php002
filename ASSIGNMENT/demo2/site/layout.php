<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop online</title>
    <link rel="stylesheet" href="<?= $SITE_URL ?>/css/style.css">
</head>

<body>
    <div class="container">
        <header>
            <div class="logo">
                <h2>SHOP ONLINE</h2>
            </div>
            <div class="search">
                <form action="">
                    <input type="search" name="keyword" id="" placeholder="iphone">
                    <button>Tìm kiếm</button>
                </form>
            </div>

        </header>
        <nav>
            <ul>
                <li><a href="<?= $SITE_URL ?>">Home</a></li>
                <li><a href="#">Giới thiệu</a></li>
                <li>
                    <a href="#">Liên hệ</a>
                </li>
                <li>
                    <a href="#">Dịch vụ</a>
                </li>
                <li>
                    <a href="#">Khuyến mại</a>
                </li>
            </ul>
        </nav>
        <article>
            <div class="content">

                <?php include_once $VIEW_PAGE ?>

            </div>
            <aside>
                <div class="panel">
                    <div class="heading">TÀI KHOẢN</div>
                    <div class="form">
                        <?php if (isset($_SESSION['user'])) : ?>
                            Tên tài khoản: <?= $_SESSION['user']['ten_tk'] ?>
                            <a href="logout.php">Thoát</a>
                        <?php else : ?>
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
                        <?php endif; ?>
                    </div>
                </div>
                <div class="panel">
                    <div class="heading">DANH MỤC SẢN PHẨM</div>
                    <div class="list">
                        <ul>
                            <?php foreach ($loai_hang as $loai) : ?>
                                <li><a href="<?= $SITE_URL ?>/?product&ma_loai=<?= $loai['ma_loai'] ?>"><?= $loai['ten_loai'] ?></a></li>
                            <?php endforeach; ?>

                        </ul>
                    </div>
                </div>
            </aside>
        </article>
        <footer>
            <h3>&copy Copy All rights reserved 2021 - Copyright by h Shop online</h3>
        </footer>
    </div>
</body>

</html>