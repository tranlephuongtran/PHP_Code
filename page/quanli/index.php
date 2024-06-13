<h3 style="text-align: center;margin:10px; ">DANH SÁCH SẢN PHẨM</h3>

<div style="text-align: right; margin-right: 100px; font-size:20px;"><a href="indexadmin.php?page=themsanpham">Thêm mới</a></div>
<?php
if(!$_SESSION["dangnhap"])
    header("Location:index.php?page=login");
 include("class/clsquanly.php");
$obj = new quanly();
include("page/quanli/xuly.php");

$sanpham=$obj->danhsachsanpham(
);
if($sanpham)
{
    echo '<form method="post"><table width="80%" border="1" style="border-collapse:collapse">
    <tr>
        <th>STT</th>
        <th>Tên Sản Phẩm</th>
        <th>Giá</th>
        <th>Hình</th>
        <th>Thao Tác</th>
    </tr>';
    for($i=0;$i<count($sanpham);$i++)
    {
        echo '<tr>
                <td align="center">'.($i+1).'</td>
                <td align="center"><a href="indexadmin.php?page=suasanpham&cate='.$sanpham[$i]["idsp"].'">'.$sanpham[$i]["tensp"].'</a></td>
                <td align="center">'.number_format($sanpham[$i]["gia"]).' VND</td>
                <td align="center"><img src="upload/'.$sanpham[$i]["hinh"].'" width="50" /></td>
                <td align="center"><button onclick="return confirm(\'Ban co chac muon xoa sp nay khong?\')" type="submit" name="btXoa" value="'.$sanpham[$i]["idsp"].'">Xóa</button></td>
            </tr>';
    }
    echo '</table></form>';
}
?>