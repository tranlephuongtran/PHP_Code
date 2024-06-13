<?php
$obj = new database();
$sql="select S.*,tencty from sanpham as S join congty as C on S.idcty=C.idcty where S.idsp='$cate'";
$sanpham=$obj->xuatdulieu($sql);
if($sanpham)
{
    echo '<h3 align="center" style="color:red; padding-bottom:10px;">Chi tiet san pham</h3>';
    echo '<table width="100%">
            <tr>
                <td width="30%"><img src="upload/'.$sanpham[0]["hinh"].'" width="200px"/></td>
                <td>
                    <ul>
                        <li><b>Tên Sản Phẩm:</b> '.$sanpham[0]["tensp"].'</li>
                        <li><b>Công Ty:</b> '.$sanpham[0]["tencty"].'</li>
                        <li><b>Mô Tả:</b> '.$sanpham[0]["mota"].'</li>
                        <li><b>Giá:</b> '.number_format($sanpham[0]["gia"]).' VND</li>
        
                    </ul>
                </td>
            </tr>
            <tr><td colspan="2" align="center"><a href="index.php?page=trangchu&cate='.$sanpham[0]['idcty'].'">Quay lai trang san pham</a></td></tr>
        </table>';
}
else
    echo "Khong ton tai san pham";
?>