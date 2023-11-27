<div class="container2">
        <div class="container-header2">  
        <?php
                extract($onetour);
                
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
                            <h1>TOUR CART PAGE</h1>
                        </div>
                        <div class="price-header">
                            
                                <!-- <p>Chỉ từ... / khách</p><h1>₫'.number_format($price, 0, ',', '.').'</h1> -->
                            
                        </div>                         
                </div>
                <div class="position">
                    <a href="#"> <i class="fa-solid fa-location-dot"></i> Trang chủ /</a> <p> Trang giỏ hàng</p>
                </div>           
            </div> 
            <article>
                
                <div class="container-article2">
                    <div class="box-left">

                        <div class="hr-3">

                        </div>
                        <table>
                            <tr class="final_cart">
                                <th colspan="2">Tour</th>
                                <th>Số người</th>
                                <th>Tổng tiền</th>
                            </tr>
                            <?php
                            
                            $date = isset($_SESSION['cart_date']) ? $_SESSION['cart_date'] : '';
                            $soluong = isset($_SESSION['cart_soluong']) ? $_SESSION['cart_soluong'] : '';

                            $_SESSION['cart_tentour'] = $nametour;
                            $_SESSION['cart_giatour'] = $price;
                            $tongtien = $soluong * $price;
                             $hinh = $img_path . $image;
                             echo '<tr class="final-cart">
                                        <td class="name-and-img"><img src="'.$hinh.'" alt=""> </td>
                                        <td class="name-and-img3">'.$nametour.'</td>
                                        <td class="name-and-img2">'.$soluong.'</td>
                                        <td class="name-and-img2 gia">'.number_format($tongtien, 0, ',', '.').'₫</td>
                                    </tr>';
                            ?>
                           
                        </table>
                        <?php
                        $linktour ="index.php?action=tourct&id=".$id;
                        echo'<div class="comback">
                                <a href="'.$linktour.'" .$id><i class="fa-solid fa-circle-chevron-left"></i> Quay lại</a>
                            </div>';
                        
                        ?>
                        
                    <!-- <div class="ticket-type">
                        <i class="fa-solid fa-ticket"></i> <p>'.$title.'</p>
                    </div>
                    <div class="hr-1">

                    </div>
                    <div class="img-product">
                            <img src="'.$hinh.'" alt="">
                    </div>
                    <div class="hr-3">

                    </div> -->
                    <!-- <div class="thongtin-product">
                            <div class="title-h1">
                                <p>Thông tin</p>
                            </div>
                            <div class="title-h2">
                                <span>'.$description.'</span>
                                <div class="title-p">
                                    
                                    
                                </div>
                            </div>
                            
                    </div>
                    <div class="hr-3">

                    </div>
                    <div class="thongtin-product">
                        <div class="title-h1">
                            <p>Lịch trình</p>
                        </div>
                        <div class="title-h2">
                            <span>'.$schedule.'</span>
                            <div class="title-p">
                                    
                                    
                                </div>
                        </div>
                        
                </div> -->
            
           
           
            </div>
            <div class="box-right">
                <div class="booking">
                    <div class="gioihan">
                        <div class="title-booking">
                            <h3>Tóm tắt</h3>
                        </div>
                        <div class="noidung">
                        <form action="index.php?action=checkout&id=<?php echo $id; ?>" method="post">
                        <?php
                        $date = isset($_SESSION['cart_date']) ? $_SESSION['cart_date'] : '';
                            echo'<div class="date">
                            <p class="date-input"> <i class="fa-regular fa-calendar-days"></i> Ngày đi</p>
                            <input type="text" id="datepicker" value="'.$date.'" disabled>
                        </div>';
                        ?>
                        
                           
                    </div>
                    <table border="1" class="bang">

                        <?php
                        
                        $soluong = isset($_SESSION['cart_soluong']) ? $_SESSION['cart_soluong'] : '';
                        $tongtien = $soluong * $price;
                            echo' <tr>
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
                            </tr>';
                        ?>
                       
                    </table>
                        <div class="put-tour">
                            <input type="submit" value="Đặt ngay">
                        </div>
                    </form>
                    </div>
                    
                </div>
                
               
    </article>