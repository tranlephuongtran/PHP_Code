<?php
if(!$_SESSION["dangnhap"])
    header("Location:index.php?page=login");
include("class/clsquanly.php");
$obj = new quanly();
include("page/themsanpham/xuly.php");
?>
<h3 align="center">Them san pham</h3>
<form method="post" enctype="multipart/form-data">
    <table width="80%" style="border-collapse:collapse">
        <tr>
            <td width="30%">Ten san pham</td>
            <td><input type="text" name="tensp" required /></td>
        </tr>
        <tr>
            <td>Mo ta</td>
            <td><input type="text" name="mota" required /></td>
        </tr>
        <tr>
            <td>Gia</td>
            <td><input type="number" name="gia" required /></td>
        </tr>
        <tr>
            <td>Hinh</td>
            <td><input type="file" name="hinhanh" required /></td>
        </tr>
        <tr>
            <td>Thuoc cong ty</td>
            <td>
                <select name="idcty" required>
                    <option value="">- Chon cong ty-</option>
                    <?php echo $obj->selectcongty(); ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="btThem" value="Them SP" /></td>
        </tr>

    </table>
</form>