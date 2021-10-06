<?php
    require_once 'connect.php';
    $newId = $_GET['id'];
    $anew = mysqli_query($connect, "SELECT * FROM `news` WHERE id = '$newId' ");
    $anew = mysqli_fetch_assoc($anew);
    ?>

<!doctype html>
<html lang="en">
<head>

</head>
<body>
<h1>Update a new</h1>
<form action="updateNews.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=$anew['id']?>" >
    <p>Name</p>
    <input type="text" name="name" value="<?=$anew['name']?>">
    <p>Description</p>
    <textarea name="description"><?= $anew['description'] ?></textarea>
    <p>Date</p>
    <input type="date" name="date" value="<?=$anew['publishDate'] ?>">
    <p>Image</p>
    <input type="file" name="image"  src="<?=$anew['image'] ?>">
    <button type="submit">Update</button>
</form>
</body>
</html>
