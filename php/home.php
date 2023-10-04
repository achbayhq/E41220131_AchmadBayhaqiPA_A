<?php 
// require('koneksi.php');
$koneksi = mysqli_connect("localhost", "root", "", "user_bkpm");

$email = "";
session_start();

if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
    $email = $_SESSION['username'];
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Selamat Datang <?php echo $email; ?></h1>
    <table border="1">
        <tr>
            <td>No</td>
            <td>Email</td>
            <td>Nama</td>
        </tr>
        <?php 
        $query = "SELECT * FROM user_detail";
        $result = mysqli_query($koneksi, $query);
        $no = 1;
        while ($row = mysqli_fetch_array($result)){
            $userMail = $row['user_email'];
            $userName = $row['user_fullname'];
         ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $userMail; ?></td>
            <td><?php echo $userName ?></td>
            <td> <a href="edit.php?id=<?php echo $row['id'];?>">edit</a>
                <a href="hapus.php?id=<?php echo $row['id']; ?>">hapus</a>
            </td>
        </tr>
        <?php 
        $no++; 
        } ?>
    </table>
</body>
</html>