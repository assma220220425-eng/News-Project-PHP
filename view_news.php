<?php
session_start();
$id=$_SESSION["authUser"]["id"];

include "connectionOnDataBase.php";
$sql="SELECT * FROM newsdata";
$result = $connection->query($sql);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view categories</title>
    <link rel="stylesheet" href="bootstrap-grid.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* خلفية بيضاء خفيفة */
            padding-top: 20px;
            font-family: Arial, sans-serif;
        }
        
        /* تنسيق رسائل التنبيه (Alerts) */
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 5px;
            text-align: center;
        }

        .alert-success {
            color: #155724;
            background-color: #d4edda; /* خلفية خضراء فاتحة */
            border-color: #c3e6cb;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da; /* خلفية حمراء فاتحة */
            border-color: #f5c6cb;
        }
        
        /* تنسيق الجدول */
        .styled-table {
            width: 100%;
            border-collapse: collapse;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            background-color: white;
            border-radius: 8px;
            overflow: hidden; /* لضمان أن الحدود المستديرة تطبق بشكل صحيح */
        }
        
        .styled-table th {
            background-color: #007bff; /* خلفية زرقاء لرأس الجدول */
            color: white;
            padding: 12px 15px;
            text-align: left;
        }
        
        .styled-table td {
            padding: 12px 15px;
            border-bottom: 1px solid #dee2e6; /* حد سفلي فقط للخلايا */
            white-space: nowrap; /* لمنع التفاف النص في الخلايا القصيرة */
            max-width: 250px;
            overflow: hidden;
            text-overflow: ellipsis; /* لإضافة نقاط في نهاية النص الطويل */
        }
        
        .styled-table tbody tr:nth-child(even) {
            background-color: #f3f3f3; /* تلوين الصفوف بالتناوب */
        }
        
        .styled-table tbody tr:hover {
            background-color: #e2f0ff; /* تأثير التمرير */
            cursor: default;
        }

        /* تنسيق أزرار العمليات */
        .operation-link {
            text-decoration: none;
            padding: 5px 10px;
            margin: 0 5px;
            border-radius: 4px;
            font-size: 0.9rem;
            display: inline-block;
            transition: background-color 0.3s;
        }

        .delete-btn {
            background-color: #dc3545; /* أحمر للحذف */
            color: white;
        }

        .delete-btn:hover {
            background-color: #c82333;
        }

        .update-btn {
            background-color: #ffc107; /* أصفر للتحديث */
            color: #212529; /* نص أسود */
        }

        .update-btn:hover {
            background-color: #e0a800;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
<?php 
if(isset($_GET["deleted"])){
    if($_GET["deleted"]=="true"){
        echo '<div class="alert alert-danger">✅ Deleted</div>';
    }

}

if(isset($_GET["created"])){
    if($_GET["created"]=="true"){
        echo '<div class="alert alert-success">✨ Created </div>';
    }
}

if(isset($_GET["updated"])){
    if($_GET["updated"]=="true"){
        echo '<div class="alert alert-success">📝 Updated</div>';

    }
}

?>
<h1 style="text-align: center; color: #343a40; margin-bottom: 30px;"> View News</h1>
<table border="1px" width="100%">
    <tr>
        <th>Category</th>
        <th> detail</th>
        <th>id_user</th>
        <th>image</th>
        <th>title</th>
        <th>operations</th>
    </tr>

    <?php 
        if($result->num_rows != 0){
            while($row = $result->fetch_assoc()){?>
                <tr>
                    <td>
                        <?php  echo $row["category"]?>
                     </td>
                     <td>
                        <?php  echo $row["detail"]?>
                     </td>
                     <td>
                        <?php  echo $row["id_user"]?>
                     </td>
                     <td>
                       <?php  echo $row["image"]?> 
                    </td>
                    <td>
                       <?php  echo $row["title"]?> 
                    </td> 
                     <td>
                        <a href="deleteNews.php?id=<?php echo $row["id_user"]?>" class="operation-link delete-btn">delete news</a>
                        <a href="updateNews.php?id=<?php echo $row["id_user"] ?>&category=<?php echo $row["category"] ?>" class="operation-link update-btn">update news</a>
                  
                </tr>
            <?php }
        }
    ?>
