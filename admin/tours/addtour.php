
    <div class="content">
            <div class="nav-content">
                <div class="yellow"></div>
                <p>Danh sách tour du lịch / Thêm tour mới</p>
            </div>
            
        </div>
        <div class="artical-content">
            <div class="title-tour">
                <p>Tạo tour mới</p>
                <span class="thongbao"><?=$thongbao ?></span>
            </div>
            <form action="index.php?action=addtour" method="POST" enctype="multipart/form-data">
            <div class="add-tour">
               
                <div class="text-input">
                    <label for="#">Mã tour</label><br>
                    <input type="text" disabled><br>
                </div>
                <div class="text-input">
                    <label for="#">Tên tour</label><br>
                    <input type="text" name="tentour"><br>
                </div>
                <div class="text-input">
                    <label for="#">Giá</label><br>
                    <input type="text" name="giatour"><br>
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
                        <label for="#">Tình trạng</label><br>
                        <select name="tinhtrang" id="">
                            <option value="" disabled selected>-- Chọn tình trạng --</option>
                            <option value="1">Hoạt động</option>
                            <option value="0">Tạm ngưng</option>
                        </select>
                    </div>
                    <div class="custom-file-input-wrapper">
                        <span class="title-img">Hình ảnh</span><br>
                        <input type="file" name="hinhanh" id="file" class="inputfile" data-multiple-caption="{count} files selected" multiple onchange="previewImage(this)"/>
                        <label for="file"><i class="fa-solid fa-cloud-arrow-up"></i> Chọn ảnh</label>
                        <div id="imagePreview"></div>
                    </div>
                
                
                    
            </div>  
            <!-- word -->
                    <label for="#">Mô tả</label><br>
                    <textarea id="mytextarea" name="mota"></textarea>  
                    <br>
                    <!-- word -->
                    <label for="#">Lịch trình</label><br>
                    <textarea id="mytextarea" name="lichtrinh"></textarea>
            <div class="btn-submit">
                <div class="btn-save">
                    <input type="submit" name="add" value="Lưu lại">
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