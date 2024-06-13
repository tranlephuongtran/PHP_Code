<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baitaplon</title>
    <link rel="stylesheet" href="layout/css/style.css?v=1">
</head>

<body class="container">
    <header>
        <p>BANNER</p>
    </header>
    <nav>
        <ul>
            <li><a href="index.php?page=trangchu">TRANG CHỦ |</a></li>
            <li><a href="indexadmin.php?page=quanli">QUẢN LÝ |</a></li>
            <?php
                if($_SESSION["dangnhap"])
                    echo '<li> <a href="index.php?page=dangxuat"><b>ĐĂNG XUẤT |</b></a></li>';
                else{
                    echo'<li><a href="index.php?page=login">ĐĂNG NHẬP</a></li>';
                }
            ?>
        </ul>
        
    </nav>
    <aside>
        <ul>
            <?php
        $obj = new database(); // ten class
        $loaisp=$obj->xuatdulieu("select * from congty"); // goi phuong thuc  xuat du lieu
        if($loaisp)
        {
            for($i=0;$i<count($loaisp);$i++) // hien tat ca du lieu ra
            {
                echo '<li><a href="index.php?page=trangchu&cate='.$loaisp[$i]['idcty'].'">'.$loaisp[$i]['tencty'].'</a></li>';
            }
        }
      
        ?>

        </ul>
    </aside>
    <section>