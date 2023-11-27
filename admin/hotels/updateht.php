<?php
if(is_array($ht)){
    extract($ht);
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
                <p>Danh sách khách sạn / Chỉnh sửa thông tin</p>
            </div>
            
        </div>
        <div class="artical-content">
            <div class="title-tour">
                <p>Chỉnh sửa khách sạn</p>
            
            </div>
            <form action="index.php?action=updateht" method="POST" enctype="multipart/form-data">
            <div class="add-tour">
               
                <div class="text-input">
                    <label for="#">Mã khách sạn</label><br>
                    <input type="text" disabled value="<?=$id?>"><br>
                </div>
                <div class="text-input">
                    <label for="#">Tên khách sạn</label><br>
                    <input type="text" name="tenht" value="<?=$namehotel?>"><br>
                </div>
                <div class="text-input">
                    <label for="#">Giá</label><br>
                    <input type="text" name="giaht" value="<?=$price?>"><br>
                </div>
                <div class="text-input">
                    <label for="#">Tiêu đề</label><br>
                    <input type="text" name="tieude" value="<?=$title?>"><br>
                </div>   
                <div class="text-input">
                    <label for="#">Địa chỉ</label><br>
                    <input type="text" name="diachi" value="<?=$address?>"><br>
                </div> 
                <div class="text-input">
                    <label for="#">Số điện thoại liên hệ</label><br>
                    <input type="text" name="sodienthoai" value="<?=$phonenumber?>"><br>
                </div> 
                <div class="text-input">
                        <label for="#">Tình trạng</label><br>
                        <select name="tinhtrang" id="">
                            <option name="tinhtrang" value="0" <?= ($status == 0) ? 'selected' : '' ?>>Hết phòng</option>
                            <option name="tinhtrang" value="1" <?= ($status == 1) ? 'selected' : '' ?>>Còn phòng</option>
                            
                        </select>
                    </div>
            </div>
                    <div class="custom-file-input-wrapper">
                        <span class="title-img">Hình ảnh</span><br>
                        <input type="file" name="hinhanh" id="file" class="inputfile" data-multiple-caption="{count} files selected" multiple onchange="previewImage(this)"/>
                        <label for="file"><i class="fa-solid fa-cloud-arrow-up"></i> Chọn ảnh</label>
                        <div id="imagePreview">
                            <img src="../uploads/<?=$ht['image']?>" height="80">
                        </div>
                    </div>
                
                
                    
            </div>    
                
                    <label for="#">Mô tả</label><br>
                    <textarea id="mytextarea" name="mota"><?= $description ?></textarea>
               
            <div class="btn-submit">
                <input type="hidden" name="id" value="<?=$id?>">
                <div class="btn-save">
                    <input type="submit" name="update" value="Cập nhật">
                </div>
                <div class="btn-cancel">
                    <input type="submit" value="Hủy bỏ">
                </div>
                <div class="btn-list">
                    <a href="index.php?action=listht"><input type="button" value="Danh sách"></a>
                </div>
                
            </div> 
            
    </form> 
        </div>
    </section>

    <script src="../admin/js/script.js"></script>