<?php 
// require('koneksi.php');
$koneksi = mysqli_connect("localhost", "root", "", "user_bkpm");
session_start();

$email = "";
$pass = "";

if (isset($_POST['submit']) ){
    $email = $_POST['txt_email'];
    $pass = $_POST['txt_pass'];

    if (!empty(trim($email)) && !empty(trim($pass))){
    $query = "SELECT * FROM user_detail WHERE user_email = '$email' AND user_pass = '$pass'";
    $result = mysqli_query($koneksi, $query);
    $num = mysqli_num_rows($result);

    while ($row = mysqli_fetch_array($result)){
        $id = $row["id"];
        $userVal = $row["user_email"];
        $passVal = $row["user_pass"];
        $userName = $row["user_fullname"];
        $level = $row["level"];

    }
    if($num != 0){
        if($userVal == $email && $passVal == $pass){
            $_SESSION['login'] = true;
            $_SESSION['username'] = $userVal;
            header("Location: home.php");
        }else{
            $error = "Email atau Password Salah !!";
            // header("Location: login.php");
            echo $error;
        }
    }else{
            $error = "User tidak Ditemukan";
            // header("Location: login.php");
            echo $error;
    }
}else{
    $error = "Data tidak Boleh kosong";
    echo $error;
}
}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <form method="post" action="login.php">
        <p>email : <input type="text" name="txt_email"></p>
        <p>Password : <input type="password" name="txt_pass" ></p>
        <button type="submit" name="submit" > Sign In </button>
    </form>
    <p><a href="register.php">Tidak punya Akun? Register</a></p>
</body>
</html>