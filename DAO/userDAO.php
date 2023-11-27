<?php
    function insert_taikhoan($username, $pass, $email, $tel){
        $sql = "INSERT INTO users(username,pass,email,tel) VALUES('$username','$pass','$email','$tel')";
        pdo_execute($sql);
    }
    function checktaikhoan($username, $pass){
        $sql = "select * from users where username='".$username."' AND pass='".$pass."'";
        $kq = pdo_query_one($sql);
        return $kq;
    }
    function loadAll_user(){
        $sql = "SELECT * FROM users order by iduser desc";
        $listuser = pdo_query($sql);
        return $listuser;
    }
    function loadAll_usernew(){
        $sql = "SELECT * FROM users order by iduser desc limit 0,5";
        $listuser = pdo_query($sql);
        return $listuser;
    }
    function loadone_user($iduser){
        $sql = "SELECT * FROM users WHERE iduser=".$iduser; 
        $user = pdo_query_one($sql);
        return $user;
    } 
    function update_user($iduser, $username, $email, $address, $tel, $role){
        $sql = "update users SET username='".$username."',email='".$email."',address ='".$address."',role = '".$role."',tel='".$tel."' where iduser = ".$iduser;
        pdo_execute($sql);
    }
    function update_taikhoan($iduser, $username, $email, $address, $tel){
        $sql = "update users SET username='".$username."',email='".$email."',address ='".$address."',tel='".$tel."' where iduser = ".$iduser;
        pdo_execute($sql);
    }
    function doimk($pass_moi, $iduser){
        $sql = "update users SET pass='".$pass_moi."' WHERE iduser=".$iduser;
        pdo_execute($sql);
    }
    function update_img($iduser, $image) {
        $sql = "UPDATE users SET image = '$image' WHERE iduser = $iduser";
        pdo_execute($sql);
    }
  
?>