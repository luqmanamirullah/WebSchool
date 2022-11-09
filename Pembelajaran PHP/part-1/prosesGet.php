<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p id="hasil">
        <?php 
            $nama = $_GET['nama'];
            $alamat = $_GET['alamat'];

            echo 'Hello'.$nama.'<br>';
            echo 'ini alamat mu akan: '.$alamat.'<br>';
            echo 'dan ini pakai method get loh';
        ?>
    </p>
</body>
</html>