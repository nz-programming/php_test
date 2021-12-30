<?php
    $email = $_POST["email"];
    $password = $_POST["password"];
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $blood = $_POST["blood"];
    $old = $_POST["old"];
    $memo = $_POST["memo"];
    $sql = "insert into userdata
    (email, password, name, gender, blood, old, memo) value
    ('".$email."', '".$password."', '".$name."', '".$gender."', '".$blood."', '".$old."', '".$memo."')";
    $db = mysqli_connect("localhost", "root", "", "user");
    $result = mysqli_query($db, $sql);
    mysqli_close($db);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <p>登録情報が完了しました</p>
        <a href="index.php">ログインページへ</a>
    </body>
</html>

