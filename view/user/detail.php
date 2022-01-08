<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Show Users from Database</title>
</head>
<body>
    <main>
    <h5 class="text-center text-primary mt-5" >Chi tiết hiến máu</h5>
    <table class="table ms-5">
        <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nhóm máu</th>
                    <th scope="col">tuổi</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Ngày đăng kí</th>
                    <th scope="col">Giới tính</th>
                    </tr>
                </thead>
   
        
          
                <tbody>
                <tr>
                    <th scope="row"><?php echo $users['bd_id']; ?></th>
                    <td><?php echo $users['bd_bgroup']; ?></td>
                    <td><?php echo $users['bd_age']; ?></td>
                    <td><?php echo $users['bd_name']; ?></td>
                    <td><?php echo $users['bd_reg_date']; ?></td>
                    <td><?php echo $users['bd_sex']; ?></td>
                    
                </tr>
                </tbody>
   
           
       
   
     </table>
    </main>
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
</body>
</html>