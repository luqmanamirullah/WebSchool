<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/news.css">
    <title>Berita Terkini!</title>
    <?php 
        $title = $_POST['title'];
        $content = $_POST['content'];
        $writer = $_POST['name-author'];
        $time = $_POST['time'];
        $date = $_POST['date'];
    ?>
</head>
<body>
    <div class="container">
        <h1 class="title">
            <?php 
                echo $title;
            ?>
        </h1>
        <p class="author">
            <?php 
                echo "By: $writer, $date, $time";
            ?>
        </p>
        <p class="content">
            <?php
                echo "$content"
            ?>
        </p>
    </div>
</body>
</html>