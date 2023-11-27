<?php
    function insert_tour($nametour, $image, $price, $title, $address, $status, $description, $schedule){
        $sql = "INSERT INTO tours(nametour, image, price, title, address, status, description,schedule) VALUES ('$nametour', '$image', '$price', '$title', '$address', '$status', '$description', '$schedule')";
        pdo_execute($sql);
    }
    function loadAll_tours(){
        $sql = "select * from tours order by id desc";
        $listtour = pdo_query($sql);
        return $listtour;
    }
    function loadAll_tours_home(){
        $sql = "select * from tours where 1 order by id desc limit 0,6";
        $listtour = pdo_query($sql);
        return $listtour;
    }
   
    function loadAll_tourct(){
        $sql = "select * from tours where 1 order by id desc limit 0,9";
        $listourct = pdo_query($sql);
        return $listourct;
    }
    function loadAll_searchtour($kyw){
        $sql = "select * from tours where 1";
        if($kyw!=""){
            $sql.=" and nametour like '%".$kyw."%' ";
        }   
        $sql.=" order by id desc";
        $listtourct = pdo_query($sql);
        return $listtourct;
    }
    function load_one_tour($id){
        $sql = "select * from tours where id =" .$id;
        $tour = pdo_query_one($sql);
        return $tour;
    }
    function delete_tour($id){
        $sql = "DELETE FROM tours WHERE id =" .$_GET['id'];
        pdo_execute($sql);
    }
    function update_tour($id, $nametour, $image, $price, $title, $address, $status, $description, $schedule){
        $sql = "update tours set nametour ='".$nametour."', image ='".$image."', price ='".$price."', title ='".$title."', description ='".$description."', schedule ='".$schedule."',status ='".$status."',address ='".$address."' where id = ".$id;
        pdo_execute($sql);
    }
    function totalTours(){
        $sql = "select count(*) as total_tours from tours";
        $result = pdo_query_one($sql);
        return $result['total_tours'];
    }
    function totalTitle($title){
        $sql = "select count(*) as total_title from tours where title = '".$title."'";
        $result = pdo_query_one($sql);
        return $result['total_title'];
    }
?>