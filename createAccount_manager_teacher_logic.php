<?php
include "connectionOnDataBase.php";

function validateData($data){
    $data=trim($data);
    $data=htmlspecialchars($data);
    return $data;
}

if($connection->error==false){

    if(isset($_POST["create_account"])){
    $id=validateData($_POST["id"]);
    $name=validateData($_POST["name"]);
    $email=validateData($_POST["email"]);
    $password = password_hash(validateData($_POST["password"]),PASSWORD_BCRYPT);

    $sql="INSERT INTO users(id,name,email,password) VALUES('$id','$name','$email','$password')";

    $result=$connection->query($sql);
    if($result==true){
        header("Location:login_users_ui.php?statusCode=201");
        echo "insertion done";
    }else{
        echo "fail";
        
    }
    }

    }
