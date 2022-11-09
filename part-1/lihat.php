<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Registrasi</title>
</head>
<body>
    <p id="hasil">
        <?php 
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $dbd = $_POST['dbd'];
            $sex = $_POST['sex'];
            $religion = $_POST['religion'];
            $adress = $_POST['adress'];
            $full_name = ''.$first_name.' '.$last_name;
            echo 'Selamat datang '.$full_name.' anda telah berhasil daftar. Data diri anda: <br>';
            echo 'Tanggal Lahir: '.$dbd.'<br>';
            echo 'Jenis Kelamin: '.$sex.'<br>';
            echo 'Agama: '.$religion.'<br>';
            echo 'Alamat: '.$adress.'<br>';
        ?>
    </p>
</body>
</html>