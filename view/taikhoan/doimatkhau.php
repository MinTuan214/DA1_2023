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


    <form action="index.php?action=doimatkhau" method="post">
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
                        <span>Đổi mật khẩu</span>
                        <p>Thay đổi mật khẩu của Quý khách.</p>
                    </div>
                    
            </div>
                <div class="hr_taikhoan">

                </div>
            <div class="ten_user">
                <p>Mật khẩu cũ</p>
                <input type="password" name="pass_cu" placeholder="Nhập mật khẩu cũ" >
            </div>
            <div class="hr_taikhoan">

            </div>
            
            <div class="ten_user">
                <p>Mật khẩu mới</p>
                <input type="password" name="pass_moi" placeholder="Nhập mật khẩu mới">
            </div>
            <div class="hr_taikhoan">

            </div>
             
            <div class="ten_user">
                <p>Nhập lại mật khẩu</p>
                <input type="password" name="pass_nhaplai" placeholder="Nhập lại mật khẩu">
            </div>
            <div class="hr_taikhoan">

            </div>
             
            
             <div class="btn_capnhat">
                <input type="submit" name="doimatkhau" value="Đổi mật khẩu">
             </div>
             <p class="thongbao">
                        <?php
                            if(isset($thongbao)&&($thongbao != "")){
                                echo $thongbao;
                            }
                            if(isset($thongbaomk)&&($thongbaomk != "")){
                                echo $thongbaomk;
                            }
                            if(isset($thongbaomk2)&&($thongbaomk2 != "")){
                                echo $thongbaomk2;
                            }
                        ?>
                        </p>
            
        </div>
    </div>
    </form>
        
    
</div>