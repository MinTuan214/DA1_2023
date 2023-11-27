<?php
if(is_array($tour)){
    extract($tour);
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
                <p>Danh sách tour du lịch / Chỉnh sửa thông tin</p>
            </div>
            
        </div>
        <div class="artical-content">
            <div class="title-tour">
                <p>Chỉnh sửa tour</p>
            
            </div>
            <form action="index.php?action=updatetour" method="POST" enctype="multipart/form-data">
            <div class="add-tour">
               
                <div class="text-input">
                    <label for="#">Mã tour</label><br>
                    <input type="text" disabled value="<?=$id?>"><br>
                </div>
                <div class="text-input">
                    <label for="#">Tên tour</label><br>
                    <input type="text" name="tentour" value="<?=$nametour?>"><br>
                </div>
                <div class="text-input">
                    <label for="#">Giá</label><br>
                    <input type="text" name="giatour" value="<?=$price?>"><br>
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
                        <label for="#">Tình trạng</label><br>
                        <select name="tinhtrang" id="">
                            <option name="tinhtrang" value="0" <?= ($status == 0) ? 'selected' : '' ?>>Tạm ngưng</option>
                            <option name="tinhtrang" value="1" <?= ($status == 1) ? 'selected' : '' ?>>Hoạt động</option>
                            
                        </select>
                    </div>
                    <div class="custom-file-input-wrapper">
                        <span class="title-img">Hình ảnh</span><br>
                        <input type="file" name="hinhanh" id="file" class="inputfile" data-multiple-caption="{count} files selected" multiple onchange="previewImage(this)"/>
                        <label for="file"><i class="fa-solid fa-cloud-arrow-up"></i> Chọn ảnh</label>
                        <div id="imagePreview">
                            <img src="../uploads/<?=$tour['image']?>" height="80">
                        </div>
                    </div>
                
                
                    
            </div>    
                <!-- word -->
                <label for="#">Mô tả</label><br>
                    <textarea id="mytextarea" name="mota"><?= $description ?></textarea>
                <br> 
                <label for="#">Lịch tình</label><br>
                    <textarea id="mytextarea" name="lichtrinh"><?= $schedule ?></textarea>
            <div class="btn-submit">
                <input type="hidden" name="id" value="<?=$id?>">
                <div class="btn-save">
                    <input type="submit" name="update" value="Cập nhật">
                </div>
                <div class="btn-cancel">
                    <input type="submit" value="Hủy bỏ">
                </div>
                <div class="btn-list">
                    <a href="index.php?action=listtour"><input type="button" value="Danh sách"></a>
                </div>
                
            </div> 
            
    </form> 
        </div>
    </section>

    <script src="../admin/js/script.js"></script>