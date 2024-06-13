<?php
if(!$_SESSION["dangnhap"])
    header("Location:index.php?page=login");
include("class/clsquanly.php");
$obj = new quanly();
include("page/sualoaisp/xuly.php");
$sanpham=$obj->danhsachloaisanpham($cate);
?>
<h3 align="center">Chinh sua san pham</h3>
<form method="post" enctype="multipart/form-data">
    <table width="80%" style="border-collapse:collapse">
        <tr>
            <td width="30%">Ten san pham</td>
            <td><input type="text" name="tencty" value="<?=$sanpham[0]['tencty']?>" required /></td>
        </tr>
        <tr>
            <td>Dia chi</td>
            <td><input type="text" name="diachi" value="<?=$sanpham[0]['diachi']?>" required /></td>
        </tr>
        <tr>
            <td>dienthoai</td>
            <td><input type="number" name="dienthoai" value="<?=$sanpham[0]['dienthoai']?>" required /></td>
        </tr>
        <tr>
            <td>FAX</td>
            <td><input type="number" name="fax" value="<?=$sanpham[0]['fax']?>" required /></td>
        </tr>


        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="btSua" value="Sua SP" /></td>
        </tr>

    </table>
</form>