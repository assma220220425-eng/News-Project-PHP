<?php
include "connectionOnDataBase.php";

if($connection->error==false){
    if(isset($_POST["update_news"])){
        $category=$_POST["category"];
        $detail=$_POST["detail"];
        $id_user=$_POST["id_user"];
        $image=$_POST["image"];
        $title=$_POST["title"];

        $sql="UPDATE newsdata SET category='$category' , detail='$detail' , id_user='$id_user' , image= '$image' ,title= '$title' WHERE id_user = $id_user";

        $result=$connection->query($sql);
        if($result==true){
            header("Location:view_news.php?updated=true");
        }else{
            echo "Faile";
        }

        }


        }
