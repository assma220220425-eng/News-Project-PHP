<?php
session_start();
$id=$_SESSION["authUser"]["id"];

include "connectionOnDataBase.php";
$sql="SELECT * FROM news";
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
            background-color: #f8f9fa; /* خلفية خفيفة */
            padding-top: 20px;
        }
        .container {
            margin-top: 20px;
        }
        h1 {
            color: #007bff; /* لون أزرق جذاب */
            text-align: center;
            margin-bottom: 30px;
        }
        /* تنسيق الجدول */
        .styled-table {
            width: 100%;
            border-collapse: collapse; /* دمج الحدود */
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); /* ظل خفيف */
            background-color: white; /* خلفية بيضاء للجدول */
        }
        /* تنسيق رأس الجدول */
        .styled-table th {
            background-color: #007bff; /* خلفية زرقاء لرأس الجدول */
            color: white;
            padding: 12px 15px;
            text-align: left;
            border: none;
        }
        /* تنسيق خلايا البيانات */
        .styled-table td {
            padding: 12px 15px;
            border: 1px solid #dee2e6; /* حد خفيف للخلايا */
        }
        /* تلوين الصفوف بالتناوب */
        .styled-table tbody tr:nth-child(even) {
            background-color: #f3f3f3; /* لون رمادي فاتح للصفوف الزوجية */
        }
        /* تأثير عند التمرير بالماوس */
        .styled-table tbody tr:hover {
            background-color: #e2f0ff; /* لون فاتح عند التمرير */
            cursor: pointer;
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10"> <h1>View Categories </h1>

<table border="1px" width="100%" class="styled-table">
    <tr>
        <th> type</th>
    </tr>

    <?php 
        if($result->num_rows != 0){
            while($row = $result->fetch_assoc()){?>
                <tr>
                    <td colspan="1" style="text-align: center; color: #dc3545;">
                        <?php  echo $row["type"]?>
                   </td>
                </tr>
            <?php }
        }
    ?>
