<?php
    $email = $_POST["email"];
    $password = $_POST["password"];
    $db = mysqli_connect("localhost", "root", "", "user");
    $sql = "select * from userdata where email='".$email."' and password='".$password."'";
    $result = mysqli_query($db, $sql);
    $loginFlug = false;
    $name = "";
    while($data = mysqli_fetch_assoc($result)){
        $name = $data['name'];
        $loginFlug = true;
    }
    mysqli_close($db);        
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            if ($loginFlug){
                echo '<p>'.$name.'さん、ログインできました！</p>
                        <form action="search.php" method="post">
                            <label for="gender">性別</label>
                            <input type="radio" name="gender" value="0" checked=checked>男
                            <input type="radio" name="gender" value="1">女
                            <label for="blood">血液型</lavel>
                            <select name="blood">
                                <option value="A">A型</option>
                                <option value="B">B型</option>
                                <option value="O">O型</option>
                                <option value="AB">AB型</option>
                            </select>
                            <input type="checkbox" name="over_sixty" value="1">60歳以上も含む
                            <input type="submit" value="検索">
                        </form>';
            }else{
                echo '<p>EmailまたはPasswordが正しくありません。</p>
                        <form action="index.php" method="post">
                            <input type="submit" value="戻る">
                        </form>';
            }
        ?>
    </body>
</html>