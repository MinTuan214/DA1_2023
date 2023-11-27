
<div class="content">
            <div class="nav-content">
                <div class="yellow"></div>
                <p>Danh sách khách sạn / Thêm khách sạn</p>
            </div>
            
        </div>
        <div class="artical-content">
            <div class="title-tour">
                <p>Tạo khách sạn mới</p>
                <span class="thongbao"><?=$thongbaoht ?></span>
            </div>
            <form action="index.php?action=addht" method="POST" enctype="multipart/form-data">
            <div class="add-tour">
               
                <div class="text-input">
                    <label for="#">Mã khách sạn</label><br>
                    <input type="text" disabled><br>
                </div>
                <div class="text-input">
                    <label for="#">Tên khách sạn</label><br>
                    <input type="text" name="tenht"><br>
                </div>
                <div class="text-input">
                    <label for="#">Giá</label><br>
                    <input type="text" name="giaht"><br>
                </div>
                <div class="text-input">
                    <label for="#">Tiêu đề</label><br>
                    <input type="text" name="tieude"><br>
                </div>   
                <div class="text-input">
                    <label for="#">Địa chỉ</label><br>
                    <input type="text" name="diachi"><br>
                </div> 
                <div class="text-input">
                    <label for="#">Số điện thoại liên hệ</label><br>
                    <input type="text" name="sodienthoai"><br>
                </div> 
                <div class="text-input">
                        <label for="#">Tình trạng</label><br>
                        <select name="tinhtrang" id="">
                            <option value="" disabled selected>-- Chọn tình trạng --</option>
                            <option value="1">Còn phòng</option>
                            <option value="0">Hết phòng</option>
                        </select>
                    </div>
                       
            </div>  
            <div class="custom-file-input-wrapper">
                        <span class="title-img">Hình ảnh</span><br>
                        <input type="file" name="hinhanh" id="file" class="inputfile" data-multiple-caption="{count} files selected" multiple onchange="previewImage(this)"/>
                        <label for="file"><i class="fa-solid fa-cloud-arrow-up"></i> Chọn ảnh</label>
                        <div id="imagePreview"></div>
                    </div>  
                <!-- word -->
                    <label for="#">Mô tả</label><br>
                    <textarea id="mytextarea" name="mota"></textarea>
               
            <div class="btn-submit">
                <div class="btn-save">
                    <input type="submit" name="add" value="Lưu lại">
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