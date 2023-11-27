<?php
if(is_array($us)){
    extract($us);
}
    $hinhpath ="../uploads/".$image;
    if(is_file($hinhpath)){
        $hinh = "<img src='". $hinhpath."' height = '80'>";
    }else{
        $hinh = "Không có hình";
    }
?>
<div class="content">
            <div class="nav-content">
                <div class="yellow"></div>
                <p>Danh sách người dùng / Chỉnh sửa thông tin</p>
            </div>
            
        </div>
        <div class="artical-content">
            <div class="title-tour">
                <p>Chỉnh sửa thông tin người dùng</p>
            
            </div>
            <form action="index.php?action=updateuser" method="POST" enctype="multipart/form-data">
            <div class="add-tour">
               
                <div class="text-input">
                    <label for="#">ID</label><br>
                    <input type="text" disabled value="<?=$iduser?>"><br>
                </div>
                <div class="text-input">
                    <label for="#">Tên người dùng</label><br>
                    <input type="text" name="username" value="<?=$username?>"><br>
                </div>
                <div class="text-input">
                    <label for="#">Email</label><br>
                    <input type="text" name="email" value="<?=$email?>"><br>
                </div>
                <div class="text-input">
                    <label for="#">Số điện thoại</label><br>
                    <input type="text" name="tel" value="<?=$tel?>"><br>
                </div>   
                <div class="text-input">
                    <label for="#">Địa chỉ</label><br>
                    <input type="text" name="address" value="<?=$address?>"><br>
                </div> 
                <div class="text-input">
                        <label for="#">Vai trò</label><br>
                        <select name="vaitro" id="">
                            <option name="vaitro" value="0" <?= ($role == 0) ? 'selected' : '' ?>>Khách hàng</option>
                            <option name="vaitro" value="1" <?= ($role == 1) ? 'selected' : '' ?>>Quản trị</option>
                            
                        </select>
                    </div>
                   
                
                
                    
            </div>    
              
            <div class="btn-submit">
                <input type="hidden" name="iduser" value="<?=$iduser?>"> <!-- để có thể lấy được iduser dưới dạng ẩn -->
                <div class="btn-save">
                    <input type="submit" name="update" value="Cập nhật">
                </div>
                <div class="btn-cancel">
                    <input type="submit" value="Hủy bỏ">
                </div>
                <div class="btn-list">
                    <a href="index.php?action=listuser"><input type="button" value="Danh sách"></a>
                </div>
                
            </div> 
            
    </form> 
        </div>
    </section>

    <script src="../admin/js/script.js"></script>