<!doctype html>
<html lang="en">
<head>

</head>
<body>
<h1>Add a new</h1>
<form action="createNews.php" method="post" enctype="multipart/form-data">
    <p>Name</p>
    <input type="text" name="name">
    <p>Description</p>
    <textarea name="description"></textarea>
    <p>Date</p>
    <input type="date" name="date">
    <p>Image</p>
    <input type="file" name="image">
    <button type="submit"">Add</button>
</form>
</body>
</html>