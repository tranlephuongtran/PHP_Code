<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baitaplon</title>
    <link rel="stylesheet" href="layout/css/style.css">
</head>

<body class="container">
    <header>
        <p>BANNER</p>
    </header>
    <nav>
        <ul>
            <li><a href="index.php?page=trangchu">TRANG CHỦ |</a></li>
            <li><a href="indexadmin.php?page=quanli">QUẢN LÝ|</a></li>
            <?php
                    if($_SESSION["dangnhap"])
                        echo '<li> <a href="index.php?page=dangxuat"><b>ĐĂNG XUẤT</b></a></li>';
                    else{
                        echo'<li><a href="index.php?page=login">ĐĂNG NHẬP</a></li>';
                    }
                    ?>
        </ul>
    </nav>
    <aside>
        <ul>
            <li><a href="indexadmin.php?page=quanliloaisp">Quản Lý Loại Sản Phẩm</a></li>
            <li><a href="indexadmin.php?page=quanli">Quản lý Sản Phẩm</a></li>
        </ul>
    </aside>
    <section>