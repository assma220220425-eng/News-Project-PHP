<?php
session_start();
include "connectionOnDataBase.php";
if($connection->error==false){
    if(isset($_POST["login"])){
        $email=$_POST["email"];
        $password=$_POST["password"];
        $sql="SELECT * FROM users WHERE email='$email' ";
        $result=$connection->query($sql);
        if($result->num_rows > 0){
            $data=$result->fetch_assoc();
            echo $data["password"];
            echo $_POST["password"];
            if($password == $data["password"]){
                echo $data["password"];
                $_SESSION["authUser"]=$data;
                header("Location:dashboardUi.php");
             echo "Login done";
            } else {
                 echo "login faile";
            }
        } else {
            echo "login faile";
        }
    }
}
?>