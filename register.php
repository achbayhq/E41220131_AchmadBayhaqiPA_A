<?php 
// require('koneksi.php');
$koneksi = mysqli_connect("localhost", "root", "", "user_bkpm");

if ( isset($_POST['register']) ){
    $userMail = mysqli_escape_string($koneksi, $_POST['txt_email']) ;
    $userPass = mysqli_escape_string($koneksi, $_POST['txt_pass']);
    $userName = mysqli_escape_string($koneksi, $_POST['txt_nama']);

    $query = "INSERT INTO user_detail VALUES ('', '$userMail','$userPass','$userName', 2)";
    $stmt = mysqli_query($koneksi, $query);
    header('Location: login.php');
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="register.php" method="POST">
        <p>Email : <input type="text" name= "txt_email" required></p>
        <p>Password : <input type="password" name= "txt_pass" required></p>
        <p>Nama : <input type="text" name= "txt_nama" required></p>
        <button type = "submit" name="register" > Register </button>
    </form>
    <p> <a href="login.php"> Sudah Punya Akun </a></p>
</body>
</html>