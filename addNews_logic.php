<?php
session_start();
include "connectionOnDataBase.php";

if (isset($_POST["add_news"])) {
    $news_category = $_POST["category"] ?? '';
    $detail = $_POST["detail"] ?? '';
    $id_user = $_POST["id_user"] ?? '';
    $image = $_POST["image"] ?? '';
    $title = $_POST["title"] ?? '';

    if (empty($news_category) || empty($detail) || empty($id_user) || empty($image) || empty($title)) {
        header("Location: add_news.php");
        exit;
    }

    $sql = "INSERT INTO newsdata(category,detail,id_user,image,title)
            VALUES('$news_category','$detail','$id_user','$image','$title')";
    $result = $connection->query($sql);

    if ($result) {
        // INSERT يرجع true، لذلك لا تستدعي fetch_assoc()
        // خزن معرف السطر المضاف (إذا تحتاجه)
        $_SESSION["authNews"] = ["inserted_id" => $connection->insert_id];
        header("Location: view_news.php?created=true");
        exit;
    } else {
        echo "Failed: " . $connection->error; // مفيد أثناء التطوير
    }
}