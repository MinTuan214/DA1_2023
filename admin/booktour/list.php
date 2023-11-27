<div class="content">
    <?php
        
    ?>
            <div class="nav-content">
                <div class="yellow"></div>
                <p>Danh sách tour đã đặt </p>
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
                    <th class="title-table id">Mã đơn</th>
                    <th class="title-table text">Tài khoản</th>

                    <th class="title-table text">Tên trên bill</th>
                    
                    <th class="title-table price">Tên tour</th>
                    <th class="title-table tieude">Ngày đặt</th>
                    <th class="title-table diachi">Số điện thoại</th>                            
                    <th class="title-table songuoi">Số người</th>
                    <th class="title-table chucnang">Tổng tiền</th>
                    <th class="title-table chucnang">Phương thức thanh toán</th>

                    <th class="title-table trangthai">Trạng thái</th>

                    <th class="title-table chucnang">Chức năng</th>
                </tr>
                <?php
                
                foreach($listtourbook as $book) { //Mỗi lần đọc là 1 hotel
                    extract($book); //lấy tên biến để show
                    $ptttText = ($method == 0) ? '<span class="tienmat">Thanh toán bằng tiền mặt</span>' : '<span class="chuyenkhoan">Thanh toán chuyển khoản</span>';
                    $statusText = ($status == 1) ? '<span class="active-status">Book tour thành công</span>' : '<span class="paused-status">Đang xử lý</span>';                    

                    $editstatus = "index.php?action=editstatus&id=".$id;
                
                    echo '<tr class="dsbl">
                            <td><input type="checkbox" name="" id=""></td>
                            <td>' .$id. '</td>  
                            <td>' .$username_booker. '</td>
                            <td>' .$name. '</td>
                            <td>' .$nametour.'</td>
                            <td>' .$ngaybook. '</td>
                            <td>' .$tel. '</td>
                            <td>' .$soluong. '</td>
                            <td>'.number_format($total, 0, ',', '.').'₫</td>
                            <td>' .$ptttText. '</td>
                            <td>' .$statusText. '</td>
                            <td><a href="'.$editstatus.'"</a><i class="fa-solid fa-pencil"></i></td>
                        </tr>';
                        
                }
               ?>
            
            </table>

        </div>
    </section>

    <script src="../admin/js/script.js"></script>