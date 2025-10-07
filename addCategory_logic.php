<?php
session_start();
include "connectionOnDataBase.php";

if($connection->error==false){
    if(isset($_POST["add_category"])){
        $Category_ID=$_POST["id"];
        $Category_Type=$_POST["type"];
        $Category_Name=$_POST["name"];
        if(empty($Category_ID) || empty($Category_Type) || empty($Category_Name)){
            header("Location:add_Category.php");
        }else{
        $sql="INSERT INTO news(id,type,name) VALUES('$Category_ID','$Category_Type','$Category_Name')";

        $result=$connection->query($sql);
        if($result==true){
            header("Location:View_categories.php?created=true");
        }else{
            echo "Faile";
        }

        }


        }
    }
