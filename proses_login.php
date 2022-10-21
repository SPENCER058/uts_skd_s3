<?php 
    include ("koneksi.php");
    include ("caesar.php");

    $email = $_POST['email'];

    $plainEmail = $email;
    $cipherEmail = enkripsi($plainEmail, 8);

    $password = $_POST['password'];
    $password_md5 = md5($password.$cipherEmail);

    $data = mysqli_query($conn, "SELECT * FROM user_table WHERE email = '$email' AND password = '$password_md5'");

    $aName1 = mysqli_fetch_assoc($data);

    $cek = mysqli_num_rows($data);

    header("location: index.php");
    
?>
