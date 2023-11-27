<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="../owlcarousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="../owlcarousel/assets/owl.theme.default.min.css">    
    
    <script src="../owlcarousel/owl.carousel.min.js"></script>
    
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/tour.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Travel</title>
    <link rel="icon" type="image/x-icon" href="../images/mona-logo-o3.png">
    
    
</head>
<body>
<div class="container">
        <div class="container-header">
            <div class="header">
            
                <div class="menu">
                    <div id="logo">
                        <a href="index.php?action=home"><img src="./images/mona-logo-o3.png" alt=""></a>
    
                    </div>
                    <div class="list">
                        <ul class="list-ul">
                            <li  class="danhmuc active"><a href="index.php?action=home">Trang chủ</a></li>
                            <li class="danhmuc"><a href="index.php?action=tour">Tours</a></li>
                            <li class="danhmuc"><a href="index.php?action=hotel">Khách sạn</a></li>
                            <li class="danhmuc"><a href="index.php?action=khoanhkhac">Khoảnh khắc</a></li>
                            <li class="danhmuc"><a href="index.php?action=gioithieu">Giới thiệu</a></li>
                            <li class="danhmuc"><a href="#">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
            <div class="login-register">
                <?php
                    if(isset($_SESSION['iduser'])&&is_array($_SESSION['iduser'])){  
                        extract($_SESSION['iduser']);
                        $hinhpath ="../uploads/".$image;
                        if(is_file($hinhpath)){
                            $hinh = "<img src='". $hinhpath."' height = '80'>";
                        }else{
                            $hinh = "Không có hình";
                        }
                ?>      
                        <div class="infor-user">
                            <div class="list-infor">
                                <div class="anhdaidien">
                                    <img src="<?=$hinhpath?>" alt="" >
                                </div>
                                    
                                <span><?=$username?>
                                    <ul class="list-chucnang">
                                        <div class="traingle"></div>
                                        <?php
                                        if($role==1){?>

                                        <li><a href="admin/index.php?action=dashboard">Vào quản trị</a></li>
                                        <?php }?>
                                        <li><a href="index.php?action=taikhoan">Tài khoản của tôi</a></li>
                                        <li><a href="index.php?action=donbook">Đơn book</a></li>
                                        <li><a href="index.php?action=dangxuat">Đăng xuất</a></li>
                                    </ul>
                                </span>
                            </div>
                           
                        </div>
                       
                       
                <?php
                    }else{
                ?>
                <a href="index.php?action=dangnhap" class="login-product">Đăng nhập | </a>
                <a href="index.php?action=dangky" class="register-product">Đăng ký</a>
                
                <?php }?>
            </div>
                <!-- <-- form đăng nhập -->
            
            
  
