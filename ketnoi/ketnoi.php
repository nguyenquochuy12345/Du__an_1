<?php
    try{
        $conn = new PDO("mysql:host=localhost;dbname=du_an_1;charset=utf8","root","");
        $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        echo"Lỗi kết nối". $e -> getMessage();
    }

?>