<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <p>登録情報を入力してください</p>
        <form action="insert_result.php" method="post">
            <label for="email">Email</label>
            <input type="text" id="email" name="email">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            <label for="name">名前</label>
            <input type="text" id="name" name="name">
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
            <label for="name">年齢</label>
            <input type="text" id="old" name="old">
            <label for=memo>メモ</label>
            <textarea name="memo" rows="4" cols="20" maxlength="100"></textarea>
            <input type="submit" value="登録">
        </form>
        <br>
        <a href="index.php">ログインページへ</a>
    </body>
</html>

