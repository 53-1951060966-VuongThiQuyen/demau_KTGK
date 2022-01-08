<?php
    require_once 'model/UserModel.php';
    class UserController{
        // Điều khiển về mặt logic giữa UserModel và User View
        function index(){
            // Tôi sẽ cần gọi UserModel để truy vấn dữ liệu
            $userModel = new UserModel();
            $users = $userModel->getAllUsers();
            // Sau khi truy vấn được dữ liệu, tôi sẽ đổ ra UserView/index.php tương ứng
            require_once 'view/user/index.php';
        }

        function detail(){
            // Tôi sẽ cần gọi UserModel để truy vấn dữ liệu
            $userID = $_GET['id'];
            $userModel = new UserModel();
            $users = $userModel->getUser($userID);
            // Sau khi truy vấn được dữ liệu, tôi sẽ đổ ra UserView/index.php tương ứng
            require_once 'view/user/detail.php';
        }
        function add(){
                $error = '';
                //xử lý submit form
                if (isset($_POST['submit'])) {
                    $userName = $_POST['name'];
                    $userSex = $_POST['sex'];
                    $userAge = $_POST['age'];
                    $userBgroup = $_POST['bgroup'];
                    $reg_date = $_POST['reg_date'];
                    $userPhone = $_POST['phone'];
                    //xử lý validate, nếu mà để trống tên sách
                    //  thì báo lỗi và không cho submit form
                    if (empty($userName)) {
                        $error = "Name không được để trống";
                    }
                    else {
                        //gọi model để insert dữ liệu vào database
                        $userModel = new UserModel();
                        $userArr = [
                            'name' => $userName,
                            'sex' => $userSex,
                            'age' =>$userAge,
                            'bgroup' =>$userBgroup,
                            'reg_date' =>$reg_date,
                            'phone' =>$userPhone

                        ];
                        $isInsert = $userModel->insert($userArr);
                        if ($isInsert) {
                            $_SESSION['success'] = "Thêm mới thành công";
                        }
                        else {
                            $_SESSION['error'] = "Thêm mới thất bại";
                        }
                        header("Location: index.php?controller=user&action=index");
                        exit();
                    }
                }
            }

            function showAdd(){
               
                require_once 'view/user/add.php';
            }
        function edit(){
            // Kiểm tra nếu người dùng nhấn submit
            $error = '';
                //xử lý submit form
                    $userID = $_GET['id'];
              
                    $userName = $_POST['name'];
                    
                    $userSex = $_POST['sex'];
                    $userAge = $_POST['age'];
                    $userBgroup = $_POST['bgroup'];
                    $reg_date = $_POST['reg_date'];
                    $userPhone = $_POST['phone'];
                    // Tôi sẽ cần gọi UserModel để truy vấn dữ liệu
                    $userModel = new UserModel();
                   
                    

                        $userArr = [
                            'id' => $userID,
                            'name' => $userName,
                            'sex' => $userSex,
                            'age' =>$userAge,
                            'bgroup' =>$userBgroup,
                            'reg_date' =>$reg_date,
                            'phone' =>$userPhone

                        ];
                        $isUpdate = $userModel->update($userArr);
                        if ($isUpdate) {
                            $_SESSION['success'] = "Thêm mới thành công";
                        }
                        else {
                            $_SESSION['error'] = "Thêm mới thất bại";
                        }
                        return;
                        header("Location: index.php?controller=user&action=index");
                        exit();
            // Nếu ko show ra view UserView/edit.php tương ứng

       
    }
        function showEdit(){
            $userID = $_GET['id'];
            $userModel = new UserModel();
            $user = $userModel->getUser($userID);
            
            require_once 'view/user/edit.php';
        }
        function delete(){
                $userID = $_GET['id'];
                if (!is_numeric($userID)) {
                    header("Location: index.php?controller=user&action=index");
                    exit();
                }
        
                $userModel = new UserModel();
                $isDelete = $userModel->delete($userID);
        
                if ($isDelete) {
                    //chuyển hướng về trang liệt kê danh sách
                    //tạo session thông báo mesage
                    $_SESSION['success'] = "Xóa bản ghi #$userID thành công";
                }
                else {
                    //báo lỗi
                    $_SESSION['error'] = "Xóa bản ghi #$userID thất bại";
                }
        
                header("Location: index.php?controller=user&action=index");
                exit();
            }
        
    }
?>