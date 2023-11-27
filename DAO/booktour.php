<?php
  function insert_bill($name, $address, $tel, $email, $description, $pttt, $ngaybook, $nametour, $total, $soluong, $iduser)
  {
      $sql = "INSERT INTO booktour (name, address, tel, email, description, method, ngaybook, nametour, total, soluong, iduser) 
              VALUES ('$name', '$address', '$tel', '$email', '$description', '$pttt', '$ngaybook', '$nametour', '$total', '$soluong' , '$iduser')";
      return pdo_execute_lastInsertID($sql);
  }
  function loadAll_tourbook()
  {
      $sql = "SELECT booktour.*, users.username as username_booker
              FROM booktour 
              LEFT JOIN users ON booktour.iduser = users.iduser
              ORDER BY booktour.id DESC";  
      
      return pdo_query($sql);
  }
  function loadAll_tourbooknew()
  {
      $sql = "SELECT booktour.*, users.username as username_booker
              FROM booktour 
              LEFT JOIN users ON booktour.iduser = users.iduser
              ORDER BY booktour.id DESC limit 0,4";  
      
      return pdo_query($sql);
  }
  function loadAll_tourbookuser($iduser)
{
    $sql = "SELECT bt.*, u.username as username_booker
            FROM booktour bt
            LEFT JOIN users u ON bt.iduser = u.iduser
            WHERE bt.iduser = $iduser
            ORDER BY bt.id DESC limit 0,5";

    return pdo_query($sql);
}
function load_one_tourbook($id){
  $sql = "select * from booktour where id =" .$id;
  $book = pdo_query_one($sql);
  return $book;
}
  function update_status($id, $status){
    $sql = "UPDATE booktour SET status = '$status' WHERE id =" .$id;
    pdo_execute($sql);
  }
  function huydon($id){
    $sql = "delete from booktour where id =" .$_GET['id'];
    pdo_execute($sql);
  }
?>