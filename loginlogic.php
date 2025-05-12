<?php

require "config.php";

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(empty($username) || empty($password)) {
        echo "fill up the fields";
    }
    else{
        $sql = "SELECT * FROM users WHERE username=:username";
        $insertSql= $conn->prepare($sql);
        $insertSql->bindParam('username', $username);

        $insertSql->execute();
    if($insertSql->rowCount()> 0){
        $data=$insertSql->fetch();
        if(password_verify($password, $data['password'])){
            header("Location: dashboard.php");
          }else{
            echo "password incorrect";
            header("refresh:2; url=login.php");
          }
         }else{
            echo "user not found";
         }
         }
         };



?>