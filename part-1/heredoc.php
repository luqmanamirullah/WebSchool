<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengunaan Heredoc sintax</title>
</head>
<body>
    <h1>Penggunaan heredoc sintax</h1>
    <?php 
        $STRINGKU = <<<AKHIR
        Menggunakan PHP.
        AKHIR;
        echo <<<KET
        String yang dihasilkan dari sintax heredoc <br>
        \$STRINGKU = $STRINGKU
        KET;
    ?>
</body>
</html>