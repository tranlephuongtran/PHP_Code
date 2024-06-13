<?php
if (isset($_POST["btThem"])) {
    $tencty = $_POST["tencty"];
    $diachi = $_POST["diachi"];
    $dienthoai = $_POST["dienthoai"];
    $fax = $_POST["fax"];

    $sql = "insert into congty(tencty,diachi,dienthoai,fax) values ('$tencty','$diachi','$dienthoai','$fax')";
    if ($obj->themsanpham($sql))
        echo "<script>alert('Them thanh cong');</script>";
    else
        echo "<script>alert('Them that bai');</script>";
}