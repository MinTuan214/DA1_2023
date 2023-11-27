
            <div class="slide-show">
                <!-- đom đóm -->
                <div class="circle">
                    
                </div>
                
           
            
            
            
                <div class="list-images">
                    
                    <div class="images">
                        <div class="title-banner">
                            <h2 class="title-slide thin">Lạc vào tiên cảnh </h2>
                            <h2 class="title-slide"><strong>Bà Nà Hill</strong></h2>
                            <p class="title-slide">Giảm giá 30% cho khách hàng tháng 10/2023</p>
                        </div>
                        <img class="zoomable-image" src="./images/./cau-vang-da-nang-la-mot-trong-nhung-noi-dang-ghe-tham-nhat-nam-2018-theo-tap-chi-time.jpg" alt="">             
                    </div>
                    <div class="images">
                        <div class="title-banner2">
                            <h2 class="title-slide thin">"Lạc lối" xứ sở đèn lồng</h2>
                            <h2 class="title-slide"><strong>Phố cổ Hội An</strong></h2>
                            <p class="title-slide">Giảm giá 30% cho khách hàng tháng 10/2023</p>
                        </div>
                        <img src="./images/./slide2.jpg" alt="">
                    </div>
                    <div class="images">
                        <div class="title-banner3">
                            <h2 class="title-slide thin">Vươn mình ra biển lớn</h2>
                            <h2 class="title-slide"><strong>cầu Rồng - Đà Nẵng</strong></h2>
                            <p class="title-slide">Giảm giá 30% cho khách hàng tháng 10/2023</p>
                        </div>
                        <img src="./images/slide3.jpg" alt="">
                    </div>
                    
                </div>
                <div class="btns">
                    <div class="prev btn"><i class="fa-solid fa-circle-chevron-left"></i></div>
                    <div class="next btn"><i class="fa-solid fa-circle-chevron-right"></i></div>
                </div>
                
            </div>
            
           
         

        </div> 
        <!-- Tìm kiếm -->
        <nav>
            <div class="search-tour">
            <form action="index.php?action=tour" method="post">
                <input class="input" name="kyw" type="text" placeholder="Tìm tour">
                <select class="input" name="khoangia" id="">
                    <option value="0">Khoảng giá</option>
                    <option value="1">Từ cao đến thấp</option>
                    <option value="2">Từ thấp đến cao</option>
                </select>
                
                <input class="input search"  type="submit"  value="Tìm tour ngay">
               
                </form>
            </div>
        </nav>

        <!-- Địa điểm hot -->
        <article>
            <div class="map-hot">
                <div class="content-hot">
                    <div class="title-hot"><h1>Điểm đến <span>không</span> thể bỏ qua</h1></div>
                    <div class="title-small">Chiêm ngưỡng tuyệt tác thiên nhiên</div>
                </div>
                <div class="owl-carousel">
                        <div class="img-in">
                            <div class="oveflow"></div>
                                <img src="./images/mykhe.jpg" alt="">
                                <p class="hover-title">Biển Mỹ Khê</p>
                            
                        </div>
                        <div class="img-in">
                            <div class="oveflow"></div>
                                <img src="./images/./1057_deo_hai_van.jpg" alt="">
                                <p class="hover-title">Đèo Hải Vân</p>
                            
                        </div>
                        <div class="img-in">
                            <div class="oveflow"></div>
                                <img src="./images/bana2.jpg" alt="">
                                <p class="hover-title">Bà Nà Hill</p>
                        </div>
                        <div class="img-in">
                            <div class="oveflow"></div>
                                <img src="./images/bana3.jpg" alt="">
                                <p class="hover-title">Bà Nà Hill</p>
                        </div>
                        <div class="img-in">
                            <div class="oveflow"></div>
                                <img src="./images/bana4.jpeg" alt="">
                                <p class="hover-title">Lâu đài Pháp</p>
                        </div>
                        <div class="img-in">
                            <div class="oveflow"></div>
                                <img src="./images/hoian.jpg" alt="">
                                <p class="hover-title">Phố cổ Hội An</p>
                        </div>
                        <div class="img-in">
                            <div class="oveflow"></div>
                                <img src="./images/my-son.jpg" alt="">
                                <p class="hover-title">Thánh địa Mỹ Sơn</p>
                        </div>
                        <div class="img-in">
                            <div class="oveflow"></div>
                                <img src="./images/coco.jpg" alt="">
                                <p class="hover-title">COCOBAY</p>
                        </div>
                        <div class="img-in">
                            <div class="oveflow"></div>
                                <img src="./images/coco2.jpg" alt="">
                                <p class="hover-title">Coco Beach</p>
                        </div>
                </div>      
            </div>

            <!-- map-danang -->
            <div class="map-danang">
                <div class="content-danang">
                    <div class="title-danang"><h1>Tour <span>Đà</span> Nẵng</h1></div>
                    <div class="title-small-danang">Tour ghép hàng ngày khởi hành từ TP Đà Nẵng giá rẻ</div>
                </div>
                <div class="tours">
                    <?php
                        foreach ($tournew as $tn) { //mỗi lần lặp sẽ lấy 1 tour
                            extract($tn); //lấy tên biến để show ra 
                            $linktour ="index.php?action=tourct&id=".$id;
                            $hinh = $img_path.$image;
                            echo'<div class="tour">
                            <div class="img-tour">
                                <a href="'.$linktour.'"><img src="'.$hinh.'" alt=""></a>
                                <div class="title-price">
                                    <p class="thongtin"><i class="fa-solid fa-ticket"></i> '.$title.'</p>
                                    <p class="price">₫' .number_format($price, 0, ',', '.').'</p>
                                </div>
                                
                            </div>
                            <div class="infor-tour">
                                <a href="'.$linktour.'"><p>'.$nametour.'</p></a>
                            </div>
                        </div>';
                        
                        }
                    ?>
               
            </div>
            <!-- tour hot -->
            <div class="tour-hot">
                <div class="content-danang">
                    <div class="title-danang"><h1>Tour <span>hot</span></h1></div>
                    <div class="title-small-danang">Tour được nhiều khách lựa chọn nhất</div>
                </div>
                <div class="tours-detal">
                    <div class="tour-detal">
                    <div class="img-tour-hot">
                        <img src="./images/./hue.jpg" alt="">
                        <div class="title-price-hot">
                            <p class="thongtin-hot"><i class="fa-solid fa-users"></i> Khám phá lịch sử</p>
                            <p class="price-hot">660.000đ</p>
                        </div>
                        
                    </div>
                    <div class="infor-tour-hot">
                        <p>TOUR HUẾ 1 NGÀY TỪ ĐÀ NẴNG</p>
                    </div>
                </div>
                <div class="tour-detal">
                    <div class="img-tour-hot">
                        <img src="./images/./tour-ba-na-da-nang-537x360.jpg" alt="">
                        <div class="title-price-hot">
                            <p class="thongtin-hot"><i class="fa-solid fa-users"></i> Tour Bà Nà</p>
                            <p class="price-hot">1.190.000đ</p>
                        </div>
                        
                    </div>
                    <div class="infor-tour-hot">
                        <p>ĐÀ NẴNG – BÀ NÀ HILLS</p>
                    </div>
                </div>
                <div class="tour-detal">
                    <div class="img-tour-hot">
                        <img src="./images/./hoi-an-537x360.jpg" alt="">
                        <div class="title-price-hot">
                            <p class="thongtin-hot"><i class="fa-solid fa-users"></i> Tour ghép</p>
                            <p class="price-hot">400.000đ</p>
                        </div>
                        
                    </div>
                    <div class="infor-tour-hot">
                        <p>ĐÀ NẴNG – NGŨ HÀNH SƠN – HỘI AN</p>
                    </div>
                </div>
                <div class="tour-detal">
                    <div class="img-tour-hot">
                        <img src="./images/./ngu-hanh-son-537x360.jpg" alt="">
                        <div class="title-price-hot">
                            <p class="thongtin-hot"><i class="fa-solid fa-users"></i> Tour Hội An</p>
                            <p class="price-hot">400.000đ</p>
                        </div>
                        
                    </div>
                    <div class="infor-tour-hot">
                        <p>ĐÀ NẴNG – NGŨ HÀNH SƠN – HỘI AN</p>
                    </div>
                </div>
                </div>
                <div class="xemthem">
                    <a href="index.php?action=tour"><i class="fa-solid fa-eye"></i> Xem thêm tour</a>
                </div>
            </div>
            <!-- khách sạn -->
            <div class="hr">

            </div>

            <div class="hotel">
                <div class="content-danang">
                    <div class="title-danang"><h1>Top <span>khách</span> sạn</h1></div>
                    <div class="title-small-danang">Hệ thống đặt phòng khách sạn giá rẻ tại Đà Nẵng, một cú Click #datphongdanang đặt ngay được phòng</div>
                </div>
                <div class="tours-detal">
                    <?php
                        foreach ($hotelnew as $htn) {
                            extract($htn);
                            $hinh = $img_path.$image;
                            echo '<div class="tour-detal">
                            <div class="img-tour-hot">
                                <img src="'.$hinh.'" alt="">
                                <div class="title-price-hot">
                                    <p class="thongtin-hot">'.$title.'</p>
                                    <p class="price-hot">₫'.number_format($price, 0, ',', '.').'</p>
                                </div>
                                
                            </div>
                            <div class="infor-tour-hot">
                                <p>'.$namehotel.'</p>
                            </div>
                        </div>';
                        }
                    ?>
                </div>
                    <!-- <div class="tour-detal">
                    <div class="img-tour-hot">
                        <img src="./images/./novotel-da-nang-500x333.jpg" alt="">
                        <div class="title-price-hot">
                            <p class="thongtin-hot"> From/Per night</p>
                            <p class="price-hot">4.660.000đ</p>
                        </div>
                        
                    </div>
                    <div class="infor-tour-hot">
                        <p>NOVOTEL DANANG PREMIER HAN RIVER</p>
                    </div>
                </div>
                <div class="tour-detal">
                    <div class="img-tour-hot">
                        <img src="./images/./Dana-Marina-Hotel-500x333.jpg" alt="">
                        <div class="title-price-hot">
                            <p class="thongtin-hot"> From/Per night</p>
                            <p class="price-hot">790.000đ</p>
                        </div>
                        
                    </div>
                    <div class="infor-tour-hot">
                        <p>DANA MARINA HOTEL</p>
                    </div>
                </div>
                <div class="tour-detal">
                    <div class="img-tour-hot">
                        <img src="./images/./Eco-Green-Boutique-Hotel-500x333.jpg" alt="">
                        <div class="title-price-hot">
                            <p class="thongtin-hot">From/Per night</p>
                            <p class="price-hot">1.140.000đ</p>
                        </div>
                        
                    </div>
                    <div class="infor-tour-hot">
                        <p>ECO GREEN BOUTIQUE HOTEL</p>
                    </div>
                </div>
                <div class="tour-detal">
                    <div class="img-tour-hot">
                        <img src="./images/./art-hotel-da-nang-500x333.jpg" alt="">
                        <div class="title-price-hot">
                            <p class="thongtin-hot">From/Per night</p>
                            <p class="price-hot">630.000đ</p>
                        </div>
                        
                    </div>
                    <div class="infor-tour-hot">
                        <p>ART HOTEL DA NANG</p>
                    </div>
                </div>
                </div>
                <div class="tours-detal">
                    <div class="tour-detal">
                    <div class="img-tour-hot">
                        <img src="./images/./mandila-beach-hotel-500x333.jpg" alt="">
                        <div class="title-price-hot">
                            <p class="thongtin-hot">From/Per night</p>
                            <p class="price-hot">1.800.000đ</p>
                        </div>
                        
                    </div>
                    <div class="infor-tour-hot">
                        <p>MANDILA BEACH HOTEL</p>
                    </div>
                </div>
                <div class="tour-detal">
                    <div class="img-tour-hot">
                        <img src="./images/./A-La-Carte-Da-Nang-Beach-500x333.jpeg" alt="">
                        <div class="title-price-hot">
                            <p class="thongtin-hot">From/Per night</p>
                            <p class="price-hot">5.390.000đ</p>
                        </div>
                        
                    </div>
                    <div class="infor-tour-hot">
                        <p>A LA CARTE DA NANG BEACH</p>
                    </div>
                </div>
                <div class="tour-detal">
                    <div class="img-tour-hot">
                        <img src="./images/./G8.webp" alt="">
                        <div class="title-price-hot">
                            <p class="thongtin-hot">From/Per night</p>
                            <p class="price-hot">800.000đ</p>
                        </div>
                        
                    </div>
                    <div class="infor-tour-hot">
                        <p>G8 Luxury Hotel and Spa Da Nang</p>
                    </div>
                </div>
                <div class="tour-detal">
                    <div class="img-tour-hot">
                        <img src="./images/./taian.webp" alt="">
                        <div class="title-price-hot">
                            <p class="thongtin-hot">From/Per night</p>
                            <p class="price-hot">670.000đ</p>
                        </div>
                        
                    </div>
                    <div class="infor-tour-hot">
                        <p>Taian Hotel & Apartment</p>
                    </div>
                </div> -->
                </div>
                
                <div class="xemthem">
                    <a href="#"><i class="fa-solid fa-eye"></i> Xem thêm khách sạn</a>
                </div>
            </div>
            <div class="bus">
                <div class="voucher-bus">
                    <div class="text">
                        <div class="text-voucher">
                            <h4 >Xe bus du lịch đà nẵng</h4>
                        </div>
                        <div class="text_small-voucher">
                            <p>Khám phá Đà Nẵng bằng xe Bus du lịch 2 tầng, chất lượng cao</p>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- list tour -->
            <div class="choose">
                <div class="content-danang">
                    <div class="title-danang"><h1>Lý do <span>chọn</span> chúng tôi</h1></div>
                    <div class="title-small-danang">Đây là những lý do mà bạn phải chọn chúng tôi khi đi du lịch tại Đà Nẵng</div>
                </div>
                <div class="list-chooses">
                    <div class="list-choose">
                        <div class="round">
                            <i class="fa-solid fa-map-location-dot"></i>
                        </div>
                        <div class="title-choose">
                            <p><span>+100 Tour ghép</span> hàng ngày</p>
                        </div>
                        <div class="title-choose_small">
                            <p>Giới thiệu trên +100 tour ghép hàng ngày được khởi hành từ Đà Nẵng đi các điểm nổi tiếng của miền Trung và Việt Nam.</p>
                        </div>
                        <div class="btn-chitiet">
                            <a href="#"><input type="button" value="Chi tiết"></a>
                        </div>
                    </div>

                    <div class="list-choose">
                        <div class="round">
                            <i class="fa-solid fa-person-hiking"></i>
                        </div>
                        <div class="title-choose">
                            <p><span>Giá rẻ</span>, chất lượng</p>
                        </div>
                        <div class="title-choose_small">
                            <p>Với phương châm cung cấp dịch vụ du lịch Đà Nẵng giá rẻ và chất lượng luôn mang đến cho du khách những trải nghiệm đầy đủ và tuyệt vời nhất</p>
                        </div>
                        <div class="btn-chitiet">
                            <a href="#"><input type="button" value="Chi tiết"></a>
                        </div>
                    </div>

                    <div class="list-choose">
                        <div class="round">
                            <i class="fa-solid fa-headset"></i>
                        </div>
                        <div class="title-choose">
                            <p><span>Hỗ trợ</span> 27/7/265</p>
                        </div>
                        <div class="title-choose_small">
                            <p>Với đội ngũ online 24h, trực tuyến qua các ứng dụng Zalo, Viber, Wechat, Facebook, Whatsup…hỗ trợ bạn mọi thời gian, mọi lúc, mọi nơi</p>
                        </div>
                        <div class="btn-chitiet">
                            <a href="#"><input type="button" value="Chi tiết"></a>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="hr">

            </div>
            <div class="intruct">
                <div class="intruct-img">
                    <img src="./images/laptop.jpg" alt="">
                </div>
                <div class="title-intruct">
                    <h4><span>Hướng dẫn</span> các bước đặt dịch vụ</h4>
                    <h5>Với các bước đơn giản, nhanh chóng, bạn chỉ cần làm theo các bước sau</h5>
                    <ul class="list-intruct">
                        <li>
                            <b>1</b>
                            <p>Chọn dịch vụ mà bạn đang cần</p>
                        </li>
                        <li>
                            <b>2</b>
                            <p>Chọn ngày khởi hành</p>
                        </li>
                        <li>
                            <b>3</b>
                            <p>Thêm thông tin của bạn</p>
                        </li>
                        <li>
                            <b>4</b>
                            <p>Đặt tour</p>
                        </li>
                    </ul>
                    <div class="book-tour">
                        <input type="submit" value="book tour">
                    </div>
                </div>
            </div>
            <div class="hr">

            </div>
        </article>