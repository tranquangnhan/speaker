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
    function search($key){
        $sql = 'SELECT * FROM sanpham WHERE name LIKE "%'.$key.'%"';
        return result1(0,$sql);
    }
}

?>