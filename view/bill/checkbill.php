<?php
    session_start();

    include '../../config/connect.php';
    include '../../DAO/pdo.php';
    include '../../DAO/userDAO.php';
    include '../../DAO/tourDAO.php';
    include '../../DAO/hotelDAO.php';
    include '../../DAO/commentDAO.php';
    include '../../DAO/booktour.php';
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết hóa đơn</title>
    <link rel="icon" type="image/x-icon" href="../../images/mona-logo-o3.png">
    <link rel="stylesheet" href="../../css/bill.css">
</head>
<body>
<div class="container-hoadon">
   
    <?php
        $name = isset($_SESSION['cart_user_name']) ? $_SESSION['cart_user_name'] : '';
        $tel = isset($_SESSION['cart_user_tel']) ? $_SESSION['cart_user_tel'] : '';
        $email = isset($_SESSION['cart_user_email']) ? $_SESSION['cart_user_email'] : '';
        $address = isset($_SESSION['cart_user_address']) ? $_SESSION['cart_user_address'] : '';
        $nametour = isset($_SESSION['cart_tentour']) ? $_SESSION['cart_tentour'] : '';
        $price = isset($_SESSION['cart_giatour']) ? $_SESSION['cart_giatour'] : '';
        $date = isset($_SESSION['cart_date']) ? $_SESSION['cart_date'] : '';
        $soluong = isset($_SESSION['cart_soluong']) ? $_SESSION['cart_soluong'] : '';
        $idbill = isset($_SESSION['idbill']) ? $_SESSION['idbill'] : '';
    
        
        $tongtien = $soluong * $price;
        
         echo'<div class="box-hoadon">
         <div class="nav-hoadon">

                 <h1>Hóa đơn</h1>
                 <h2>ID Tour #MT'.$idbill.'</h2>
         </div>
         <div class="hr-3">
 
         </div>
         <div class="thongtin-hoadon">
             <div class="ten-ngay">
                 <div class="ten">
                     <span>Booking đặt cho: </span><p>'.$name.'</p>
                 </div>
                 <div class="ngay">
                     <span>Ngày đặt: </span><p>'.$date.'</p>
                 </div>
                 
             </div>
             <div class="thongtincanhan">
                 <span>Số điện thoại: </span> <p>'.$tel.'</p>
             </div>
             <div class="thongtincanhan">
                 <span>Địa chỉ: </span> <p class="diachi">'.$address.'</p>
             </div>
             <div class="thongtincanhan">
                 <span>Địa chỉ Email: </span> <p>'.$email.'</p>
             </div>
         </div>
 
         <div class="tomtat-hoadon">
             <div class="tieude">
                 <p>Tóm tắt Booking</p>
             </div>
             <table border="1">
                 <tr>
                     <th>ID Booking</th>
                     <th class="thongtin">Thông tin</th>
                     <th>Tổng tiền</th>
                 </tr>
                 <tr>
                     <td>#MT'.$idbill.'</td>
                     <td>'.$nametour.' - '.$date.' - '.$soluong.' người</td>
                     <td>'.number_format($tongtien, 0, ',', '.').'₫</td>
                 </tr>
                 <tr class="tongtien"> 
                     <td  colspan="2" class="tongchitiet">Tổng cộng: </td>
                     <td class="giachitiet">'.number_format($tongtien, 0, ',', '.').'₫</td>
                 </tr>
             </table>
         </div>
     </div>';
    ?>
    
</div>
</body>
</html>