<div class="container2">
        <div class="container-header2">  
                <?php
                        
                        $name = isset($_POST['name']) ? $_POST['name'] : '';
                        $tel = isset($_POST['tel']) ? $_POST['tel'] : '';
                        $email = isset($_POST['email']) ? $_POST['email'] : '';
                        $address = isset($_POST['address']) ? $_POST['address'] : '';
                        

                    ?>
     
                <div class="images2">  
                <img class="zoomable-image" src="./images/header-img.jpg" alt="">
                <div class="shadow">
                    <img src="./images/shadow_single.png" alt="">
                </div>
                <div class="title-header">
                        <div class="title-name_cart">
                            <!-- <h1>'.$nametour.'</h1>
                            <p>'.$address.'</p> -->
                            <h1>TOUR CHECKOUT PAGE</h1>
                        </div>
                        <div class="price-header">
                            
                                <!-- <p>Chỉ từ... / khách</p><h1>₫'.number_format($price, 0, ',', '.').'</h1> -->
                            
                        </div>                         
                </div>
                <div class="position">
                    <a href="#"><i class="fa-solid fa-location-dot"></i> Trang chủ /</a> <p> Trang thanh toán</p>
                </div>           
            </div> 
            <article>
                <form action="index.php?action=billconfirm&id=<?php echo $id; ?>"  method="post">
                <div class="container-article2">
                    <div class="box-left">
                        <div class="thongtin_thanhtoan">
                            <div class="title-checkout">
                                <span class="stt">1</span><h1>Thông tin của bạn</h1>
                            </div>
                            <p class="title_small">Vui lòng điền thông tin chi tiết</p>
                            <?php
                                $linktour ="index.php?action=tourct&id=".$id;
                                echo'<div class="comback2">
                                        <a href="'.$linktour.'" .$id><i class="fa-solid fa-circle-chevron-left"></i> Quay lại</a>
                                    </div>';
                                
                                ?>
                            <div class="box-cart">
                                <div class="text-input_check">
                                    <label for="#">Họ và tên</label><br>
                                    <input type="text" name="name" required>
                                </div>
                                <div class="text-input_check">
                                    <label for="#">Địa chỉ đón</label><br>
                                    <input type="text" name="address" required>
                                </div>
                                
                                <div class="text-input_check">
                                    <label for="#">Số điện thoại</label><br>
                                    <input type="text" name="tel" required>
                                </div>
                                <div class="text-input_check">
                                    <label for="#">Email</label><br>
                                    <input type="text" name="email" required>
                                </div>
                                
                            
                            </div>
                            <div class="hr-3">

                            </div>
                            <div class="title-checkout ghichu">
                                <span class="stt">2</span><h1>Thông tin bổ sung</h1>
                            </div>
                            <p class="title_small cach">Thông tin không bắt buộc</p>
                            <div class="text-input_check ">
                                    <label for="#">Ghi chú về tour</label><br>
                                    <textarea name="description" id="" cols="20" rows="5" placeholder="Ghi chú về tour, ví dụ: thời gian hay chỉ dẫn địa điểm đón chi tiết hơn."></textarea>
                                </div>
                            <div class="hr-3">

                            </div>
                            <div class="title-checkout ghichu">
                                <span class="stt">3</span><h1>Phương thức thanh toán</h1>
                            </div>
                            <p class="title_small cach">Vui lòng chọn phương thức thanh toán</p>
                            <form action="#">
                            <div class="box_radio">
                                <input name="pttt" type="radio" value="0"><span>Thanh toán bằng tiền mặt khi nhận phiếu sử dụng</span>
                                <div class="traingle2"></div>
                                <p>Thực hiện thanh toán vào ngay tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng Mã đơn hàng của bạn trong phần Nội dung thanh toán. Đơn hàng sẽ đươc giao sau khi tiền đã chuyển.</p>
                            </div>
                            <div class="box_radio">
                                <input name="pttt" type="radio"  value="1"><span>Thanh toán chuyển khoản</span>
                                <div class="traingle2"></div>
                                <p>Trả tiền mặt khi giao hàng, Du Lịch Travel sẽ gửi đến bạn phiếu xác nhận dịch vụ – Nhân viên của Du Lịch Travel sẽ thu tiền sau khi bạn nhận được phiếu xác nhận dịch vụ này, đừng lo chúng tôi sẽ thu phí rất nhỏ thôi.</p>
                            </div>                               
                            </form>
                            <div class="btn_final-cart">
                                <input type="hidden" name="id" value="<?$id?>">
                                <input type="submit" name="dongybook" id="" value="Đặt ngay">
                            </div>
                        </div>
                        
                    
            
           
           
            </div>
            <div class="box-right">
                <div class="booking">
                    <div class="gioihan">
                        <div class="title-booking">
                            <h3>Tóm tắt</h3>
                        </div>
                        <div class="noidung">
                        
                        <?php
                            
                            $nametour = isset($_SESSION['cart_tentour']) ? $_SESSION['cart_tentour'] : '';
                            $price = isset($_SESSION['cart_giatour']) ? $_SESSION['cart_giatour'] : '';
                            $date = isset($_SESSION['cart_date']) ? $_SESSION['cart_date'] : '';
                            $soluong = isset($_SESSION['cart_soluong']) ? $_SESSION['cart_soluong'] : '';
                            $idbill = isset($_SESSION['cart_idbill']) ? $_SESSION['cart_idbill'] : '';

                            $tongtien = $soluong * $price;
                            echo'<div class="date">
                                        <p class="date-input"> <i class="fa-regular fa-calendar-days"></i> Ngày đi</p>
                                            <input type="text" id="datepicker" value="'.$date.'" disabled>
                                        </div>
                                        <div class="nametour_check">
                                            <span>Tên tour: </span><p>'.$nametour.'</p>
                                        </div>
                                            
                                        </div>
                                        <table border="1" class="bang">
                                            <tr>
                                                <td>Số người</td>
                                                <td class="td-right">'.$soluong.'</td>
                                            </tr>
                                            <tr>
                                                <td>Tạm tính</td>
                                                <td class="td-right">'.$soluong.' x '.number_format($price, 0, ',', '.').'₫</td>
                                            </tr>
                                            <tr>
                                                <td class="total"><p>Tổng cộng</p></td>
                                                <td class="td-right total"><p>'.number_format($tongtien, 0, ',', '.').'₫</p></td>
                                            </tr>
                                        </table>
                                           
                        ';
                        ?>
                        
                    </div>
                    
                </div>

                
               </form>
    </article>