<?php
if (isset($_POST["btSua"])) {
    $tensp = $_POST["tensp"];
    $mota = $_POST["mota"];
    $gia = $_POST["gia"];
    $idcty = $_POST["idcty"];
    if ($_FILES["hinhanh"]["name"]) {
        $filename_new = rand(111, 999) . "_" . $_FILES["hinhanh"]["name"];
        if (move_uploaded_file($_FILES["hinhanh"]["tmp_name"], "upload/" . $filename_new)) {
            $sql = "update sanpham set tensp='$tensp',gia='$gia',idcty='$idcty',mota='$mota',hinh='$filename_new' where idsp='$cate'";
            if ($obj->suasanpham($sql))
                echo "<script>alert('Sửa thành công');</script>";
            else
                echo "<script>alert('Sửa thất bại');</script>";
        } else
            echo "<script>alert('Upload thất bại');</script>";
    } else {
        $sql = "update sanpham set tensp='$tensp',gia='$gia',idcty='$idcty',mota='$mota' where idsp='$cate'";
        if ($obj->suasanpham($sql))
            echo "<script>alert('Sửa thành công');</script>";
        else
            echo "<script>alert('Sửa thất bại');</script>";
    }



}



?>