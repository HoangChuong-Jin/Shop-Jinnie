<?php
class LOAISANPHAM{
    private $id;
    private $tenloai;

    public function getID(){
        return $this->id;
    }

    public function setID($value){
        $this->id = $value;
    }

    public function gettenloai(){
        return $this->tenloai;
    }

    public function settenloai($value){
        $this->tenloai = $value;
    }

    // Lấy danh sách
    public function layloaisanpham(){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT * FROM loaisanpham";
            $cmd = $dbcon->prepare($sql);
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

    // Thêm mới
    public function themloaisanpham($tenloai){
        $dbcon = DATABASE::connect();
        try{
            $sql = "INSERT INTO loaisanpham(tenloai) VALUES(:tenloai)";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":tenloai", $tenloai);
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
    public function xoaloaisanpham($id){
        $dbcon = DATABASE::connect();
        try{
            $sql = "DELETE FROM loaisanpham WHERE id=:id";
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
    public function sualoaisanpham($id, $tenloai){
        $dbcon = DATABASE::connect();
        try{
            $sql = "UPDATE loaisanpham SET tenloai=:tenloai WHERE id=:id";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":tenloai", $tenloai);
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

    // Lấy loại mỹ phẩm theo id
    public function layloaisanphamtheoid($id){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT * FROM loaisanpham WHERE id=:id";
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

}
?>
