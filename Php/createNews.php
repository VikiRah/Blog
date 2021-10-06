<?php
    require_once 'connect.php';
    $name = $_POST['name'];
    $description = $_POST['description'];
    $date = $_POST['date'];

    if(isset($_FILES['image']['tmp_name']))
    {
        $imgName = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmp_name, 'uploads/' . $imgName );
        $image = '/uploads/' . $imgName;
        mysqli_query($connect, "INSERT INTO `news` (`id`, `name`, `publishDate`, `image`, `description`) VALUES (NULL, '$name', '$date', '$image' , '$description')");
    }
    else
        mysqli_query($connect, "INSERT INTO `news` (`id`, `name`, `publishDate`, `image`, `description`) VALUES (NULL, '$name', '$date', NULL, '$description')");


    header('Location: /main.php');

?>