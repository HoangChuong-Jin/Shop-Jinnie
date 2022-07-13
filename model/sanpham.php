<?php
class SANPHAM{
    // khai báo các thuộc tính - SV tự bổ sung
    
    public function demtongsosanpham(){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT COUNT(*) FROM sanpham";
            $cmd = $dbcon->prepare($sql);
            $cmd->execute();
            $ketqua = $cmd->fetchColumn();
            return $ketqua;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }

    //lấy danh sách mặt hàng trong khoảng chỉ định
    public function laysanphamtrongkhoang($batdau, $soluong){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT m.*, l.tenloai 
            FROM sanpham m, loaisanpham l 
            WHERE l.id=m.loaisanpham_id 
            ORDER BY id DESC 
            LIMIT $batdau, $soluong";
            $cmd = $dbcon->prepare($sql);
            $cmd->execute();
            $ketqua = $cmd->fetchAll();
            return $ketqua;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }
    // Lấy danh sách
    public function laysanpham(){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT * FROM sanpham";
            $cmd = $dbcon->prepare($sql);
            $cmd->execute();
            $result = $cmd->fetchAll();
            rsort($result); // sắp xếp giảm thay cho order by desc
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }

    public function laysanphamhh(){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT * FROM sanpham WHERE soluongton=0";
            $cmd = $dbcon->prepare($sql);
            $cmd->execute();
            $result = $cmd->fetchAll();
            rsort($result); // sắp xếp giảm thay cho order by desc
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }

	    // Lấy danh sách mặt hàng thuộc 1 danh mục
    public function laysanphamtheoloaisanpham($loaisanpham_id){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT * FROM sanpham WHERE loaisanpham_id=:loaisanpham_id" ;
            $cmd = $dbcon->prepare($sql);
			$cmd->bindValue(":loaisanpham_id",$loaisanpham_id);
            $cmd->execute();
            $result = $cmd->fetchAll();
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }

    // Lấy mặt hàng theo id
    public function laysanphamtheoid($id){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT * FROM sanpham WHERE id=:id";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":id", $id);
            $cmd->execute();
            $result = $cmd->fetch();             
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }
    // Cập nhật lượt xem
    public function tangluotxem($id){
        $dbcon = DATABASE::connect();
        try{
            $sql = "UPDATE sanpham SET luotxem=luotxem+1 WHERE id=:id";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":id", $id);
            $result = $cmd->execute();            
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }
     // Cập nhật lượt mua
     public function tangluotmua($id){
        $dbcon = DATABASE::connect();
        try{
            $sql = "UPDATE sanpham SET luotmua=luotmua+1 WHERE id=:id";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":id", $id);
            $result = $cmd->execute();            
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }
    // Cập nhật số lượng tồn
    public function capnhatsoluong($id, $soluong){
        $dbcon = DATABASE::connect();
        try{
            $sql = "UPDATE sanpham SET soluongton= soluongton - :soluong WHERE id=:id";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":id", $id);
            $cmd->bindValue(":soluong", $soluong);
            $result = $cmd->execute();            
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }
    
    // Cập nhật số lượng tồn
    public function huydoncapnhatsoluong($id, $soluong){
        $dbcon = DATABASE::connect();
        try{
            $sql = "UPDATE sanpham SET soluongton= soluongton + :soluong WHERE id=:id";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":id", $id);
            $cmd->bindValue(":soluong", $soluong);
            $result = $cmd->execute();            
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }
	
	// Thêm mới
    public function themsanpham($tensanpham,$mota,$giagoc,$giaban,$soluongton,$loaisanpham_id,$hinhanh){
        $dbcon = DATABASE::connect();
        try{
            $sql = "INSERT INTO sanpham(tensanpham,mota,giagoc,giaban,soluongton,loaisanpham_id,hinhanh) 
				VALUES(:tensanpham,:mota,:giagoc,:giaban,:soluongton,:loaisanpham_id,:hinhanh)";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":tensanpham", $tensanpham);
			$cmd->bindValue(":mota", $mota);
			$cmd->bindValue(":giagoc", $giagoc);
			$cmd->bindValue(":giaban", $giaban);
			$cmd->bindValue(":soluongton", $soluongton);
			$cmd->bindValue(":loaisanpham_id", $loaisanpham_id);
			$cmd->bindValue(":hinhanh", $hinhanh);
            $result = $cmd->execute();   
            return $result;

        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }

    // Xóa 
    public function xoasanpham($id){
        $dbcon = DATABASE::connect();
        try{
            $sql = "DELETE FROM sanpham WHERE id=:id";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":id", $id);
            $result = $cmd->execute();            
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }

    // Cập nhật 
    public function suasanpham($id, $tensanpham,$mota,$giagoc,$giaban,$soluongton,$loaisanpham_id,$hinhanh,$luotxem,$luotmua){
        $dbcon = DATABASE::connect();
        try{
            $sql = "UPDATE sanpham SET   tensanpham=:tensanpham,
										mota=:mota,
										giagoc=:giagoc,
										giaban=:giaban,
										soluongton=:soluongton,
										loaisanpham_id=:loaisanpham_id,
										hinhanh=:hinhanh,
										luotxem=:luotxem,
										luotmua=:luotmua
										WHERE id=:id";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":id", $id);
            $cmd->bindValue(":tensanpham", $tensanpham);
			$cmd->bindValue(":mota", $mota);
			$cmd->bindValue(":giagoc", $giagoc);
			$cmd->bindValue(":giaban", $giaban);
			$cmd->bindValue(":soluongton", $soluongton);
			$cmd->bindValue(":loaisanpham_id", $loaisanpham_id);
			$cmd->bindValue(":hinhanh", $hinhanh);
			$cmd->bindValue(":luotxem", $luotxem);
			$cmd->bindValue(":luotmua", $luotmua);
            $result = $cmd->execute();            
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }
    // Lấy mặt hàng nổi bật top 6 có lượt xem cao nhất
    public function laysanphamnoibat(){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT m.*, d.tenloai FROM sanpham m, loaisanpham d WHERE d.id=m.loaisanpham_id ORDER BY luotxem DESC LIMIT 0, 12";
            $cmd = $dbcon->prepare($sql);
            $cmd->execute();
            $ketqua = $cmd->fetchAll();
            return $ketqua;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }
    // Lấy danh sách
    public function timkiem($loaisanpham_id){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT * FROM sanpham where loaisanpham_id=:loaisanpham_id";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":loaisanpham_id", $loaisanpham_id);
            $cmd->execute();
            $result = $cmd->fetchAll();
            rsort($result); // sắp xếp giảm thay cho order by desc
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }

    // Lấy danh sách
    public function timkiemsanpham($tukhoa){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT * FROM sanpham where tensanpham like '%{$tukhoa}%'";
            $cmd = $dbcon->prepare($sql);
           // $cmd->bindValue(":tukhoa", $tukhoa);
            $cmd->execute();
            $result = $cmd->fetchAll();
            rsort($result); // sắp xếp giảm thay cho order by desc
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }

    public function demsosp(){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT COUNT(*) FROM sanpham WHERE kiemduyet=1";
            $cmd = $dbcon->prepare($sql);
            $cmd->execute();
            $ketqua = $cmd->fetchColumn();
            return $ketqua;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }

    public function demsosphh(){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT COUNT(*) FROM sanpham WHERE soluongton=0";
            $cmd = $dbcon->prepare($sql);
            $cmd->execute();
            $ketqua = $cmd->fetchColumn();
            return $ketqua;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }

}
?>
