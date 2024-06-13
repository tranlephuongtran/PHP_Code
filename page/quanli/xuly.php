<?php

if (isset($_POST["btXoa"])) {
    $idsp = $_POST["btXoa"];
    if ($obj->xoasanpham($idsp))
        echo "<script>alert('Xóa thành công');</script>";
    else
        echo "<script>alert('Xóa thất bại');</script>";


}




?>