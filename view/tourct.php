<div class="container2">
        <div class="container-header2">  
            <?php
                extract($onetour);
                
            ?>
            <?php
            
            $hinh = $img_path . $image;
                echo '<div class="images2">  
                <img class="zoomable-image" src="./images/header-img.jpg"    alt="">
                <div class="shadow">
                    <img src="./images/shadow_single.png" alt="">
                </div>
                <div class="title-header">
                        <div class="title-name">
                            <h1>'.$nametour.'</h1>
                            <p>'.$address.'</p>
                        </div>
                        <div class="price-header">
                            
                                <p>Chỉ từ... / khách</p><h1>'.number_format($price, 0, ',', '.').'₫</h1>
                            
                        </div>                         
                </div>
                <div class="position">
                    <a href="#">Trang chủ /</a> <p> '.$nametour.'</p>
                </div>           
            </div> 
            <article>
                
                <div class="container-article2">
                    <div class="box-left">
                    <div class="ticket-type">
                        <i class="fa-solid fa-ticket"></i> <p>'.$title.'</p>
                    </div>
                    <div class="hr-1">

                    </div>
                    <div class="img-product">
                            <img src="'.$hinh.'" alt="">
                    </div>
                    <div class="hr-3">

                    </div>
                    <div class="thongtin-product">
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
                        
                </div>';
            ?>
           <div class="hr-3">

           </div>
           <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
                <script>
                    $(document).ready(function () {
                            $("#comment").load("view/comment/form_comment.php", { idpro: <?=$id?> });
                        });
                </script>
           <div class="comment" id="comment">
              
       </div>
            </div>
            <div class="box-right">
                <div class="booking">
                <div class="gioihan">
                            <div class="title-booking">
                                <h3>Booking</h3>
                            </div>
                            <div class="noidung">
                            <form action="index.php?action=page_cart&id=<?php echo $id; ?>" method="post">
                                <div class="date">
                                    <p class="date-input"> <i class="fa-regular fa-calendar-days"></i> Chọn ngày</p>
                                    
                                        <input type="text" id="datepicker" name="date" onfocus="disableAutoSuggest()" >
                                    </div>
                                        <div class="soluong">
                                            <div class="nguoilon">
                                                <h4>Số người</h4>
                                                <div class="box-soluong">
                                                    <input type="text" name="soluong" placeholder="Số người" required>
                                                </div>
                                                <div class="thongbao_ve">
                                                    Trẻ em dưới 6 tuổi được miễn phí vé
                                                </div>
                                            </div>
                                        </div>
                                        <table border="1" class="bang1">
                        
                                                <tr>
                                                    <td class="total"><p>Giá tour</p></td>
                                                    <td class="td-right total"><p><?php echo ''.number_format($price, 0, ',', '.').'₫'?></p></td>
                                                </tr>
                                            </table>
                                            <?php
                                        if(isset($_SESSION['iduser']) && !empty($_SESSION['iduser'])){
                                            $link = "index.php?action=page_cart&id=".$id;
                                        
                                            echo '
                                                <div class="put-tour">
                                                    <input type="submit" name="addcart" value="Đặt ngay">
                                                </div>
                                                ';
                                        
                                        }else{
                                            
                                            $linkdangnhap = "index.php?action=dangnhap";
                                            echo '
                                            <div class="put-dangnhap">
                                                    <a href="'.$linkdangnhap.'">đăng nhập</a>
                                                </div>
                                                <div class="thongbao_dangnhap">Bạn cần đăng nhập để thực hiện đặt tour</div>
                                                ';
                                        }
                                        
                                    
                                    ?>
                                    </form>
                                </div>
                    
                    
                       

                    </div>
                    
                </div>
                <div class="hr-5">

                </div>
                <div class="thontinlienlac">
                    <div class="title-lienlac">
                        <h4>thông tin liên hệ</h4>
                    </div>
                    <div class="sdt-lienlac">
                        <span><i class="fa-solid fa-phone-volume"></i> 0354423372</span>
                        <p><i class="fa-solid fa-envelope"></i> minhtuan214@gmail.com</p>
                    </div>
                </div>
                <div class="hr-5">

                </div>
                <div class="thontinlienlac">
                    <div class="title-lienlac">
                        <h4>Kết nối</h4>
                        <div class="connect-fb">
                            <i class="fa-brands fa-square-facebook"></i> <p>CHAT FB</p>
                        </div>
                        <div class="connect-khac">
                            <p class="iMess">iMessage <i class="fa-solid fa-comment"></i></p>
                            <p class="viber">Viber <i class="fa-brands fa-viber"></i></p>
                            <p class="whatsapp">Whatsapp <i class="fa-brands fa-square-whatsapp"></i></p>
                            <p class="ins">Instagram <i class="fa-brands fa-instagram"></i></p>
                        </div>
                    </div>
                    
                </div>
                <div class="hr-5">

                </div>
                <div class="thontinlienlac">
                    <div class="title-lienlac">
                        <h4>Top 10 tour hot</h4>
                        <ul class="list-top">
                            <li class="li">
                                <p class="b">01</p>
                                <a href="#"><p>City Tour Đà Nẵng 1 ngày</p></a>
                            </li>
                            <li class="li">
                                <p class="b">02</p>
                                <a href="#"><p>Du thuyền sông Hàn về đêm</p></a>
                            </li>
                            <li class="li">
                                <p class="b">03</p>
                                <a href="#"><p>Du thuyền sông Hàn về đêm</p></a>
                            </li>
                            <li class="li">
                                <p class="b">04</p>
                                <a href="#">Tour Bà Nà 1 ngày</a>
                            </li>
                            <li class="li">
                                <p class="b">05</p>
                                <a href="#">Tour Đà Nẵng - Huế 1 ngày</a>
                            </li>
                            <li class="li">
                                <p class="b">06</p>
                               <a href="#">Vé Bà Nà giá rẻ</a>
                            </li>
                            <li class="li">
                                <p class="b">07</p>
                                <a href="#">Tour Cù Lao Chàm 1 ngày</a>
                            </li>
                            <li class="li">
                                <p class="b">08</p>
                                <a href="#">Vé Vinpearland Nam Hội An</a>
                            </li>
                            <li class="li">
                                <p class="b">09</p>
                                <a href="#">Tour rừng dừa bảy mẫu</a>
                            </li>
                            <li class="li">
                                <p class="b">10</p>
                                <a href="#">Tour câu cá Cù Lao Chàm</a>
                            </li>
                        </ul>
                        
                    </div>
                    
                </div>
                <div class="hr-5">

                </div>
                
                <div class="thontinlienlac">
                    <div class="title-lienlac">
                        <h4>fanpage</h4>
                        <div class="fanpage">
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fwebdulichdanang&tabs=timeline&width=320&height=400&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=598184038321273" width="320" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>                        
                        </div> 
                    </div>
                    
                </div>
                <div class="hr-5">

                </div>
            </div>
        </div>
    </article>