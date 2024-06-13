<?php
if(isset($_POST["btDangnhap"]))
{
    //$obj = new database();
    $email=$_POST["email"];
    $password=$_POST["password"];
    $id_tk=$obj->dangnhaptaikhoan($email,$password);
    if($id_tk)
    {
        $_SESSION["dangnhap"]=$id_tk;
        header("Location:indexadmin.php?page=quanli");
    }
    else
    {
        echo "Dang nhap khong thanh cong";
    }



}

?>
<form action="#" method="POST"style="margin:100px">
    <table>
        <tr>
            <td></td>
            <th style='position: relative; '>THÔNG TIN ĐĂNG NHẬP</th>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" id=""></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" id=""></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="checkbox"> Nhớ thông tin đăng nhập</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Đăng nhập" id="btn-dangNhap" name="btDangnhap"> <input type="button"
                    value="Làm lại">
            </td>
        </tr>
    </table>
</form>