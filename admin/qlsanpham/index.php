<?php 
if(!isset($_SESSION["nguoidung"]))
    header("location:../index.php");

require("../../model/database.php");
require("../../model/loaisanpham.php");
require("../../model/sanpham.php");

// Xét xem có thao tác nào được chọn
if(isset($_REQUEST["action"])){
    $action = $_REQUEST["action"];
}
else{
    $action="xem";
}

$l = new LOAISANPHAM();
$mp = new SANPHAM();

switch($action){
    case "xem":
        $sanpham = $mp->laysanpham();
        $loaisanpham = $l->layloaisanpham();
		include("main.php");
        break;
    case "xemhh":
        $sanpham = $mp->laysanphamhh();
        $loaisanpham = $l->layloaisanpham();
        include("main.php");
        break;
	case "them":
		$loaisanpham = $l->layloaisanpham();
		include("themsanpham.php");
        break;
	case "xulythem":	
		// xử lý file upload
		$hinhanh = "images/" . basename($_FILES["filehinhanh"]["name"]); // đường dẫn ảnh lưu trong db
		$duongdan = "../../public/" . $hinhanh; // nơi lưu file upload
		move_uploaded_file($_FILES["filehinhanh"]["tmp_name"], $duongdan);
		// xử lý thêm		
		$tensanpham = $_POST["tensanpham"];
		$mota = $_POST["mota"];
		$giagoc = $_POST["giagoc"];
		$giaban = $_POST["giaban"];
		$soluongton = $_POST["soluongton"];
		$loaisanpham_id = $_POST["optloaisanpham"];

		$mp->themsanpham($tensanpham,$mota,$giagoc,$giaban,$soluongton,$loaisanpham_id,$hinhanh);
		$loaisanpham = $l->layloaisanpham();
        $sanpham = $mp->laysanpham();
		include("main.php");
        break;
	case "xoa":
		if(isset($_GET["id"]))
			$mp->xoasanpham($_GET["id"]);
        $loaisanpham = $l->layloaisanpham();
		$sanpham = $mp->laysanpham();
		include("main.php");
		break;	
    case "sua":
        if(isset($_GET["id"])){ 
            $m = $mp->laysanphamtheoid($_GET["id"]);
            $loaisanpham = $l->layloaisanpham(); 
            include("suasanpham.php");
        }
        else{
            $loaisanpham = $l->layloaisanpham();
            $sanpham = $mp->laysanpham();        
            include("main.php");            
        }
        break;
    case "xulysua":
        $id = $_POST["id"];
        $tensanpham = $_POST["tensanpham"];
        $mota = $_POST["mota"];
        $giagoc = $_POST["giagoc"];
        $giaban = $_POST["giaban"];
        $soluongton = $_POST["soluongton"];
        $loaisanpham_id = $_POST["optloaisanpham"];
        $hinhanh = $_POST["hinhcu"];
        $luotxem = $_POST["luotxem"];
        $luotmua = $_POST["luotmua"];

        // upload file mới (nếu có)
        if($_FILES["filehinhanh"]["name"]!=""){
            // xử lý file upload -- Cần bổ dung kiểm tra: dung lượng, kiểu file, ...       
            $hinhanh = "images/" . basename($_FILES["filehinhanh"]["name"]);// đường dẫn lưu csdl
            $duongdan = "../../public/" . $hinhanh; // đường dẫn lưu upload file        
            move_uploaded_file($_FILES["filehinhanh"]["tmp_name"], $duongdan);
        }
        
        // sửa mặt hàng
        $mp->suasanpham($id, $tensanpham,$mota,$giagoc,$giaban,$soluongton,$loaisanpham_id,$hinhanh,$luotxem,$luotmua);         
    
        // hiển thị ds mặt hàng
        $loaisanpham = $l->layloaisanpham();
        $sanpham = $mp->laysanpham();    
        include("main.php");
        break;
    case "timkiem":
        $tukhoa=$_GET["otploaisanpham"];
        $data=$mp->timkiem($tukhoa);
        $sanpham = $mp->laysanpham();
        $loaisanpham = $l->layloaisanpham();
        include("search.php");
        break;
    default:
        break;
}

?>
