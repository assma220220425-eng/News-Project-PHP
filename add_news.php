<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add News</title>
    <link rel="stylesheet" href="bootstrap-grid.min.css">
    <style>
        body {
            background-color: #e9ecef; /* خلفية رمادية فاتحة جداً */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; /* لضمان توسيط النموذج عمودياً */
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .form-container {
            /* تصميم حاوية النموذج */
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1); /* ظل أعمق وأكثر احترافية */
            width: 100%;
        }

        h1 {
            color: #dc3545; /* لون أحمر (Danger) للتنبيه بأهمية الإضافة */
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
            border-color: #dc3545; /* إطار أحمر عند التركيز */
            box-shadow: 0 0 5px rgba(220, 53, 69, 0.4);
            outline: none;
        }

        /* تنسيق حقل التفاصيل كـ textarea */
        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }

        /* تنسيق زر الإرسال */
        .btn-submit {
            width: 100%;
            padding: 15px;
            background-color: #28a745; /* لون أخضر (Success) */
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 1.2rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-submit:hover {
            background-color: #1e7e34; /* لون أغمق عند التمرير */
        }
    </style>
</head>
<body>
        <div class="container">
            <div class="row justify-content-center">
            
                <div class="col-md-6 col-sm-10"> 
                
                <div class="form-container">

                    <h1> Hello in Add Category Page</h1>

<form action="addNews_logic.php" method="post">
    <input type="text" name="category" value="category" placeholder="category" class="form-control">
    <br>
    <input type="text" name="detail" value="detail" placeholder="detail" class="form-control">
    <br>
    <input type="text" name="id_user" value="id_user" placeholder="id_user" class="form-control">
    <br>
    <input type="text" name="image" value="image" placeholder="image" class="form-control">
    <br>
    <input type="text" name="title" value="title" placeholder="title" class="form-control">
    <br>
    <input type="submit" value="add_news" name="add_news" class="btn-submit">
    
</body>
</html>