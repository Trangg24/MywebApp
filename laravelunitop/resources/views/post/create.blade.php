<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Thêm bài viết</h1>
        <form action='post/store' method='GET'>
            <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="Tieu de"> <br>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="content" placeholder="Nội dung" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" name="sm-add">
            </div>

        </form> 
    </div>
      
</body>
</html>
