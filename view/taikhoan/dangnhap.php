<div class="form_dangky">
<div class="form-login">
                <div class="modal">
                   
                    <div class="title-login"><img src="../images/mona-logo-o3.png" alt=""></div>
                    <div class="hr-form">
    
                    </div>
                    <form action="index.php?action=dangnhap" method="post">
                    <div class="modal-body">
                        <div class="modal-login">
                            <label for="#">Tên đăng nhập</label>
                            <input type="text" name="name" class="text-input-modal" placeholder="Tên đăng nhập">
                        </div>
                        <div class="modal-login">
                            <label for="#">Password</label>
                            <input type="password" name="pass" class="password-input-modal" placeholder="Mật khẩu">
                        </div>
                        <div class="check-box">
                            <input type="checkbox" name="" id=""><p>Ghi nhớ mật khẩu</p>
                        </div>
                        <div class="btn-login">
                            <input type="submit" name="dangnhap" value="Đăng nhập">
                        </div>
                            <p class="thongbao">
                                <?php
                                     if(isset($thongbao)&&($thongbao != "")){
                                        echo $thongbao;
                                    }
                                    if(isset($thongbaoerro)&&($thongbaoerro != "")){
                                        echo $thongbaoerro;
                                    }
                                ?>
                            </p>
                </div>
                    </form>
                   
                <div class="fogot"> 
                    <a href="#">Quên mật khẩu</a>
                </div>
                <div class="next-register">
                    Bạn chưa có tài khoản? <a href="index.php?action=dangky" class="register-product">Đăng ký</a>
                </div>
                </div>
                
            </div>
</div>
    <img src="../uploads/vuon-hoa-ba-na-hills.jpg" alt="" width="100%">
</div>