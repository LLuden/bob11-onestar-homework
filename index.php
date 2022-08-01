<!DOCTYPE html>
<?php session_start(); ?>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <title>BOB</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1>BOB11-Homework-OneStar</h1>
    <hr>
    <div class="loginForm">
    <?php
        if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) {
            echo "<p>로그인을 해 주세요.</p>";
            echo "<p><button onclick=\"window.location.href='login.php'\">로그인</button> <br><small><a href='join.php'>회원가입</a></small></p>";
        } else {
            $user_id = $_SESSION['user_id'];
            $user_name = $_SESSION['user_name'];
            echo "<p>$user_name($user_id)님 환영합니다.";
            echo "<p><button onclick=\"window.location.href='logout.php'\">로그아웃</button></p>";
            echo "<p><a href='board.php'>게시판 바로가기</a></p>";
        }
    ?>
    </div>
</body>
</html>