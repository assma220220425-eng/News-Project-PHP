<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
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
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
        }

        h1 {
            color: #17a2b8; /* لون أزرق سماوي (Info) */
            text-align: center;
            margin-bottom: 30px;
            font-size: 1.8rem;
        }

        /* تنسيق رسالة التنبيه (Account Created) */
        .alert-success {
            color: #155724;
            background-color: #d4edda; /* خلفية خضراء فاتحة */
            border: 1px solid #c3e6cb;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }
        
        /* تنسيق الحقول ومسمياتها */
        .form-group {
            margin-bottom: 15px;
            text-align: left; /* محاذاة اليسار للحقول */
        }

        label {
            display: block; /* لجعل المسمى يأخذ سطراً كاملاً */
            margin-bottom: 5px;
            font-weight: 600;
            color: #495057;
        }

        .form-control {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            box-sizing: border-box; 
            transition: border-color 0.3s;
        }

        .form-control:focus {
            border-color: #17a2b8; /* إطار أزرق سماوي عند التركيز */
            box-shadow: 0 0 5px rgba(23, 162, 184, 0.4);
            outline: none;
        }

        /* تنسيق زر الإرسال */
        .btn-submit {
            width: 100%;
            padding: 12px;
            background-color: #17a2b8; /* لون أزرق سماوي (Info) */
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-submit:hover {
            background-color: #138496; 
        }
    </style>
</head>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            
            <div class="col-md-4 col-sm-8"> 
                
                <div class="form-container">
        <h1>
            Hello in login page</h1>
                <?php
                if(isset($_GET["statusCode"])){
                    if($_GET["statusCode"]=="201"){
                        echo '<div class="alert-success">✅ ِAccount Created</div>';
                    }
                }
                ?>
            <form action="login_users_logic.php" method="post">
                <div class="form-group">
                    <label for="email_input"> email</label>
                    <input type="email"  name="email" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label for="password_input"> Password</label>
                <input type="password" name="password" class="form-control">
                <br>
                <input type="submit" name="login" value="login" class="btn-submit">
</body>

</html>