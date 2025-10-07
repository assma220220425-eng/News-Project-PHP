<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update news</title>
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <style>
        body {
            background-color: #f0f8ff; /* خلفية زرقاء فاتحة جداً (Light Blue) */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .form-container {
            /* تصميم حاوية النموذج */
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
        }

        h1 {
            color: #007bff; /* لون أزرق (Primary) للتحديث */
            text-align: center;
            margin-bottom: 30px;
            font-size: 1.8rem;
        }
        
        /* تنسيق الحقول العامة */
        .form-control {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 15px;
            border: 1px solid #ced4da;
            border-radius: 6px;
            box-sizing: border-box; 
            transition: border-color 0.3s;
        }

        .form-control:focus {
            border-color: #007bff; /* إطار أزرق عند التركيز */
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.4);
            outline: none;
        }

        /* تنسيق حقل التفاصيل كـ textarea */
        textarea.form-control {
            resize: vertical;
            min-height: 100px;
        }

        /* تنسيق زر الإرسال */
        .btn-submit {
            width: 100%;
            padding: 15px;
            background-color: #007bff; /* لون أزرق (Primary) لعملية التحديث */
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 1.2rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-submit:hover {
            background-color: #0056b3; /* لون أغمق عند التمرير */
        }
    </style>
</head>
<body>
   <div class="container">
        <div class="row justify-content-center">
            
            <div class="col-md-6 col-sm-10"> 
                
                <div class="form-container">
        <h1> Hello in update News Page</h1>

<form action="updateNews_logic.php" method="post">
    <input type="hidden" name="id_user" value="<?php echo isset($_GET['id_user']) ? $_GET['id_user'] : ''; ?>">
    <input type="text" name="category" placeholder="category" class="form-control" value="<?php echo isset($_GET['category']) ? $_GET['category'] : ''; ?>">
    <br>
    <input type="text" name="detail"  placeholder="detail" class="form-control" value="<?php echo isset($_GET['detail']) ? $_GET['detail'] : ''; ?>">
    <br>
    <input type="text" name="id_user" placeholder="id_user" class="form-control" value="<?php echo isset($_GET['id_user']) ? $_GET['id_user'] : ''; ?>">
    <br>
    <input type="text" name="image" placeholder="image" class="form-control" value="<?php echo isset($_GET['image']) ? $_GET['image'] : ''; ?>">
    <br>
    <input type="text" name="title" placeholder="title"  class="form-control" value="<?php echo isset($_GET['title']) ? $_GET['title'] : ''; ?>">
    <br>
    <input type="submit" value="update_news" name="update_news" class="btn-submit">
</form>
    
</body>
</html>