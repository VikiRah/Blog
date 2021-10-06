<?php
    require_once 'connect.php';


    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Modals · Bootstrap v5.1</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/modals/">


    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
        img{
            max-width: 100%;
            height: auto;
            display: block;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="modals.css" rel="stylesheet">
</head>
<body>

<form method="post">
    <button type="button" onclick="window.location.href='CreatingPage.php'">Add a new </button>
    <button type="button" onclick="window.location.href='main.php'">Sort Ascending </button>
    <button type="button" onclick="window.location.href='main_desc.php'">Sort Descending </button>
</form>


<div class="modal modal-tour position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalTour">


   <?php
        $news = mysqli_query($connect, "SELECT * FROM `news` order by publishDate");
        $news = mysqli_fetch_all($news);
        foreach ($news as $new){
            ?>

            <div class="modal-dialog" role="document">
                <div class="modal-content rounded-6 shadow">
                    <div class="modal-body p-5">
                        <h2 class="fw-bold mb-0"> <?= $new[1] ?> </h2>
                        <ul class="d-grid gap-4 my-5 list-unstyled">
                            <li class="d-flex gap-4">
                                <div>
                                    <h5 class="mb-0"> <?= $new[2] ?> </h5>
                                    <?= $new[4] ?>
                                    <?php
                                    if(strcmp($new[3],"/uploads/" ) > 0)
                                        echo '<img src="' . $new[3] . '">';
                                    ?>
                                </div>
                            </li>
                        </ul>
                        <a href="CreatingPage.php">Create</a>
                        <a href="UpdatingNews.php?id=<?= $new[0] ?>">Update</a>
                        <a href="deleteNews.php?id=<?= $new[0] ?>">Delete</a>
                    </div>
                </div>
            </div>
            <?php
        }

   ?>


</div>

<div class="b-example-divider"></div>


</body>
</html>

