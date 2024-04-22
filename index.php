<?php

require_once './config/db.php';
function get_user_by_id($idUser, $name)
{
    global $connect;
    $id = $idUser;
    $username = $name;
    $query = "SELECT * FROM `users` WHERE `id` = ? AND `username` = ?";
    $statement = $connect->prepare($query);
    $statement->bindParam(1, $id, PDO::PARAM_INT); // Ràng buộc tham số đầu tiên với kiểu dữ liệu INT
    $statement->bindParam(2, $username, PDO::PARAM_STR); // Ràng buộc tham số thứ hai với kiểu dữ liệu STRING
    $statement->execute();
    $user = $statement->fetch();
    print_r($user);
}

get_user_by_id(1, 'devc1');