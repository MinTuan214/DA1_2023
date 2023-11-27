<div class="content">
            <div class="nav-content">
                <div class="yellow"></div>
                <p>Danh sách khách sạn </p>
            </div>
            
        </div>
        <div class="artical-content">
            <div class="btn-function">
                <div class="btn_add">
                    <a href="index.php?action=addht"><input type="submit"  value="+ Tạo khách sạn mới"></a>
                </div>
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
                    <th class="title-table text">Tên tour</th>
                    <th class="title-table img">Hình</th>
                    <th class="title-table price">Giá</th>
                    <th class="title-table tieude">Tiêu đề</th>
                    <th class="title-table diachi">Địa chỉ</th>
                    <th class="title-table lich">Số điện thoại</th>
                    <th class="title-table description">Mô tả</th>
                    
                    <th class="title-table tinhtrang">Tình trạng</th>
                    <th class="title-table" colspan="2">Chức năng</th>
                </tr>
                <?php
                $listht = loadAll_hotel(); //để lấy tất cả các khách sạn từ cơ sở dữ liệu.
                foreach ($listht as $ht) { //Mỗi lần đọc là 1 hotel
                    extract($ht); //lấy tên biến để show
                    $editsp = "index.php?action=editht&id=".$id;
                    $deletesp = "index.php?action=deleteht&id=".$id;
                    $hinhpath ="../uploads/".$image;
                    $statusText = ($status == 1) ? '<span class="active-status">Còn phòng</span>' : '<span class="paused-status">Hết phòng</span>';                    

                    if(is_file($hinhpath)){
                        $hinh = "<img src='". $hinhpath."' height = '80'>";
                    }else{
                        $hinh = "Không có hình";
                    }
                    echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>' .$id. '</td>  
                            <td>' .$namehotel. '</td>
                            <td>' .$hinh. '</td>
                            <td>₫' .$price.'</td>
                            <td>' .$title. '</td>
                            <td>' .$address. '</td>
                            <td>' .$phonenumber. '</td>
                            <td class="title-table mota">
                                <div class="clamp-content">'.$description.'</div>
                            </td>
                           
                            
                            <td class="tinhtrang">
                                <p>'.$statusText.'</p>
                            </td>
                            
                            <td><a href="'.$editsp.'"</a><i class="fa-solid fa-pencil"></i></td>
                            <td><a href="'.$deletesp.'"</a><i class="fa-solid fa-trash-can"></i></td>
                        </tr>';
                        
                }
               ?>
            
            </table>

        </div>
    </section>

    <script src="../admin/js/script.js"></script>