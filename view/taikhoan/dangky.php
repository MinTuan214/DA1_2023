<div class="form_dangky">
<div class="form-register">
                <div class="register">
                    <h2 class="title-register"><img src="../images/mona-logo-o3.png" alt="" width="90px"></h2>
                    <form action="index.php?action=dangky" method="post">
                    <div class="modal-body-register">
                        <div class="modal-register">
                            <input type="text" name="name" class="text-input-register" placeholder="Tên đăng nhập">
                        </div>
                        <div class="modal-register">
                            <input type="email" name="email" class="text-input-register" placeholder="Email">
                        </div>
                        <div class="modal-register">
                            <input type="text" name="tel" class="text-input-register" placeholder="Số điện thoại">
                        </div>
                        <div class="modal-register">
                            <input type="password" name="pass" class="password-input-register" placeholder="Mật khẩu">
                        </div>
                        <div class="modal-register">
                            <input type="password" name="pass" class="password-input-register" placeholder="Nhập lại mật khẩu">
                        </div>
        
                        <div class="btn-register">
                            <input type="submit" value="Đăng ký" name="dangky">
                        </div>
                        <div class="next-register">
                            Bạn đã có tài khoản? <a href="index.php?action=dangnhap" class="register-product">Đăng nhập</a>
                        </div>
                        <p class="thongbao">
                        <?php
                            if(isset($thongbaodk)&&($thongbaodk != "")){
                                echo $thongbaodk;
                            }
                            if(isset($thongbaoerro)&&($thongbaoerro != "")){
                                echo $thongbaoerro;
                            }
                            if(isset($thongbaott)&&($thongbaott != "")){
                                echo $thongbaott;
                            }
                        ?>
                        </p>
                </div>
                    </form>
                   
                
                </div>
            </div>
    <img src="../uploads/vuon-hoa-ba-na-hills.jpg" alt="" width="100%">
</div>