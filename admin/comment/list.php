<div class="content">
            <div class="nav-content">
                <div class="yellow"></div>
                <p>Danh sách bình luận </p>
            </div>
            
        </div>
        <div class="artical-content">
            <div class="btn-function">
                <!--  -->
                <div class="btn_selectAll">
                    <input type="submit" value="Chọn tất cả">
                </div>
                <div class="cancel_select">
                    <input type="reset" value="Bỏ chọn">
                </div>
                <div class="delete_select">
                    <input type="submit" value="Xoá mục đã chọn">
                </div>
                <div class="delete_all">
                    <input type="submit" value="Xóa tất cả">
                </div>
            </div> 
            
            <div class="search-tour">
                <span>Tìm kiếm</span><input type="text" name="" id="text">
            </div>

            <table border="1">
            <tr class="first-table">
                    <th class="title-id"><input type="checkbox" name="" id=""></th>
                    <th class="title-table id">Mã</th>
                    <th class="title-table text">Tên người bình luận</th>
                    
                    <th class="title-table price">Nội dung bình luận</th>
                    <th class="title-table tieude">Tour hoặc khách sạn được bình luận</th>
                    <th class="title-table diachi">Ngày và giờ bình luận</th>                            
                    <th class="title-table chucnang">Chức năng</th>
                </tr>
                <?php
                
                foreach ($listbinhluan as $bl) { //Mỗi lần đọc là 1 hotel
                    extract($bl); //lấy tên biến để show
                    $deletesp = "index.php?action=deletecmt&id=".$id;
                
                    echo '<tr class="dsbl">
                            <td><input type="checkbox" name="" id=""></td>
                            <td>' .$id. '</td>  
                            <td>' .$username. '</td>
                            <td>' .$content.'</td>
                            <td>' .$nametour. '</td>
                            <td>' .$ngaybinhluan. '</td>
                           
                            <td><a href="'.$deletesp.'"</a><i class="fa-solid fa-trash-can"></i></td>
                        </tr>';
                        
                }
               ?>
            
            </table>

        </div>
    </section>

    <script src="../admin/js/script.js"></script>