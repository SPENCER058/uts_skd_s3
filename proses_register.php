<?php 
    include ("koneksi.php");
    include ("caesar.php");
    
    $nama_lengkap = $_POST["nama_lengkap"];
    $nisn = $_POST["nisn"];
    $email = $_POST["email"];

    $plainEmail = $email;
    $cipherEmail = enkripsi($plainEmail, 8);

    $password = $_POST["password"];
    $password_md5 = md5($password.$cipherEmail);
    $role="user";

    $sql = "INSERT INTO user_table (nama_lengkap, nisn, email, password, role)
    VALUES ('$nama_lengkap', '$nisn', '$email', '$password_md5', '$role')";

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
                alert("Register Berhasil")
            </script>
        </body>
        </html>
        
        <?php
        header( "refresh:0; url=login.php" ); 
    } else {
        echo "Error: " . $sql . "<br/>" . $conn->error;
    }

    $conn->close();
?>