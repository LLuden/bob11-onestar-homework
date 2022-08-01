<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="./css/inputpage.css">
    </head>
    <body>
        <h2>로그인</h2>
        <hr>
        <?php if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) { ?>
        <form method="post" action="login_ok.php" autocomplete="off">
            <div class="inputForm">
            <p><small>ID</small><br><img src="./img/id_icon.png"><input type="text" name="user_id" required></p>
            <p><small>PW</small><br><img src="./img/pw_icon.png"><input type="password" name="user_pw" required></p>
            <p><input class="submitBtn" type="submit" value="로그인"></p>
            </div>
        </form>
        <small><a href="join.php">처음 오셨나요?</a></small>
        <small><a href="index.php">메인 화면으로</a></small>
        <?php } else {
            $user_id = $_SESSION['user_id'];
            $user_name = $_SESSION['user_name'];
            echo "<p>$user_name($user_id)님은 이미 로그인되어 있습니다.";
            echo "<p><button onclick=\"window.location.href='index.php'\">메인으로</button> <button onclick=\"window.location.href='logout.php'\">로그아웃</button></p>";
        } ?>
    </body>
</html>