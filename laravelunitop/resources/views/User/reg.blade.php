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
        <h1>Đăng Kí</h1>
        <form action='user/store' method='POST'>
            <div class="form-group">
                <label for="username">Tên đăng nhập</label>
                <input type="text" class="form-control" name="username" placeholder="Nhập ở đây"> <br>
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
                
                <form>
                    <label for="city">Thành phố</label>
                    <select name="city" id="city" >
                        <option value="0">Chọn TP</option>
                        <option value="1">Hà Nội</option>
                        <option value="2">Ninh Bình</option>
                        <option value="3">Hà Nam</option>
                        <option value="4">TP Hồ Chí Minh</option>
                    </select>
                </form>
            
            </div>
            <div class="form-group">
                <label>Chọn giới tính</label>
                <br>
                <label for="male">Nam</label>
                <input type="radio" class="form-check-input" name="gender" value="male" id="male">
                <br>
                <label for="female">Nữ</label>
                <input type="radio" class="form-check-input" name="gender" value="female" id="female">

            </div>
            <br>
            <div class="form-group">
                <label name="skill">Kỹ năng</label>
                <div class="form-check">
                <input type="checkbox" class="form-check-input" name="skill" value="Html">
                <label for="Html">Html</label>
                <br>
                <input type="checkbox" class="form-check-input" name="skill" value="CSS">
                <label for="CSS">CSS</label>
                <br>
                <input type="checkbox" class="form-check-input" name="skill" value="PHP">
                <label for="PHP">PHP</label>

            </div>
            </div>
            <div class="form-group">
                <input type="submit" name="sm-reg" value="Đăng ký">
            </div>

        </form> 
    </div>
      
</body>
</html>
