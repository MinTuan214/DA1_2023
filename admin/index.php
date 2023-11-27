<?php
    session_start();
    include "./header.php";
    include "../DAO/pdo.php";
    include "../DAO/commentDAO.php";
    include "../DAO/tourDAO.php";
    include "../DAO/userDAO.php";
    include "../DAO/hotelDAO.php";
    include "../DAO/booktour.php";

    if (isset($_GET["action"])) {
        $action = $_GET["action"];
        switch ($action) {
            case 'addtour':
                $thongbao='';
                if(isset($_POST["add"])&&($_POST["add"])){
                    $nametour = $_POST["tentour"];
                    $price = $_POST["giatour"];
                    $description = $_POST["mota"];
                    $address = $_POST["diachi"];
                    $schedule = $_POST["lichtrinh"];
                    $title = $_POST["tieude"];
                    $status = $_POST["tinhtrang"];
                    $image = $_FILES["hinhanh"]["name"];
                    $target_dir = "../uploads/";
                        $target_file = $target_dir . basename($_FILES["hinhanh"]["name"]);
                        if(move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)){
                            // echo "The file" . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . "has been upload.";
                        }else{
                            // echo "Sorry";
                        }
                    insert_tour($nametour, $image, $price, $title, $address, $status, $description, $schedule) ;
                    $thongbao = "Thêm tour thành công";
                    
                }
                $listtour = loadAll_tours();
                include "./tours/addtour.php";
                break;
            case 'listtour':
                loadAll_tours();
                include "./tours/listtour.php";
            break;

            case 'edittour':
                if(isset($_GET['id']) && ($_GET['id'])>0){
                    $tour = load_one_tour($_GET['id']);
                }
                $listtour = loadAll_tours();
                include "./tours/updatetour.php";
            break;
            case 'updatetour':
                if(isset($_POST['update']) && ($_POST['update'])){
                    $id = $_POST['id'];
                    $nametour = $_POST["tentour"];
                    $price = $_POST["giatour"];
                    $description = $_POST["mota"];
                    $address = $_POST["diachi"];
                    $schedule = $_POST["lichtrinh"];
                    $title = $_POST["tieude"];
                    $status = $_POST["tinhtrang"];
                    $image = $_FILES["hinhanh"]["name"];
                    $target_dir = "../uploads/";
                        $target_file = $target_dir . basename($_FILES["hinhanh"]["name"]);
                        if(move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)){
                            // echo "The file" . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . "has been upload.";
                        }else{
                            // echo "Sorry";
                        }
                        update_tour($id, $nametour, $image, $price, $title, $address, $status, $description, $schedule);
                }
                $listtour = loadAll_tours();    
                include "./tours/listtour.php";
            break;


            case 'deletetour':
                if(isset($_GET['id'])&& ($_GET['id'])>0){
                    $id = $_GET['id'];
                    delete_tour($id);
                }
                loadAll_tours();
                include "./tours/listtour.php";
            break;


            //khách sạn
            case 'addht':
                $thongbaoht='';
                if(isset($_POST["add"])&&($_POST["add"])){
                    $namehotel = $_POST["tenht"];
                    $price = $_POST["giaht"];
                    $description = $_POST["mota"];
                    $address = $_POST["diachi"];
                    $phonenumber = $_POST["sodienthoai"];
                    $title = $_POST["tieude"];
                    $status = $_POST["tinhtrang"];
                    $image = $_FILES["hinhanh"]["name"];
                    $target_dir = "../uploads/";
                        $target_file = $target_dir . basename($_FILES["hinhanh"]["name"]);
                        if(move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)){
                            // echo "The file" . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . "has been upload.";
                        }else{
                            // echo "Sorry";
                        }
                    insert_hotel($namehotel, $price, $description, $address, $phonenumber, $title, $status, $image) ;
                    $thongbaoht = "Thêm khách sạn thành công";
                    
                }
                $listht = loadAll_hotel();
                include "./hotels/addht.php";
            break;
            case 'listht':
                loadAll_hotel();
                include "./hotels/listht.php";
            break;
            case 'editht':
                if(isset($_GET['id']) && ($_GET['id'])>0){
                    $ht = load_one_hotel($_GET['id']);
                }
                $listht = loadAll_hotel();
                include "./hotels/updateht.php";
            break;
            case 'updateht':
                if(isset($_POST['update']) && ($_POST['update'])){
                    $id = $_POST['id'];
                    $namehotel = $_POST["tenht"];
                    $price = $_POST["giaht"];
                    $description = $_POST["mota"];
                    $address = $_POST["diachi"];
                    $phonenumber = $_POST["sodienthoai"];
                    $title = $_POST["tieude"];
                    $status = $_POST["tinhtrang"];
                    $image = $_FILES["hinhanh"]["name"];
                    $target_dir = "../uploads/";
                        $target_file = $target_dir . basename($_FILES["hinhanh"]["name"]);
                        if(move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)){
                            // echo "The file" . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . "has been upload.";
                        }else{
                            // echo "Sorry";
                        }
                        update_hotel($id, $namehotel, $image, $price, $title, $address, $status, $description, $phonenumber);
                }
                $listht = loadAll_hotel();    
                include "./hotels/listht.php";
            break;
            case 'deleteht':
                if(isset($_GET['id'])&& ($_GET['id'])>0){
                    $id = $_GET['id'];
                    delete_hotel($id);
                }
                loadAll_hotel();
                include "./hotels/listht.php";
            break;
            case 'listuser':
                $listuser = loadAll_user();
                include "users/listuser.php";
            break;
            case 'edituser':
                if(isset($_GET['iduser']) && ($_GET['iduser'])>0){
                    $us = loadone_user($_GET['iduser']);
                }
                include "./users/update.php";
            break;
            case 'updateuser':
                if(isset($_POST['update']) && ($_POST['update'])){
                    $iduser = $_POST['iduser'];
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $tel = $_POST['tel'];
                    $address = $_POST['address'];
                    $role = $_POST['vaitro'];

                    update_user($iduser, $username, $email, $address, $tel, $role);

                }
                $listuser = loadAll_user();
                include "./users/listuser.php";
            break;

            case 'listcmt':
                $listbinhluan =loadAll_comment(0);
                include "./comment/list.php";
            break;
            case 'deletecmt':
                if(isset($_GET['id'])&& ($_GET['id'])>0){
                    $id = $_GET['id'];
                    delete_comment($id);
                }
                $listbinhluan =loadAll_comment(0);
                include "./comment/list.php";
            break;
            case 'listbooktour':
                $listtourbook = loadAll_tourbook();
                include "./booktour/list.php";
                
            break;
            case 'editstatus':
                if(isset($_GET['id']) && ($_GET['id'])>0){
                    $book = load_one_tourbook($_GET['id']);
                   
                }
                $listtourbook = loadAll_tourbook();
                include "./booktour/update.php";
            break;
            case 'updatestatus':
                if(isset($_POST['update']) && ($_POST['update'])){
                    $id = $_POST['id'];
                    $status = $_POST['status'];
                    
                    update_status($id, $status);
                   
                }
                $listtourbook = loadAll_tourbook();
                include "./booktour/list.php";
            break;

            case'dashboard':
                include "dashboard.php";
                break;
            default:
                include 'home.php';
            break;
        }


    } else {
        include "./home.php";
    }
    
    
    include "./footer.php";
?>