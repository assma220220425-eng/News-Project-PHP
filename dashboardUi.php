<?php
session_start();

if(isset($_SESSION["authUser"])!=true){
    header("Location:login_users_ui.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="bootstrap-grid.min.css">

    <style>
        body {
            background-color: #f4f7f6; /* خلفية خفيفة */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        /* تنسيق الهيدر (العنوان) */
        .header-content {
            background-color: #007bff; /* لون أزرق جذاب */
            color: white;
            padding: 30px 20px;
            margin-bottom: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* تنسيق شريط التنقل */
        .nav-bar {
            background-color: white;
            padding: 15px 0;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            text-align: center;
        }

        /* تنسيق الروابط (الأزرار) */
        .nav-bar a {
            text-decoration: none;
            color: #495057; /* لون رمادي داكن للنص */
            font-size: 1rem;
            font-weight: 600;
            padding: 10px 20px;
            margin: 0 8px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
            display: inline-block; /* لضمان أن الروابط تظهر ككتل يمكن تطبيق التنسيق عليها */
        }

        /* تأثير التمرير (Hover) */
        .nav-bar a:hover {
            background-color: #007bff; /* خلفية زرقاء عند التمرير */
            color: white;
        }

        /* تنسيق الحاوية لتوسيط شريط التنقل */
        .container {
            max-width: 1100px;
        }
    </style>
</head>
<body>
    <div class="header-content">
        <h1> Hello <?php  echo $_SESSION["authUser"]["name"] ?> in Dashboard</h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                
                <div class="nav-bar">
  </center>

  <center>
    <a href="add_Category.php">Add  Category</a>
    <a href="View_categories.php">View Categories</a>
    <a href="view_news.php">View News</a>   
    <a href="add_news.php">Add News</a>  
    <a href="view_deleted_news.php">view deleted news</a> 

    
</body>
</html>