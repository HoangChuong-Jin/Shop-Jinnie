<?php
if(!isset($_SESSION["nguoidung"]))
    header("location:../index.php");

require("../../model/database.php");
require("../../model/nguoidung.php");

if(isset($_REQUEST["action"])){
    $action = $_REQUEST["action"];
}
else{
    $action="macdinh";
}
$nd = new NGUOIDUNG();

switch($action){
    case "macdinh":
        $nguoidung = $nd->laydanhsachnguoidung();
        include("main.php");
        break;
    case "l3":
        $nguoidung = $nd->laydanhsachnguoidungl3();
        include("main.php");
        break;
    case "khoa":
        $id=$_GET['id'];
        $trangthai=$_GET['trangthai'];
        $nd->capnhattrangthai($id,$trangthai);
        $nguoidung = $nd->laydanhsachnguoidung();
        include("main.php");
        break;
    case "themnguoidung":
        include("themnguoidung.php");
        break;
    case "xulythem":    
        // xử lý file upload
        $hinhanh = "" . basename($_FILES["fhinh"]["name"]); // đường dẫn ảnh lưu trong db
        $duongdan = "../public/images/" . $hinhanh; // nơi lưu file upload
        move_uploaded_file($_FILES["fhinh"]["tmp_name"], $duongdan);
        // xử lý thêm       
        $email = $_POST["email"];
        $sodienthoai = $_POST["sodienthoai"];
        $matkhau = $_POST["matkhau"];
        $hoten = $_POST["hoten"];
        $loai = $_POST["optloai"];
        $nd->themnguoidung($email,$sodienthoai,$matkhau,$hoten,$loai,$hinhanh);
        $nguoidung = $nd->laydanhsachnguoidung();
        include("main.php");
        break;  
    case "xoanguoidung":
        $nd->xoanguoidung($_GET["id"]);    
		$nguoidung = $nd->laydanhsachnguoidung(); 
        include("main.php");
        break;
    case "suanguoidung":
        if(isset($_GET["id"])){ 
            $nguoidung=$nd->laynguoidungtheoid($_GET["id"]);
            include("suanguoidung.php");
        }
        else{
            $nguoidung = $nd->laydanhsachnguoidung();        
            include("main.php");            
        }
        break;
    case "xulysua":    
        $id = $_POST["id"];
        $hoten = $_POST["hoten"];
        $sodienthoai = $_POST["sodienthoai"];
        $email = $_POST["email"];
        $matkhau = $_POST["matkhau"];
        $loai = $_POST["optloai"];
       
        $nd->suanguoidung($id,$hoten,$sodienthoai,$email,$matkhau,$loai);
        $nguoidung = $nd->laydanhsachnguoidung();
        include("main.php");
        break;  
    default:
        break;
}
?>
