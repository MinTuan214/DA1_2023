<?php
    function insert_hotel($namehotel, $price, $description, $address, $phonenumber, $title, $status, $image){
        $sql = "INSERT INTO hotels(namehotel, price, description, address, phonenumber, title, status, image) VALUES ('$namehotel', '$price', '$description','$address', '$phonenumber', '$title', '$status', '$image')";
        pdo_execute($sql);
    }
    function loadAll_hotel(){
        $sql = "select * from hotels order by id desc";
        $listht = pdo_query($sql);
        return $listht;
    }
    function loadAll_hotel_home(){
        $sql = "select * from hotels where 1 order by id desc limit 0,8";
        $listht = pdo_query($sql);
        return $listht;
    }
    function load_one_hotel($id){
        $sql = "select * from hotels where id =" .$id;
        $ht = pdo_query_one($sql);
        return $ht;
    }
    function loadAll_searchhotel($kyw){
        $sql = "select * from hotels where 1";
        if($kyw!=""){
            $sql.=" and namehotel like '%".$kyw."%' ";
        }   
        $sql.=" order by id desc";
        $listht = pdo_query($sql);
        return $listht;
    }
    function delete_hotel($id){
        $sql = "DELETE FROM hotels WHERE id =" .$_GET['id'];
        pdo_execute($sql);
    }
    function update_hotel($id, $namehotel, $image, $price, $title, $address, $status, $description, $phonenumber){
        $sql = "update hotels set namehotel ='".$namehotel."', image ='".$image."', price ='".$price."', title ='".$title."', description ='".$description."', phonenumber ='".$phonenumber."',status ='".$status."',address ='".$address."' where id = ".$id;
        pdo_execute($sql);
    }
?>