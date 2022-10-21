<?php 
    include ("koneksi.php");

    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_md5 = md5($password);

    $data = mysqli_query($conn, "SELECT * FROM user_table WHERE email = '$email' AND password = '$password_md5'");

    $aName1 = mysqli_fetch_assoc($data);

    $cek = mysqli_num_rows($data);

    $uname = $aName1["nama_lengkap"];

    echo "<h1> login berhasil, selamat datang " . $uname . " </h1>";
?>
