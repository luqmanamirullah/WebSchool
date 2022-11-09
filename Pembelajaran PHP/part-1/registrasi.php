<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi PHP</title>
</head>
<body>
    <h1>Registrasi</h1>
    <form action="lihat.php" method="post">
        First Name:<input type="text" name="first_name" >
        Last Name:<input type="text" name="last_name"> <br>
        Date of Birth Day: <input type="date" name="dbd"> <br>
        Sex : <input type="radio" name="sex" value="Male"> Male <input type="radio" name="sex" value="Famale"> Famale <br>
        Religion: 
        <select name="religion">
            <option value="Islam">Islam</option>
            <option value="Katolik">Katolik</option>
            <option value="Protestan">Protestan</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
            <option value="Konghucu">Konghucu</option>
        </select> <br>
        Alamat: 
        <textarea name="adress" id="" cols="30" rows="1"></textarea>
        <input type="submit" value="Register">
    </form>
</body>
</html>