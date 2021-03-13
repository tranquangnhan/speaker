<?php
    function showAllDanhMuc(){
        $sql = "select count(*) as sldm from danhmuc";
        return result1(1,$sql);
    }
    function showAllDm(){
        $sql = "select * from danhmuc where 1 order by id desc ";
        return result1(0,$sql);
    }
    function xoaDanhMuc($id){
        $sql = "DELETE FROM danhmuc WHERE id=".$id;
        return exec1($sql);
    }
    function addCategories($name,$img,$anhien){
        $sql = "INSERT INTO danhmuc(name,img,anhien) values('{$name}','{$img}','{$anhien}')";
        return exec1($sql);
    }
    function updateCategories($id,$name,$img,$anhien){
        if(!$img){
            $sql = "UPDATE danhmuc SET name=?,anhien=? WHERE id=?";
            return exec1($sql,$name,$anhien,$id);
        }else{
            $sql = "UPDATE danhmuc SET name=?,img=?,anhien=? WHERE id=?";
            return exec1($sql,$name,$img,$anhien,$id);
        } 
    }
    function showDmEdit($id){
        $sql = "select * from danhmuc where id= {$id}";
        return result1(1,$sql);
    }
?>