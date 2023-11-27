<?php
     function insert_comment($content, $iduser, $idpro, $ngaybinhluan){
        $sql = "INSERT INTO comment(content, iduser, idpro, ngaybinhluan) VALUES('$content','$iduser','$idpro','$ngaybinhluan')";
        pdo_execute($sql);
    }
    function loadAll_comment($idpro) {
        $sql = "SELECT comment.*, users.username AS username, users.image AS user_image, tours.nametour AS nametour, hotels.namehotel as namehotel
            FROM comment  --  Chọn dữ liệu từ bảng comment-->
            LEFT JOIN users ON comment.iduser = users.iduser
            LEFT JOIN tours ON comment.idpro = tours.id
            LEFT JOIN hotels ON comment.idpro = hotels.id
            WHERE 1"; //điều kiện LEFT JOIN giữa bảng comment và users dựa trên điều kiện comment.iduser = users.iduser
    if ($idpro > 0) $sql .= " AND comment.idpro = '$idpro'";  //comment.*: Chọn tất cả các cột từ bảng comment. users.username AS username: Chọn cột username từ bảng users và đặt tên hiển thị là username.
    $sql .= " ORDER BY comment.id desc";

    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
    }
    function countComments($idpro) {
        $sql = "SELECT COUNT(*) as total FROM comment WHERE idpro = '$idpro'"; //dùng để đếm tổng số lượng bình luận của tour đó 
        $result = pdo_query_one($sql);
        return $result['total']; //Kết quả trả về dưới dạng mảng
    }
    function delete_comment($id){
        $sql = "DELETE FROM comment WHERE id = " .$_GET['id'];
        pdo_execute($sql);
    }
    
?>