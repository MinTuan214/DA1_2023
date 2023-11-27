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
                        <span>Thông tin cá nhân</span>
                        <p>Cập nhật thông tin của Quý khách và tìm hiểu các thông tin này được sử dụng ra sao.</p>
                    </div>
                    
            </div>
                <div class="hr_taikhoan">

                </div>
            <div class="ten_user">
                <p>Họ và tên</p>
                <input type="text" name="name" value="<?=$username?>">
            </div>
            <div class="hr_taikhoan">

            </div>
            
            <div class="ten_user">
                <p>Địa chỉ Email</p>
                <input type="text" name="email" value="<?=$email?>">
            </div>
            <div class="hr_taikhoan">

            </div>
             
            <div class="ten_user">
                <p>Số điện thoại</p>
                <input type="text" name="tel" value="<?=$tel?>">
            </div>
            <div class="hr_taikhoan">

            </div>
             
            <div class="ten_user">
                <p>Địa chỉ </p>
                <input type="text" name="address" value="<?=$address?>">
            </div>
            <div class="hr_taikhoan">

            </div>
             <div class="btn_capnhat">
                <input type="hidden" name="iduser" value="<?=$iduser?>">
                <input type="submit" name="capnhat" value="Cập nhật">
             </div>
             <p class="thongbao">
             <div class="thongbao">
                    <?php
                         if(isset($thongbao)&&($thongbao != "")){
                            echo $thongbao;
                        }
                    ?>
                </div>
             </p>
        </div>
</div>
</form>
    
</div>