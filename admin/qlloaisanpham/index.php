<?php 
if(!isset($_SESSION["nguoidung"]))
    header("location:../index.php");
require("../../model/database.php");
require("../../model/loaisanpham.php");

// Xét xem có thao tác nào được chọn
if(isset($_REQUEST["action"])){
    $action = $_REQUEST["action"];
}
else{
    $action="xem";
}

$l = new LOAISANPHAM();
$idsua = 0;

switch($action){
    case "xem":
        $loaisanpham = $l->layloaisanpham();       
        include("main.php");
        break;
    case "themloaisanpham":
        $l->themloaisanpham($_POST["tenloai"]);    
		$loaisanpham = $l->layloaisanpham(); 
        include("main.php");
        break;
	case "xoaloaisanpham":
        $l->xoaloaisanpham($_GET["id"]);    
		$loaisanpham = $l->layloaisanpham(); 
        include("main.php");
        break;
	case "sualoaisanpham":
		$idsua = $_GET["id"];
        $loaisanpham = $l->layloaisanpham();       
        include("main.php");
        break;
	case "xulysua":
		$l->sualoaisanpham($_POST["id"], $_POST["tenloai"]);
        $loaisanpham = $l->layloaisanpham();       
        include("main.php");
        break;
    default:
        break;
}
?>
