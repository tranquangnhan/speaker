<?php
   function showAllluotxem(){
    $sql = "select sum(luotxem) as luotxem from sanpham";
    return result1(1,$sql);
   }
    function showAllHangHoa(){
        $sql = "select count(*) as slhh from sanpham";
        return result1(1,$sql);
    }
    function showSpEdit($id){
        $sql = "select * from sanpham where id = '{$id}' ";
        return result1(1,$sql);
    }
    function showAllTenDm(){
        $sql = "select * from danhmuc where 1 limit 10";
        return result1(0,$sql);
    }
    function showAllSp(){
        $sql = "select * from sanpham where 1 limit 10";
        return result1(0,$sql); 
    }
    function showAllSpAdmin(){
        $sql = "select * from sanpham ";
        return result1(0,$sql); 
    }
    // admin add product
    function addProduct($name,$slug,$img,$iddm,$gia,$luotxem,$mota,$anhien){
        $sql = "INSERT INTO sanpham (name,slug,img,iddm,gia,noibat,luotxem,mota,anhien) VALUES 
        ('{$name}','{$slug}', '{$img}', '{$iddm}','{$gia}','{$luotxem}','{$mota}','{$anhien}')";
        exec1($sql);
    }
    // admin delete product
    function xoaSanPham($id){
        $sql = "DELETE FROM sanpham WHERE id=".$id;
        exec1($sql);
    }
    //admin update sp
    function updateProduct($id,$name,$slug,$img,$iddm,$gia,$luotxem,$mota,$anhien){
        $mota = addslashes($mota);
        if(!$img){
            $sql = "UPDATE sanpham SET name='{$name}',slug='{$slug}', iddm = '{$iddm}', gia='{$gia}',luotxem='{$luotxem}',mota='{$mota}',anhien='{$anhien}'  WHERE id=".$id;
        }else{
            $sql = "UPDATE sanpham SET name='{$name}',slug='{$slug}',img = '{$img}', iddm = '{$iddm}', gia='{$gia}',luotxem='{$luotxem}',mota='{$mota}',anhien='{$anhien}'  WHERE id=".$id;
        }
        exec1($sql);  
    }

?>