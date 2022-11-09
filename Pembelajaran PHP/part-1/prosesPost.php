<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result of Form latihanPost.php</title>
</head>
<body>
    <p id="hasil">
        <?php 
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];

            echo 'Hello '.$nama.'<br>';
            echo ''.$alamat.' pasti adalah alamatmu';
        ?>
    </p>
</body>
</html>