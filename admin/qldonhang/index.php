<?php 
if(!isset($_SESSION["nguoidung"]))
    header("location:../index.php");

require("../../model/database.php");
require("../../model/sanpham.php");
require("../../model/donhang.php");
require("../../model/donhangct.php");
require("../../model/nguoidung.php");
require("../../model/diachi.php");

// Xét xem có thao tác nào được chọn
if(isset($_REQUEST["action"])){
    $action = $_REQUEST["action"];
}
else{
    $action="xem";
}

$dh = new DONHANG();
$mp = new SANPHAM();
$ctdh = new DONHANGCT();
$nd = new NGUOIDUNG();
$dc = new DIACHI();

switch($action){
    case "xem":
        $sanpham = $mp->laysanpham();
        $nguoidung=$nd->laydanhsachnguoidung();
        $diachi = $dc->laydiachi();
        //$loaisanpham = $l->laysanpham();
        $donhang=$dh->laydonhang();
		include("main.php");
        break;
	case "xemchitiet":
        $donhang_id=$_GET["id"];
        $dhang=$dh->laydonhangtheoid($donhang_id);
        $nguoidung=$dh->laydonhangtheoidnguoidung($dhang["nguoidung_id"]);
        
        $diachi=$dh->laydonhangtheodiachi($dhang["diachi_id"]);
        $tendiachi=$diachi["diachi"];
        
        $ctdonhang=$ctdh->laychitiettheodonhang($donhang_id);
        
        include("ctdonhang.php");
        break;
    case "capnhattrangthai":
        $trangthai=$_POST["opttrangthai"];
        $id=$_POST["id"];
        //trạng thái =5 là huỷ đơn nên cập nhật lại slton
        if($trangthai==5){
            $mp->huydoncapnhatsoluong($id, $soluong);
            $dh->capnhattrangthai($id,$trangthai);
            //chuyển đến trang ql đơn hàng
            $sanpham = $mp->laysanpham();
            $nguoidung=$nd->laydanhsachnguoidung();
            $diachi = $dc->laydiachi();
            $donhang=$dh->laydonhang();
            include("main.php");
            break;
        }
        else{
            $dh->capnhattrangthai($id,$trangthai);
            //chuyển đến trang ql đơn hàng
            $sanpham = $mp->laysanpham();
            $nguoidung=$nd->laydanhsachnguoidung();
            $diachi = $dc->laydiachi();
            $donhang=$dh->laydonhang();
            include("main.php");
            break;
        }
    case "huydon":
        $trangthai=$_GET["trangthai"];
        $id=$_GET["id"];
        $dh->capnhattrangthai($id,$trangthai);
        //chuyển đến trang ql đơn hàng
        $sanpham = $mp->laysanpham();
        $nguoidung=$nd->laydanhsachnguoidung();
        $diachi = $dc->laydiachi();
        $donhang=$dh->laydonhang();
        include("main.php");
        break;
    case "timkiem":
        $tukhoa=$_GET["opttrangthai"];
        $data=$dh->timkiem($tukhoa);
        $sanpham = $mp->laysanpham();
        $nguoidung=$nd->laydanhsachnguoidung();
        $diachi = $dc->laydiachi();
        //$loaisanpham = $l->laysanpham();
        
        include("search.php");
        break;
    default:
        break;
}

?>
