<?php
class quanly extends database
{

    public function danhsachsanpham($id='')
    {
        if($id)
            $sql="select * from sanpham where idsp='$id'";
        else
            $sql="select * from sanpham";
        return $this->xuatdulieu($sql);
    }
    public function danhsachloaisanpham($id='')
    {
        if($id)
            $sql="select * from congty where idcty='$id'";
        else
            $sql="select * from congty";
        return $this->xuatdulieu($sql);
    }

    public function xoasanpham($id)
    {
        $sql="delete from sanpham where idsp='$id'";
        return $this->xoadulieu($sql);
    }
    public function selectcongty($value='')
    {
        $str='';
        $sql="select * from congty";
        $arr=$this->xuatdulieu($sql);
        for($i=0;$i<count($arr);$i++)
        {
            if($arr[$i]["idcty"]==$value)
                $str.='<option selected value="'.$arr[$i]["idcty"].'">'.$arr[$i]["tencty"].'</option>';
            else
            $str.='<option value="'.$arr[$i]["idcty"].'">'.$arr[$i]["tencty"].'</option>';
        }
        return $str;
    }
    public function xoaloaipham($id)
    {
        $sql="delete from congty where idcty='$id'";
        return $this->xoadulieu($sql);
    }
    // public function danhsachsothich($id='')
    // {
    //     if($id)
    //         $sql="select * from sothich where id_nhom='$id'";
    //     else
    //         $sql="select * from sothich";
    //     return $this->xuatdulieu($sql);
    // }

    public function themsanpham($sql)
    {
        return $this->themdulieu($sql);
    }
    public function suasanpham($sql)
    {
        return $this->suadulieu($sql);
    }
    // public function dangnhaptaikhoan($username,$password)
    // {
    //     $sql="select iduser from taikhoan where username='$username' and password='$password'";
    //     return $this->dangnhap($sql);
        
    // }


}



?>