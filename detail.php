<?php
    $id = $_GET["id"];
    $db = mysqli_connect("localhost", "root", "", "user");
    $sql = "select * from userdata where id=".$id;
    $result = mysqli_query($db, $sql);
    mysqli_close($db);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            while($data = mysqli_fetch_assoc($result)){
                echo '<form action="update.php" method="post">';
                    echo '<label for="email">Email</label>';
                    echo '<input type="text" id="email" name="email" value="'.$data["email"].'">';
                    echo '<label for="password">Password</label>';
                    echo '<input type="text" id="password" name="password" value="'.$data["password"].'">';
                    echo '<label for="name">名前</label>';
                    echo '<input type="text" id="name" name="name" value="'.$data["name"].'">';
                    echo '<label for="gender">性別</label>';
                    if($data["gender"] == 0){
                        echo '<input type="radio" name="gender" value="0" checked=checked>男';
                        echo '<input type="radio" name="gender" value="1">女';
                    }else{
                        echo '<input type="radio" name="gender" value="0">男';
                        echo '<input type="radio" name="gender" value="1" checked=cheked>女';
                    }
                    echo '<label for="blood">血液型</label>';
                    $bloodList = array("A", "B", "O", "AB");
                    echo '<select name="blood">';
                    echo "<br>";
                    var_dump($bloodList);
                    for($i=0; $i<count($bloodList); $i++){
                        if($data["blood"] == $bloodList[$i]){
                            echo '<option value="'.$bloodList[$i].'" selected>'.$bloodList[$i].'型</option>';
                        }else{
                            echo '<option value="'.$bloodList[$i].'">'.$bloodList[$i].'型</option>';
                        }
                    }
                    echo '</select>';
                    echo '<label for=old>年齢</label>';
                    echo '<input type="text" id="old" name="old" value="'.$data["old"].'">';
                    echo '<label for=memo>メモ</label>';
                    echo '<textarea name="memo" rows="4" cols="20" maxlength="100">'.$data["memo"].'</textarea>';
                    echo '<input type="hidden" name="id" value="'.$id.'">';
                    echo '<input type="submit" value="更新">';
                echo '</form>';
            }
            echo '<button><a href="delete.php?id='.$id.'"><p>削除</p></a></button>';
        ?>
        
    </body>
</html>