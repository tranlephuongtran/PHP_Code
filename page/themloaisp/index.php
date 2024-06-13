<?php
if(!$_SESSION["dangnhap"])
    header("Location:index.php?page=login");
include("class/clsquanly.php");
$obj = new quanly();
include("page/themloaisp/xuly.php");
?>
<h3 align="center">Them loai sp</h3>
<form method="post" enctype="multipart/form-data">
    <table width="80%" style="border-collapse:collapse">
        <tr>
            <td width="30%">Ten san pham</td>
            <td><input type="text" name="tencty" required /></td>
        </tr>
        <tr>
            <td>Dia chi</td>
            <td><input type="text" name="diachi" required /></td>
        </tr>
        <tr>
            <td>dienthoai</td>
            <td><input type="number" name="dienthoai" required /></td>
        </tr>
        <tr>
            <td>FAX</td>
            <td><input type="number" name="fax" required /></td>
        </tr>

        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="btThem" value="Them SP" /></td>
        </tr>

    </table>
</form>