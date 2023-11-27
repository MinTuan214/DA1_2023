<?php
    if(is_array($book)){
        extract($book);
    }
?>
<div class="content">
            <div class="nav-content">
                <div class="yellow"></div>
                <p>Danh sách tour đã đặt / Cập nhật tình trạng đơn</p>
            </div>
            
        </div>
        <div class="artical-content">
            <div class="title-tour">
                <p>Cập nhật tình trạng</p>
            
            </div>
            <form action="index.php?action=updatestatus" method="POST" enctype="multipart/form-data">
            <div class="add-tour">
               
                <div class="text-input">
                    <label for="#">Mã đặt tour</label><br>
                    <input type="text" disabled value="<?=$id?>"><br>
                </div>
               
                <div class="text-input">
                        <label for="#">Tình trạng</label><br>
                        <select name="status" id="">
                            <option name="status" value="0" <?= ($status == 0) ? 'selected' : '' ?>>Đang xử lý</option>
                            <option name="status" value="1" <?= ($status == 1) ? 'selected' : '' ?>>Book tour thành công</option>
                            
                        </select>
                    </div>
               
            <div class="btn-submit">
                <input type="hidden" name="id" value="<?=$id?>">
                <div class="btn-save">
                    <input type="submit" name="update" value="Cập nhật">
                </div>
                <div class="btn-cancel">
                    <input type="submit" value="Hủy bỏ">
                </div>
                <div class="btn-list">
                    <a href="index.php?action=listbooktour"><input type="button" value="Danh sách"></a>
                </div>
                
            </div> 
            
    </form> 
        </div>
    </section>

    <script src="../admin/js/script.js"></script>