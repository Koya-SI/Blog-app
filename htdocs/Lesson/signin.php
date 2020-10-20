<?php
$err_msg="";
if(isset($_POST['signin'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    try{
        $db = new PDO("mysql:host=localhost;dbname=sample","root","");
        $sql = "insert into users(username,password) values(?,?)";
        $stmt = $db->prepare($sql);
        $stmt->execute(array($username,$password));
        $result = $stmt->fetch();
        $stmt = null;
        $db = null;
        if($result[0] != 0){
        header('Location: http://localhost/Lesson/index.php');
        exit;
        }else{
            $err_msg = 'ユーザー名またはパスワードが入力されていません。';
        }
    }catch (PDOException $e){
        echo $e->getMessage();
        exit;
    }


}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規登録画面</title>
</head>
<style>
.inputform{
    margin:10px;
}

p{
    margin:0px;
}
</style>
<body>
    <h1>新規登録画面</h1>
    <form action="" method="POST">
    <?php if ($err_msg !== null && $err_msg !== '') { echo $err_msg; } ?>
        <p class="inputform">ユーザー名：<input type="text" name="username" value=""></p>
        <p class="inputform">パスワード：<input type="text" name="password" value=""></p><br>
        <input type="submit" name="signin" value="新規登録">
    </form>


</body>
</html>