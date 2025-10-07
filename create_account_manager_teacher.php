<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>createaccount</title>
     <link rel="stylesheet" href="bootstrap-grid.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* خلفية بيضاء خفيفة */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; /* لضمان توسيط النموذج عمودياً */
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .form-container {
            /* تصميم حاوية النموذج */
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* ظل أنيق */
            width: 100%;
        }

        h1 {
            color: #007bff; /* لون أزرق جذاب */
            text-align: center;
            margin-bottom: 30px;
            font-size: 1.8rem;
        }
        
        /* تنسيق حقول الإدخال */
        .form-control {
            width: 100%;
            padding: 10px 15px;
            margin-bottom: 15px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            box-sizing: border-box; /* لضمان أن Padding لا يزيد العرض */
            transition: border-color 0.3s;
        }

        .form-control:focus {
            border-color: #007bff; /* إطار أزرق عند التركيز */
            outline: none;
        }

        /* تنسيق زر الإرسال */
        .btn-submit {
            width: 100%;
            padding: 12px;
            background-color: #28a745; /* لون أخضر (نجاح) */
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
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
            
            <div class="col-md-5 col-sm-8"> 
                
                <div class="form-container">
    <center>
    <h1>hello on website</h1> 
    <form action="createAccount_manager_teacher_logic.php" method="post">
        <input type="text" name="id" placeholder="id" class="form-control">
        <br>
        <input type="text" name="name" placeholder="name" class="form-control">
        <br>
        <input type="email" name="email" placeholder="email" class="form-control">
        <br>
        <input type="password" name="password" placeholder="password" class="form-control">
        <br>
        <input type="submit" value="create" name="create_account">
</form>

</center>
</body>
</html>