<?php
if (isset($_POST["btThem"])) {
    $tensp = $_POST["tensp"];
    $mota = $_POST["mota"];
    $gia = $_POST["gia"];
    $idcty = $_POST["idcty"];
    $filename_new = rand(111, 999) . "_" . $_FILES["hinhanh"]["name"];
    if (move_uploaded_file($_FILES["hinhanh"]["tmp_name"], "upload/" . $filename_new)) {
        $sql = "insert into sanpham(tensp,mota,gia,hinh,idcty) values ('$tensp','$mota','$gia','$filename_new','$idcty')";
        if ($obj->themsanpham($sql))
            echo "<script>alert('Them thanh cong');</script>";
        else
            echo "<script>alert('Them that bai');</script>";
    } else
        echo "upload that bait";


}



?>