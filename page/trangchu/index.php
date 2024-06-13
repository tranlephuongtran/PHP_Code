<table class="search-form" align="left" cellpadding="5" 
                <tr>
                    <td>
                        <form action="" method="get">

                            <input type="text" name="search" placeholder="Nhập từ khóa cần tìm"
                                value="<?php echo  $_GET['search'];  ?>">
                            <input type="submit" value="Tìm">
                            <input type="hidden" name="page" value="trangchu">
                        </form>
                    </td>
                </tr>
            </table>
            <div style="clear:both"></div>
<?php
$obj = new database();
$search = isset($_GET['search']) ? $_GET['search'] : '';
if ($cate)
    $sql = "select * from sanpham where idcty='$cate'";
else
    $sql = "select * from sanpham";
if (!empty($search)) {
    $sql .= " WHERE tensp like '%$search%'";
}
$sanpham = $obj->xuatdulieu($sql);

if ($sanpham) {
    for ($i = 0; $i < count($sanpham); $i++) // hien tat ca du lieu ra
    {
        echo '<div class="sanpham">
                <div class="tensp"><a href="index.php?page=chitietsanpham&cate=' . $sanpham[$i]["idsp"] . '">' . $sanpham[$i]["tensp"] . '</a></div>
                <div class="hinh"><img src="upload/' . $sanpham[$i]["hinh"] . '" width="100" /></div>
                <div class="gia">Giá: ' . number_format($sanpham[$i]["gia"]) . ' VND</div>
            </div>';
    }
} else {
    echo "Hiện tại chưa có sản phẩm nào";
    
}
?>