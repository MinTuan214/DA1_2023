<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../admin/css/style.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Quản trị Travel</title>
    <link rel="icon" type="image/x-icon" href="../images/mona-logo-o3.png">

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    </head>
    <!-- Place the first <script> tag in your HTML's <head> -->
    <script src="https://cdn.tiny.cloud/1/85htlkhhndcv3cxiy19gijcn55tlnfszsibmofwpgp5fv8wh/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- Place the following <script> and <textarea> tags your HTML's <body> -->

<script>
    tinymce.init({
      selector: '#mytextarea'
    });
  </script>
<body>
    <nav>
        <div class="logo-name">
        <?php
                    if(isset($_SESSION['iduser'])&&is_array($_SESSION['iduser'])){  
                        extract($_SESSION['iduser']);
                        $hinhpath ="../uploads/".$image;
                        if(is_file($hinhpath)){
                            $hinh = "<img src='". $hinhpath."' height = '80'>";
                        }else{
                            $hinh = "Không có hình";
                        }
                    }
                ?>   
            <div  class="logo_name">
                <img src="<?=$hinhpath?>" alt="">
            </div>
            <div class="logo_small">
                <img src="<?=$hinhpath?>" alt="">
            </div>
            
            <span class="user-name"><?=$username?></span>
            <p class="title-p">Chào mừng bạn trở lại</p>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="index.php?action=dashboard">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="link-name">Bảng điều khiển</span>
                </a></li>
                <li><a href="index.php?action=listtour">
                    <i class="fa-solid fa-umbrella-beach"></i>
                    <span class="link-name">Tour du lịch</span>
                </a></li>
                <li><a href="index.php?action=listht">
                    <i class="fa-solid fa-hotel"></i>
                    <span class="link-name">Khách sạn</span>
                </a></li>
                <li><a href="index.php?action=listuser">
                    <i class="fa-solid fa-users"></i>
                    <span class="link-name">Khách hàng</span>
                </a></li>
                <li><a href="index.php?action=listcmt">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Bình luận</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-chart-line"></i>
                    <span class="link-name">Bảng thống kê</span>
                </a></li>
                <li><a href="index.php?action=listbooktour">
                    <i class="fa-solid fa-file-invoice-dollar"></i>
                    <span class="link-name">Quản lý đơn hàng</span>
                </a></li>
                <li class="home"><a href="../index.php?action=home">
                    <i class="uil uil-home"></i>
                    <span class="link-name">Website</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="../index.php?action=dangxuat">
                    <i class="uil uil-signout"></i>
                    <span class="link-name logout"><p>Logout</p></span>
                </a></li>

            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <!--<img src="images/profile.jpg" alt="">-->
        </div>