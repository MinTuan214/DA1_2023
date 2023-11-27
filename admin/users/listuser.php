<div class="content">
            <div class="nav-content">
                <div class="yellow"></div>
                <p>Danh sách người dùng </p>
            </div>
            
        </div>
        <div class="artical-content">
            <div class="btn-function">
                <!--  -->
                <div class="btn_selectAll">
                    <input type="submit" id="selectAllCheckbox" value="Chọn tất cả">
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
                    <th class="title-table id">ID</th>
                    <th class="title-table text">Tên khách hàng</th>
                    <th class="title-table price">Hình ảnh</th>
                    <th class="title-table price">Email</th>
                    <th class="title-table tieude">Số điện thoại</th>
                    <th class="title-table diachi">Địa chỉ</th>                            
                    <th class="title-table chucnang">Vai trò</th>
                    <th class="title-table chucnang" >Chức năng</th>
                </tr>  
                <?php
                
                foreach ($listuser as $us) { //Mỗi lần đọc là 1 hotel
                    extract($us); //lấy tên biến để show
                    $edituser = "index.php?action=edituser&iduser=".$iduser;
                    $roleText = ($role == 1) ? "Quản trị" : "Khách hàng";
                    $hinhpath ="../uploads/".$image;
                        if(is_file($hinhpath)){
                            $hinh = "<img src='". $hinhpath."' height = '80'>";
                        }else{
                            $hinh = "Không có hình";
                        }
                        
                    echo '<tr class="dsbl">
                            <td><input type="checkbox" name="" id=""></td>
                            <td>#' .$iduser. '</td>  
                            <td>' .$username. '</td>
                            <td>' .$hinh.'</td>
                            <td>' .$email. '</td>
                            <td>' .$tel. '</td>
                            <td>' .$address. '</td>
                            <td>' .$roleText. '</td>
                           
                            <td><a href="'.$edituser.'"</a><i class="fa-solid fa-user-pen"></i></td>
                        </tr>';
                        
                }
               ?>
            
            </table>

        </div>
    </section>

    <script src="../admin/js/script.js"></script>