<?php
require_once("config/connect.php");

$username = $_POST['username'];
$password = $_POST['password'];

$query = "select * from siswa where username='$username' and password='$password'";
$result = mysqli_query($is_connect, $query);

$data = mysqli_fetch_assoc($result);

if(mysqli_num_rows($result) > 0){
    $_SESSION['id'] = $data['id'];
    $_SESSION['username'] = $username;

    header('Location: index.php');
}else{
    echo 'Login gagal! Username atau password salah.';
    echo "<a href='login.php'>Kembali</a>";
}

?>