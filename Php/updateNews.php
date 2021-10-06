<?php
    require_once 'connect.php';
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $date = $_POST['date'];


if(isset($_FILES['image']['name']))
{
    $imgName = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmp_name, 'uploads/' . $imgName );
    $image = '/uploads/' . $imgName;
    mysqli_query($connect, "UPDATE `news` SET `name` = '$name', `publishDate` = '$date', `image` = '$image', `description` = '$description' WHERE `news`.`id` = '$id'");
}
else
    mysqli_query($connect, "UPDATE `news` SET `name` = '$name', `publishDate` = '$date', `image` = NULL, `description` = '$description' WHERE `news`.`id` = '$id'");

    header('Location: /main.php');

?>