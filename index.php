<?php 
    session_start();
    
    include 'view/layouts/header.php';
    include 'config/connect.php';
    include './DAO/pdo.php';
    include './DAO/userDAO.php';
    include './DAO/tourDAO.php';
    include './DAO/hotelDAO.php';
    include './DAO/commentDAO.php';
    include './DAO/booktour.php';
    include 'global.php';

    if(!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];
    $tourct = loadAll_tourct();
    $tournew = loadAll_tours_home();
    $hotelnew = loadAll_hotel_home();
    if(!isset($_GET["action"])){
        $_GET["action"] = "";
    }
    switch ($_GET["action"]) {
        case 'home':
            include 'view/layouts/home.php';
            break;
        
        case 'giothieu':
            include 'view/gioithieu.php';
            break;
        case 'dangky':
            if(isset($_POST["dangky"]) && $_POST["dangky"]){
                    $username = $_POST["name"];
                    $email = $_POST["email"];
                    $pass = $_POST["pass"];
                    $tel = $_POST["tel"];
                    $check = checktaikhoan($username, $pass);
                if(empty($email) || empty($username) || empty($pass) || empty($tel)){
                    $thongbaoerro ="Vui lòng điền đầy đủ thông tin";
                }elseif(is_array($check)){
                    $thongbaott = "Tên đăng nhập đã tồn tại";
                }else{                  
                    insert_taikhoan($username, $pass, $email, $tel);
                    $thongbaodk = "Đăng ký tài khoản thành công";
                }
                
 
            }
            include 'view/taikhoan/dangky.php';
            break;
        case 'dangnhap':
            $thongbao='';
                if(isset($_POST["dangnhap"]) && $_POST["dangnhap"]){
                    $username = $_POST["name"];
                    $pass = $_POST["pass"];
                    $check = checktaikhoan($username, $pass);
                    if(empty($username) || empty($pass)){
                        $thongbaoerro ="Vui lòng nhập thông tin";
                    }else
                    if(is_array($check)){
                        $_SESSION['iduser'] = $check;
                        header("Location: index.php?action=home");
                    }else{
                        $thongbao= "Thông tin tài khoản mật khẩu không chính xác";
                    }
                    
                }
                include 'view/taikhoan/dangnhap.php';
                break;
       

        case 'tourct':
            if(isset($_GET['id']) && ($_GET['id']>0)){
                $id = $_GET['id'];
                $onetour = load_one_tour($id);
                extract($onetour);
                include 'view/tourct.php';
            }else{
                include 'view/layouts/home.php';
            }
            
            break;
        case 'page_cart':
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST['date']) && isset($_POST['soluong'])) {
                    $_SESSION['cart_date'] = $_POST['date'];
                    $_SESSION['cart_soluong'] = $_POST['soluong'];     
                    if(isset($_GET['id']) && ($_GET['id']>0)){ 
                        $id = $_GET['id'];
                        $onetour = load_one_tour($id);
                        extract($onetour);
                        
                }
            }
            } 
            include 'view/page_cart.php';
            break;
        case 'checkout':
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    $id = $_GET['id'];
                    $onetour = load_one_tourbook($id);
                    if (is_array($onetour)) {
                        extract($onetour);
                    } else {
                        // Xử lý trường hợp không tìm thấy tour
                    }
                    
        }

            include 'view/page_checkout.php'; 
            break;
        case 'billconfirm':
            if (isset($_POST['dongybook']) && ($_POST['dongybook'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $email = $_POST['email'];
                $pttt = $_POST['pttt'];
                $description = $_POST['description'];
                $ngaybook = date("H:i:s d/m/Y");
               
                // Lấy thông tin từ session
                
                $_SESSION['cart_user_name'] = $name;
                $_SESSION['cart_user_tel'] = $tel;
                $_SESSION['cart_user_email'] = $email;
                $_SESSION['cart_user_address'] = $address;
                $nametour = isset($_SESSION['cart_tentour']) ? $_SESSION['cart_tentour'] : '';
                $price = isset($_SESSION['cart_giatour']) ? $_SESSION['cart_giatour'] : '';
                $date = isset($_SESSION['cart_date']) ? $_SESSION['cart_date'] : '';
                $soluong = isset($_SESSION['cart_soluong']) ? $_SESSION['cart_soluong'] : '';
                $iduser = isset($_SESSION['iduser']) ? $_SESSION['iduser']['iduser'] : 0;
                $total = $soluong * $price;
                
                $idbill = insert_bill($name, $address, $tel, $email, $description, $pttt, $ngaybook, $nametour, $total, $soluong, $iduser);
                $_SESSION['idbill'] = $idbill;
            }
            include 'view/bill.php';
            break;
        case 'taikhoan':
            $thongbao = "";
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){       
                $username = $_POST["name"];
                $email = $_POST["email"];
                $tel = $_POST["tel"];
                $address = $_POST["address"];
                $iduser = $_POST['iduser'];
                $image =$_FILES['hinhanh']['name'];
                $check = checktaikhoan($username, $pass);
                
                update_taikhoan($iduser, $username, $email, $address, $tel);
                if (isset($_FILES['hinhanh']) && $_FILES['hinhanh']['error'] == 0) {
                    $target_dir = '../uploads/';
                    $uploadFile = $target_dir . basename($_FILES['hinhanh']['name']);
                
                    if (move_uploaded_file($_FILES['hinhanh']['tmp_name'], $uploadFile)) {
                        // Cập nhật đường dẫn ảnh đại diện của người dùng trong cơ sở dữ liệu
                        
                    }
                }
                update_img($iduser, $image);
                $_SESSION['iduser'] = checktaikhoan($username, $pass); //Lấy thông tin từ người dùng đăng nhập
                header('Location: index.php?action=taikhoan');
                          
            }
            
            include 'view/taikhoan/taikhoan.php';
            break;
            
            case 'doimatkhau':
                if(isset($_POST['doimatkhau']) && $_POST['doimatkhau']) {
                    $pass_cu = $_POST['pass_cu'];
                    $pass_moi = $_POST['pass_moi'];
                    $pass_nhaplai = $_POST['pass_nhaplai'];
            
                    // Kiểm tra mật khẩu cũ với cơ sở dữ liệu
                    $check = checktaikhoan($username, $pass_cu);
            
                    if(empty($pass_cu) || empty($pass_moi) || empty($pass_nhaplai)) {
                        $thongbao = "Vui lòng điền đầy đủ thông tin.";
                    } elseif (!is_array($check)) {
                        $thongbao = "Mật khẩu cũ không chính xác.";
                    } elseif ($pass_moi != $pass_nhaplai) {
                        $thongbao = "Mật khẩu không khớp.";
                    } else {
                        doimk($pass_moi, $iduser);
            
                        $thongbao = "Đổi mật khẩu thành công.";
                    }
                }
            
                include 'view/taikhoan/doimatkhau.php';
                break;
            case 'donbook':
                if(isset($_GET['id'])&& ($_GET['id'])>0){
                    $id = $_GET['id'];
                    $listTourBook = loadAll_tourbookuser($iduser);
                }
                $thongbao ='Danh sách trống';
                include "view/taikhoan/donbook.php";       
            break;
        case 'dangxuat':
            session_destroy();
            header("Location: index.php?action=home");
            break;


        case 'tour':
            if(isset($_POST['kyw']) && ($_POST['kyw']!="")){
                $kyw = $_POST['kyw'];
                
            }else{
                $kyw = '';
            
            }
            $listtourct = loadAll_searchtour($kyw);
            include 'view/tour.php';
            break;
        case 'hotel':
            if(isset($_POST['kyw']) && ($_POST['kyw']!="")){
                $kyw = $_POST['kyw'];
                
            }else{
                $kyw = '';
            
            }
            $listht = loadAll_searchhotel($kyw);
            include 'view/hotel.php';
            break;
        case 'huydon':
            if(isset($_GET['id'])&& ($_GET['id'])>0){
                $id = $_GET['id'];
                huydon($id);
            }
            $listTourBook = loadAll_tourbookuser($iduser);
            include "view/taikhoan/donbook.php";
        break;
        case 'khoanhkhac':
            include 'view/khoanhkhac.php';
            break;
        default:
            include 'view/layouts/home.php';
            break;
    }

    include 'view/layouts/footer.php';
?>