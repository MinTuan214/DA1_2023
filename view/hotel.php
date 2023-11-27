
<div class="container2">
        <div class="container-header2"> 
            

                <div class="images2">  
                    <img class="zoomable-image" src="../uploads/vuon-hoa-ba-na-hills.jpg" alt="" height="400px">
                    <div class="position">
                        <a href="#">Trang chủ /</a> <p> Danh sách khách sạn</p>
                    </div>
                </div>
                <!-- <div class="shadow">
                    <img src="./images/shadow_single.png" alt="">
                </div> -->
            <div class="box-list_tour">
                <div class="box-tour_left">
                    <div class="kq-search">
                        <p> Kết quả tìm được</p>
                    </div>
                    <div class="list_All-tour">
                        <li>Tất cả các khách sạn () <i class="fa-solid fa-chevron-right"></i></li>
                        
                        <!-- <li>Vé tham quan (2)<i class="fa-solid fa-chevron-right"></i></li>
                        <li>Khám phá lịch sử<i class="fa-solid fa-chevron-right"></i></li>
                        <li>Tour Đà Nẵng<i class="fa-solid fa-chevron-right"></i></li>
                        <li>Tour ghép<i class="fa-solid fa-chevron-right"></i></li>
                        <li>Tour Cù Lao Chàm<i class="fa-solid fa-chevron-right"></i></li>
                        <li>Tour Bà Nà<i class="fa-solid fa-chevron-right"></i></li>
                        <li>Tour Hội An<i class="fa-solid fa-chevron-right"></i></li> -->
                    </div>
                </div>
                

                <div class="box-tour_right">
                    <div class="nav-list">
                    <form action="index.php?action=hotel" method="post">
                        <div class="khoanggia"> 
                            <select name="khoangia" id="khoanggia">
                                <option value="0">Khoảng giá</option>
                                <option value="1" name="khoangia">Từ cao đến thấp</option>
                                <option value="2" name="khoangia">Từ thấp đến cao</option>
                            </select>
                            <input type="submit" name="listok"  value="Tìm kiếm" class="kyw2">
                        </div>
                        

                        <div class="nav-search">
                            <input type="hidden" name="id" value="<?=$id?>">
                            <input type="text" name="kyw" placeholder="Tìm kiếm">
                            <input type="submit" name="listok"  value="Tìm kiếm" class="kyw">
                            
                        </div>
                    </div>
                    
                    <!-- <div class="chitiet-tour">
                        <div class="box_chitiet-tour">
                            <div class="hinhanh-chitiet">
                                <img src="../images/1057_deo_hai_van.jpg" alt="">
                            </div>
                            <img class="box-shadow" src="../images/shadow_tour.png" alt="" >

                            <div class="name-chitiet">
                                <span>TOUR DU LỊCH TRƯỢT THÁC HÒA PHÚ THÀNH 1 NGÀY</span>
                                <p>Tour du lịch Trượt thác Hòa Phú Thành 1 ngày Trượt thác Hòa Phú Thành – dành cho những bạn trẻ tuổi đam</p>
                            </div>

                            <div class="price-chitiet">
                                <div class="price-in">
                                    <span>650.000đ</span><p>/người</p>
                                    <input type="submit" value="Chi tiết">
                                </div>    
                            
                                
                            </div>
                        </div>
                    </div> -->

                    
                            <?php
                                foreach ($listht as $ht) {
                                    extract($ht);
                                    $linktour ="index.php?action=hotelct&id=".$id;
                                    $hinh = $img_path.$image;
                                    echo ' <div class="chitiet-tour">
                                    <div class="box_chitiet-tour">
                                      <div class="hinhanh-chitiet">
                                        <img src="'.$hinh.'" alt="">
                                    </div>
                                    <img class="box-shadow" src="../images/shadow_tour.png" alt="" >
                                    <div class="chitiet-title">'.$title.'</div>
        
                                    <div class="name-chitiet">
                                        <a href="'.$linktour.'"><span>'.$namehotel.'</span></a>
                                        <p>Địa chỉ: '.$address.'</p>
                                        <p>Loại tour: '.$title.'</p>
                                    </div>
        
                                    <div class="price-chitiet">
                                        <div class="price-in">
                                            <span>₫' .number_format($price, 0, ',', '.').'</span><p>/người</p>
                                            <a href="'.$linktour.'">Chi tiết</a>
                                        </div>    
                                    
                                        
                                    </div>
                                    </div>
                                    </div>';
                                    }
                            ?>
                         
                      

                   



                       
                </div>
                
            </div>
            </form>
    </article>
    