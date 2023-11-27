<?php
    $listuser = loadAll_usernew();
    $totalUser = count($listuser);

    $listtour = loadAll_tours();
    $totalTour = count($listtour);

    $listht = loadAll_hotel();
    $totalht = count($listht);
    
    $listtourbook = loadAll_tourbooknew();
    $totalbook = count($listtourbook);
?>

<div class="content">
            <div class="nav-content">
                <div class="yellow"></div>
                <p>Bảng điều khiển </p>
            </div>  
        </div>
        <!--  -->
        <div class="box-dashboard">
            <!--  -->
            <div class="box_dashboard-title">
                <div class="icon-dashboard_tong">
                    <i class="fa-solid fa-image-portrait"></i>
                </div>
                <div class="title-dashboard">
                    <h3>Tổng khách hàng</h3>
                    <span><?=$totalUser?> khách hàng</span>
                    <div class="hr-das">

                    </div>
                    <p>Tổng số khách hàng được quản lý.</p>

                </div>
            </div>
            <!--  -->
            <div class="box_dashboard-title">
                <div class="icon-dashboard_tour">
                    <i class="fa-solid fa-umbrella-beach"></i>
                </div>
                <div class="title-dashboard">
                    <h3>Tổng tour du lịch</h3>
                    <span><?=$totalTour?> tour du lịch</span>
                    <div class="hr-das">

                    </div>
                    <p>Tổng số tour du lịch được quản lý.</p>

                </div>
            </div>
            <!--  -->
            <div class="box_dashboard-title">
                <div class="icon-dashboard_hotel">
                    <i class="fa-solid fa-hotel"></i>
                </div>
                <div class="title-dashboard">
                    <h3>Tổng khách sạn</h3>
                    <span><?=$totalht?> khách sạn</span>
                    <div class="hr-das">

                    </div>
                    <p>Tổng số khách sạn được quản lý.</p>

                </div>
            </div>
            <!--  -->
            <div class="box_dashboard-title">
                <div class="icon-dashboard_book">
                    <i class="fa-solid fa-bag-shopping"></i>
                </div>
                <div class="title-dashboard">
                    <h3>Tổng đơn book</h3>
                    <span><?=$totalbook?> đơn book</span>
                    <div class="hr-das">

                    </div>
                    <p>Tổng số hóa đơn bán hàng trong tháng.</p>

                </div>
            </div>
            <!--  -->
        </div>
        <!-- BẢNG -->
        <div class="box-solieu">
            <div class="box_donhang">
                <h3>Đơn hàng mới</h3>
                <table border="1" class="bang-solieu">
                    <tr>
                        <th>ID đơn book</th>
                        <th>Tên khách hàng</th>
                        <th>Tổng tiền</th>
                        <th>Trạng thái</th>
                    </tr>
                    <?php
                        foreach($listtourbook as $book) { //Mỗi lần đọc là 1 hotel
                            extract($book); //lấy tên biến để show
                            $statusText = ($status == 1) ? '<span class="active-status2">Thành công</span>' : '<span class="paused-status2">Đang xử lý</span>';                    
                            echo '<tr>
                                <td>#MT'.$id.'</td>
                                <td>'.$username_booker.'</td>
                                <td>'.number_format($total, 0, ',', '.').'₫</td>
                                <td>'.$statusText.'</td>
                            </tr>';
                        }
                    ?>
                    
                    
                </table>
            </div>
            <div class="box_donhang">
                <h3>Khách hàng mới</h3>
                <table border="1" class="bang-solieu">
                    <tr>
                        <th>ID</th>
                        <th>Tên khách hàng</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                    </tr>
                    <?php
                        foreach ($listuser as $us) { //Mỗi lần đọc là 1 hotel
                            extract($us);
                            echo'<tr>
                                <td>#'.$iduser.'</td>
                                <td>'.$username.'</td>
                                <td>'.$tel.'</td>
                                <td>'.$email.'</td>
                            </tr>';
                        }
                    ?>
                    
                </table>
        </div>
        </div>
    </section>

    <script src="../admin/js/script.js"></script>