<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Edit Users from Database</title>
</head>
<body>
    <main>
    <div class="container">
            <h5 class="text-center text-primary mt-5" >Sửa thông tin</h5>
            <form action="index.php?controller=user&action=edit&id=<?php echo $user['bd_id']?>" method="post">
            <div class="form-group">
                <label for="">ID</label>
                <input type="text" class="form-control" disabled id="" name="id" placeholder="" value="<?php echo $user['bd_id']; ?>">
            </div>
            <div class="form-group">
                <label for="txtHoTen">Họ tên</label>
                <input type="text" class="form-control" id="" name="name" placeholder="" value="<?php echo $user['bd_name']; ?>">
            </div>
            <div class="form-group">
                <label for="txtHoTen">Tuổi</label>
                <input type="text" class="form-control" id="" name="age" placeholder="" value="<?php echo $user['bd_age']; ?>">
            </div>
            <div class="form-group">
                <label for="">Giới tính</label>
                <input type="text" class="form-control" id="" name="sex" placeholder="" value="<?php echo $user['bd_sex']; ?>">
            </div>
            <div class="form-group">
                <label for="">Nhóm máu</label>
                <input type="text" class="form-control" id="" name="bgroup" placeholder="" value="<?php echo $user['bd_bgroup']; ?>">
            </div>
            <div class="form-group">
                <label for="">Ngày hiến máu</label>
                <input type="text" class="form-control" id="" name="reg_date" placeholder="" value="<?php echo $user['bd_reg_date']; ?>">
            </div>
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="tel" class="form-control" id="" name="phone" placeholder="" value="<?php echo $user['bd_phno']; ?>">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Lưu Lại</button>
            </form>
        </div>
        </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
</body>
</html>