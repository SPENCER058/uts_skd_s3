<?php 
    include ("koneksi.php");

    $nama_lengkap = $_POST["nama_lengkap"];
    $nisn = $_POST["nisn"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password_md5 = md5($password);

    $sql = "INSERT INTO user_table (nama_lengkap, nisn, email, password)
    VALUES ('$nama_lengkap', '$nisn', '$email', '$password_md5')";

    if ($conn->query($sql)==TRUE) {
        ?> 
        
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <script>
                prompt("Register Berhasil")
            </script>
        </body>
        </html>
        
        <?php
        header( "refresh:1; url=login.php" ); 
    } else {
        echo "Error: " . $sql . "<br/>" . $conn->error;
    }

    $conn->close();
?>