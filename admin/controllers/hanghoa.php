<?php
    if(isset($_GET['act'])&&($_GET['act'])){
        $act = $_GET['act'];
    }else{
        $act = 'home';
    }
    switch ($act) {
        case 'index':
            $showAllSp = showAllSp();
            include_once "views/hanghoaindex.php";
        break;
        case 'add':
            $showdmsp = showAllTenDm();
            if(isset($_GET['idedit'])&&($_GET['idedit'])){
                $_SESSION['idedit'] = $_GET['idedit'];
                $showspedit = showSpEdit($_SESSION['idedit']);
                include_once "views/hanghoaedit.php";
            }else{
                include_once "views/hanghoaadd.php";
            }
            if(isset($_POST['them'])&&($_POST['them'])||isset($_POST['sua'])&&($_POST['sua'])){
                $allFile = $_FILES['img'];
                //upload nhiều ảnh
                $img = checkUpLoadMany($allFile);
                $iddm = $_POST['iddm'];
                $name = stripTags($_POST['name']);
                $slug = convert_name($name);
                $gia = $_POST['gia'];
                
             
                $luotxem = $_POST['luotxem'];
                $mota =$_POST['mota'];
                $anhien = $_POST['anhien'];
                
                if(isset($_POST['anhien'])&&($_POST['anhien'])){
                    $anhien = $_POST['anhien'];
                }else{
                    $anhien = "0";
                }
                settype($gia,"float");
                settype($iddm,"int");
                settype($giamgia,"int");
                settype($luotxem,"int");
                settype($luotxem,"int");
                settype($anhien,"int");
                if(isset($_GET['idedit'])&&($_GET['idedit'])){
                    updateProduct($id,$name,$slug,$img,$iddm,$gia,$luotxem,$mota,$anhien); 
                }else{
                    addProduct($name,$slug,$img,$iddm,$gia,$luotxem,$mota,$anhien);
                }
                header("location: index.php?ctrl=hanghoa&act=index");
            }
        break;
        case 'del':
            if(isset($_GET['iddel'])&&($_GET['iddel'])>0){
                $id = $_GET['iddel'];
                xoaSanPham($id);
            }
        $showAllSp = showAllSp();
        include_once "views/hanghoaindex.php";
        break;
            default:
                break;
    }
?>