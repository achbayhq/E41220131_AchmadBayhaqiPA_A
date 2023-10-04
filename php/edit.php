<?php 
// require('koneksi.php');
$koneksi = mysqli_connect("localhost", "root", "", "user_bkpm");

if(isset($_POST['update'])){
    $userId = $_POST['txt_id'];
    $userMail = $_POST['txt_email'];
    $userPass = $_POST['txt_pass'];
    $userName = $_POST['txt_nama'];

    $query = "UPDATE user_detail Set user_pass = '$userPass', user_fullname = '$userName' WHERE id = '$userId'";
    $result = mysqli_query($koneksi, $query);
    header("Location: home.php");
}
$id = $_GET["id"];
$query = "SELECT * FROM user_detail WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);

while ($row = mysqli_fetch_array($result)){
    $id = $row["id"];
    $userMail = $row['user_email'];
    $userPass = $row['user_pass'];
    $userName = $row['user_fullname'];
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Edit</title>
</head>
<body>
    <form action="edit.php" method="POST">
        <p><input type="hidden" name="txt_id" value="<?php echo $id ?>" ></p>
        <p>Email : <input type="text" name="txt_email" value="<?php echo $userMail ?>" readonly ></p>
        <p>Password : <input type="password" name="txt_pass" value="<?php echo $userPass ?>"></p>
        <p>Nama : <input type="text" name="txt_nama" value="<?php echo $userName ?>"></p>
        <button type="submit" name="update" > Update </button>
    </form>
    <p> <a href="home.php">Kembali</a></p>
</body>
</html>