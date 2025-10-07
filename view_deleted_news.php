<?php
include "connectionOnDataBase.php";
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>view deleted news</title>
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">

    <style>
        body {
            background-color: #f8f9fa; /* خلفية بيضاء خفيفة */
            padding-top: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #343a40;
        }
        
        .header {
            color: #dc3545; /* لون أحمر للإشارة إلى محتوى محذوف */
            text-align: center;
            margin-bottom: 30px;
            font-size: 2rem;
            border-bottom: 3px solid #dc3545;
            padding-bottom: 10px;
            display: inline-block;
        }

        /* تنسيق الجدول */
        .styled-table {
            width: 100%;
            border-collapse: collapse;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
        }
        
        .styled-table th {
            background-color: #dc3545; /* خلفية حمراء لرأس الجدول */
            color: white;
            padding: 12px 15px;
            text-align: right; /* محاذاة لليمين للغة العربية */
        }
        
        .styled-table td {
            padding: 12px 15px;
            border-bottom: 1px solid #dee2e6;
            text-align: right;
            max-width: 200px; /* للتحكم بعرض الخلايا */
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        .styled-table tbody tr:nth-child(even) {
            background-color: #fcebeb; /* لون خفيف جداً يميل للأحمر للصفوف الزوجية */
        }
        
        .styled-table tbody tr:hover {
            background-color: #f8d7da; /* لون أحمر فاتح عند التمرير */
        }

        /* تنسيق رسالة لا توجد بيانات */
        .no-data-message {
            color: #6c757d;
            padding: 20px;
            text-align: center;
            font-style: italic;
        }
        
        /* تنسيق الخلايا الخاصة (لتغيير لون محتوى "deleted") */
        .deleted-cell {
            font-weight: bold;
            color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                
                <div style="text-align: center;">
                    <h1>deleted news</h1><div>

<table border="1" class="styled-table">
    <tr>
        <th>Category</th>
        <th>detail </th>
        <th>id_user</th>
        <th>image</th>
        <th>title</th>
        <th>deleted </th>
    </tr>

<?php
$sql = "SELECT * FROM newsdata WHERE deleted = 1";
$result = $connection->query($sql);

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['category'] . "</td>";
        echo "<td>" . $row['detail'] . "</td>";
        echo "<td>" . $row['id_user'] . "</td>";
        echo "<td>" . $row['image'] . "</td>";
        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['deleted'] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>There is no deleted news   </td></tr>";
}
?>

</table>
</body>
</html>
