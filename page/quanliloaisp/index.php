<h3 style="text-align: center;margin:10px; ">Danh Sách Loại Sản Phẩm</h3>
<div style="text-align: right; margin-right: 100px; font-size:20px;"><a href="indexadmin.php?page=themloaisp">Thêm mới</a></div>
<?php
if(!$_SESSION["dangnhap"])
    header("Location:index.php?page=login");
 include("class/clsquanly.php");
$obj = new quanly();
include("page/quanliloaisp/xuly.php");
$sql="SELECT * FROM congty";
$loaisp=$obj->xuatdulieu($sql);
if($loaisp)
{
    echo '<form method="post"><table width="80%" border="1" style="border-collapse:collapse">
    <tr>
        <th>STT</th>
        <th>Tên Công Ty</th>
        <th>Địa Chỉ</th>
        <th>Điện Thoai</th>
        <th>Fax</th>
        <th>Thao Tác</th>
    </tr>';
    for($i=0;$i<count($loaisp);$i++)
    {
        echo '<tr>
                <td align="center">'.($i+1).'</td>
                <td align="center"><a href="indexadmin.php?page=sualoaisp&cate='.$loaisp[$i]["idcty"].'">'.$loaisp[$i]["tencty"].'</a></td>
                <td align="center">'.$loaisp[$i]["diachi"].'</td>
                <td align="center">'.$loaisp[$i]["dienthoai"].'</td>
                <td align="center">'.$loaisp[$i]["fax"].'</td>
                <td align="center"><button onclick="return confirm(\'Ban co chac muon xoa sp nay khong?\')" type="submit" name="btXoa" value="'.$loaisp[$i]["idcty"].'">Xóa</button></td>
            </tr>';
    }
    echo '</table></form>';
}
?>