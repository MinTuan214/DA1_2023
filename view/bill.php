
<div class="container2">
        <div class="container-header2">                  
                <div class="images2">  
                <img class="zoomable-image" src="./images/header-img.jpg" alt="">
                <div class="shadow">
                    <img src="./images/shadow_single.png" alt="">
                </div>
                <div class="title-header">
                        <div class="title-name_cart">
                            <!-- <h1>'.$nametour.'</h1>
                            <p>'.$address.'</p> -->
                            <h1>TOUR BOOKING CONFIRMATION PAGE</h1>
                        </div>
                        <div class="price-header">
                            
                                <!-- <p>Chỉ từ... / khách</p><h1>₫'.number_format($price, 0, ',', '.').'</h1> -->
                            
                        </div>                         
                </div>
                <div class="position">
                    <a href="#"><i class="fa-solid fa-location-dot"></i> Trang chủ /</a> <p> Trang xác nhận đặt tour</p>
                </div>           
            </div> 
            <article>
                
                <div class="container-article2">
                    <div class="box-left">
                        <div class="thongtin_thanhtoan">
                            <div class="title-checkout">
                                <span class="stt"><i class="fa-solid fa-check"></i></span><h1>Cảm ơn bạn</h1>
                            </div>
                            <p class="title_small">Đơn đặt hàng của bạn đã được xác nhận</p>
                            <div class="thankyou">
                                <p>Cảm ơn bạn đã đặt tour tại Travel</p>
                            </div>
                            <div class="title-checkout">
                                <span class="stt"><i class="fa-solid fa-tag"></i></span><h1>Tóm tắt booking</h1>
                            </div>
                            <p class="title_small">Thông tin booking của bạn được tóm tắt lại.</p>
                            <div class="content-tomtat">
                                <?php
                                $nametour = isset($_SESSION['cart_tentour']) ? $_SESSION['cart_tentour'] : '';
                                $price = isset($_SESSION['cart_giatour']) ? $_SESSION['cart_giatour'] : '';
                                $date = isset($_SESSION['cart_date']) ? $_SESSION['cart_date'] : '';
                                $soluong = isset($_SESSION['cart_soluong']) ? $_SESSION['cart_soluong'] : '';
                                    
                                $tongtien = $soluong * $price;
                                echo'<table border="1">
                                <tr >
                                    <th>Tên</th>
                                    <td>'.$name.'</td>
                                </tr>
                                <tr>
                                    <th>Ngày</th>
                                    <td>'.$date.'</td>
                                </tr>
                                <tr>
                                    <th>Tên tour</th>
                                    <td>'.$nametour.'</td>
                                </tr>
                                <tr>
                                    <th>Số người</th>
                                    <td>'.$soluong.'</td>
                                </tr>
                                <tr>
                                    <th>Tổng tiền</th>
                                    <td>'.number_format($tongtien, 0, ',', '.').'₫</td>
                                </tr>
                            </table>
                        </div>';
                                
                            ?>
                    
           
           
            </div>
            </div>
            <div class="box-right">
                <div class="booking">
                    <div class="gioihan">
                        <div class="title-booking">
                            <h3>Cảm ơn bạn</h3>
                        </div>
                        <div class="noidung">
                            <p>Cám ơn bạn đã đặt tour tại Travel</p>
                        
                        <div class="hr-3">

                        </div>
                        <div class="put-dangnhap">
                            
                            <a href="view/bill/checkbill.php" target="_blank">Xem hóa đơn chi tiết</a>
                        </div>
                    </div>
                    
                    </div>

                
               
</article>