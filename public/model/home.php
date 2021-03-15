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
    function addView($id){
        $sql = "UPDATE sanpham SET luotxem=luotxem+1 WHERE id=?";
        return exec1($sql,$id);
    }
}

?>