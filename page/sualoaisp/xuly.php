<?php
if (isset($_POST["btSua"])) {
    $tencty = $_POST["tencty"];
    $diachi = $_POST["diachi"];
    $dienthoai = $_POST["dienthoai"];
    $fax = $_POST["fax"];

    $sql = "update congty set tencty='$tencty',diachi='$diachi',dienthoai='$dienthoai',fax='$fax' where idcty='$cate'";
    if ($obj->suasanpham($sql))
        echo "<script>alert('Sửa thành công');</script>";
    else
        echo "<script>alert('Sửa thất bại');</script>";
}