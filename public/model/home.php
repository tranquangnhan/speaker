<?php
class Model_home{
    function getAllCategory(){
        $sql = "SELECT * FROM danhmuc WHERE 1";
        return result1(0,$sql);
    }
    function getProFromId($id){
        $sql = "SELECT * FROM sanpham WHERE iddm=?";
        return result1(0,$sql,$id);
    }
    function getProduct($id){
        $sql = "SELECT * FROM sanpham WHERE id=?";
        return result1(0,$sql,$id);
    }
}

?>