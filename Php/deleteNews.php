<?php
    require_once 'connect.php';
    $newId = $_GET['id'];
    $anew = mysqli_query($connect, "SELECT * FROM `news` WHERE id = '$newId' ");
    $anew = mysqli_fetch_assoc($anew);
    mb_internal_encoding("UTF-8");
    $path = $anew['image'];
    $path = mb_substr($path, 1);
    unlink($path);
    mysqli_query($connect, "DELETE FROM `news` WHERE `news`.`id` = '$newId'");
    header('Location: /main.php');
?>
