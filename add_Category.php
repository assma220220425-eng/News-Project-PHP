<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
    <link rel="stylesheet" href="bootstrap-grid.min.css"> 
</head>
<body>
    
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="col-lg-4 col-md-6">
                
                <h1 class="text-center mb-4 text-primary">Add new category</h1>

                <form action="addCategory_logic.php" method="post" class="p-4 border rounded shadow">
                    
                    <div class="mb-3">
                        <label for="id_input" class="form-label">ID</label>
                        <input type="text" name="id" id="id_input" class="form-control" placeholder="أدخل رقم ID">
                    </div>
                    
                    <div class="mb-3">
                        <label for="type_input" class="form-label">Type</label>
                        <input type="text" name="type" id="type_input" class="form-control" placeholder="نوع الخبر">
                    </div>

                    <div class="mb-4">
                        <label for="name_input" class="form-label">Name</label>
                        <input type="text" name="name" id="name_input" class="form-control" placeholder="اسم التصنيف">
                    </div>
                    
                    <div class="d-grid">
                        <input type="submit" value=" add_category" name="add_category" class="btn btn-success btn-lg">
                        </div>
                </form>

            </div>
        </div>
    </div>
    
</body>
</html>