<div class="form-taikhoan">
<?php
            if(isset($_SESSION['iduser'])&&(is_array($_SESSION['iduser']))){
                extract($_SESSION['iduser']);
                $hinhpath ="../uploads/".$image;
                    if(is_file($hinhpath)){
                        $hinh = "<img src='". $hinhpath."' height = '80'>";
                    }else{
                        $hinh = "Không có hình";
                    }
        }
    ?>
    <img src="../uploads/vuon-hoa-ba-na-hills.jpg" alt="" width="100%">
   
    <form action="index.php?action=taikhoan" method="post" enctype="multipart/form-data">
    
    <div class="box-taikhoan">
 
    <div class="form-taikhoan_left">
        <div class="name_img">
        <div id="imagePreview"><img src="<?=$hinhpath?>" alt="" width="70px" height="70px"></div>
                    <div class="custom-file-input-wrapper">
                        <input type="file" name="hinhanh" id="file" class="inputfile" data-multiple-caption="{count} files selected" multiple onchange="previewImage(this)"/>
                        <div class="camera">
                            <label for="file"><i class="fa-solid fa-camera"></i></label>
                        </div>
                        
                       
                    </div>  
            <div class="name_email">
                <span><?=$username?></span>
                <p><?=$email?></p>
            </div>
            
        </div>
        <div class="hr_taikhoan">

        </div>
        <div class="noidung_form">
            <p>Tài khoản</p>
            <li><a href="index.php?action=taikhoan">Thông tin cá nhân</a></li>
            <li><a href="index.php?action=doimatkhau">Đổi mật khẩu</a></li>
            <li><a href="index.php?action=donbook">Đơn book</a></li>
            <li><a href="index.php?action=dangxuat">Đăng xuất</a></li>
            <span>Đơn đã đặt</span>
            <span>Yêu thích đã lưu</span>
            <span>Đánh giá của bạn</span>
        </div>
    
    </div>
        <div class="form-taikhoan_right">
            <div class="name_img">
                    <div class="name_user">
                        <span>ĐƠN BOOK</span>
                        <p>Danh sách tất cả các đơn mà bạn đã đặt.</p>
                    </div>
                    
            </div>
                <div class="hr_taikhoan">

                </div>
            <table border="1" class="history-book">
                
                <tr>
                    <th>Mã</th>
                    <th class="tentour">Tên tour</th>
                    <th>Số người</th>
                    <th>Ngày đi</th>
                    <th>Tổng tiền</th>
                    <th class="trangthai">Trạng thái</th>
                    <th></th>
                </tr>
                
                <?php
                    if (isset($_SESSION['iduser']) && is_array($_SESSION['iduser'])) {
                        extract($_SESSION['iduser']);
                        $nametour = isset($_SESSION['cart_tentour']) ? $_SESSION['cart_tentour'] : '';
                        $price = isset($_SESSION['cart_giatour']) ? $_SESSION['cart_giatour'] : '';
                        $date = isset($_SESSION['cart_date']) ? $_SESSION['cart_date'] : '';
                        $soluong = isset($_SESSION['cart_soluong']) ? $_SESSION['cart_soluong'] : '';
                        $total = intval($soluong) * intval($price);
                        $idbill = isset($_SESSION['idbill']) ? $_SESSION['idbill'] : '';
                        
                        // Gọi hàm để lấy danh sách đơn đặt tour của người đăng nhập
                        $listTourBook = loadAll_tourbookuser($iduser);
                    
                        // Hiển thị danh sách đơn đặt tour và thông tin của người đặt
                        if (!empty($listTourBook)) {
                        foreach ($listTourBook as $tourBook) {
                            extract($tourBook);
                          
                             
                            $ptttText = ($method == 0) ? '<span class="tienmat">Thanh toán bằng tiền mặt</span>' : '<span class="chuyenkhoan">Thanh toán chuyển khoản</span>';
                            $statusText = ($status == 1) ? '<span class="active-status">Thành công</span>' : '<span class="paused-status">Đang xử lý</span>';                    
                            $linkhuy = "index.php?action=huydon&id=" . $id;
                            $huyDonButton = ($status == 1) ? '' : '<a class="huydon" href="'.$linkhuy.'"><i class="fa-solid fa-xmark"></i> Hủy đơn</a>';

                            echo '<tr>
                            <td>'.$id.'</td>
                            <td>'.$nametour.'</td>
                            <td>'.$soluong.'</td>
                            <td>'.$date.'</td>
                            <td>'.number_format($total, 0, ',', '.').'₫</td>
                            <td>'.$statusText.'</td>
                            <td>'.$huyDonButton.'</td>
                        </tr>';
                        
                        
                        }
                    }else{
                        echo '<tr><td colspan="7" >Danh sách đơn đặt tour trống.</td></tr>';  
                    }
                    }
                ?>
                
            </table>
            
             
        </div>
</div>
</form>
    
</div>