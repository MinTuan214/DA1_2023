<?php
    session_start();
    include '../../DAO/commentDAO.php';
    include '../../DAO/pdo.php';
    include '../../DAO/userDAO.php';    
    
    $idpro = $_REQUEST['idpro']; //Dùng đối tượng request để đọc giá trị idpro ở hàm truyền data ở trong tourct
    $dsbl = loadAll_comment($idpro);
    $totalComments = countComments($idpro);
    date_default_timezone_set('Asia/Ho_Chi_Minh');

    // $image = isset($_SESSION['image']) ? $_SESSION['image'] : 'default_avatar.jpg';
    if (isset($_SESSION['iduser']) && is_array($_SESSION['iduser'])) {
        $iduser_infor = $_SESSION['iduser'];
        $hinhpath = "../uploads/" . $iduser_infor['image'];
        if (is_file($hinhpath)) {
            $hinh = "<img src='" . $hinhpath . "' height='80'>";
        } else {
            $hinh = "Không có hình";
        }
    } else {
        // Xử lý khi không có thông tin người dùng trong phiên
        $hinh = "Không có hình";
    }
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../../css/tour.css">

</head>
<body>
        <div class="text-comment">
                        <div class="title-h1">
                            <p>Bình luận</p>
                        </div>
                        <div class="quantity-cmt">
                            <span><?=$totalComments?> bình luận</span>
                            
                        </div>
                        <div class="hr-4">

                        </div>
                    <?php  
                    if(isset($_SESSION['iduser']) && !empty($_SESSION['iduser'])){
                        echo'<form action="'.$_SERVER['PHP_SELF'].'" method="post" enctype="multipart/form-data">
                        <div class="form-cmt">
                            <div class="avt">
                                <img src="'.$hinhpath.'" alt="" width="50px" height="48px">
                            </div>
                        
                            <div class="text-cmt">
                                <input type="hidden" name="idpro" value="'.$idpro.'">
                                <input type="text" name="content" placeholder="Viết bình luận...">
                            </div>
                        
                        </div>
                        <div class="upcmt">
                            <input type="submit" name="themcmt" value="Đăng">
                        </div>
                    </form>';
                    }else{
                        echo'<div class="form-cmt">
                        <div class="avt">
                            <img src="../images/avt.png" alt="" width="50px" height="48px">
                        </div>
                    
                        <div class="text-cmt">
                            <input type="hidden" name="idpro" value="'.$idpro.'">
                            <input type="text" name="content" disabled placeholder="Viết bình luận...">
                        </div>
                    
                    </div>
                    <div class="upcmt">
                        <input type="submit" name="themcmt" disabled value="Đăng">
                    </div>';
                        echo '<p class="thongbao_login">Bạn cần phải <a href="index.php?action=dangnhap"> đăng nhập</a> để có thể bình luận</p>';
                    }
                    
                    
                    ?>
                    <?php
                        if (isset($_POST['themcmt']) && $_POST['themcmt']) {
                            // Kiểm tra phiên đã được khởi tạo và người dùng đã đăng nhập
                                $idpro = $_POST['idpro'];
                                $content = $_POST['content'];
                                $iduser = $_SESSION['iduser']['iduser'];
                                $ngaybinhluan = date("H:i d/m/Y");
                                insert_comment($content, $iduser, $idpro, $ngaybinhluan);
                                header("location: " . $_SERVER['HTTP_REFERER']);
                            }
                        
                    ?>


                    
                        <?php
                        foreach ($dsbl as $bl) {
                            extract($bl);
                            $user_image_path = "../uploads/".$user_image;
                            if (is_file($user_image_path)) {
                                $user_image_display = "Không có hình";
                            } else {
                                $user_image_display = "<img src='". $user_image_path."' width='50px' height='48px'>";

                            }
                        
                            echo '<div class="content-comment">
                                <div class="avt-user_cmt">
                                    '.$user_image_display.'
                                </div>
                                <div class="form-user_comment">
                                    <p class="name-user-comment">'.$username.'</p>
                                    <p class="content-user_comment">'.$content.'</p>
                                    <div class="tuongtac">
                                        <p class="like">Thích</p>
                                        <p class="like">Phản hồi</p>
                                        <p class="thoigian">'.$ngaybinhluan.'</p>
                                    </div>
                                </div>
                            </div>';
                        
                    }
                    ?>
                    <div class="hr-4">

                    </div>
                  
                    </div>
</body>
</html>