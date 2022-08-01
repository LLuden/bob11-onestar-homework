<?php
    session_start();
    if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) {
        echo "<script>alert('비회원입니다!');";
        echo "window.location.replace('index.php');</script>";
    }

    $title = $_POST['title'];
    $content = $_POST['content'];
    $writer = $_SESSION['user_id'];
    $name = $_SESSION['user_name'];
    $conn = mysqli_connect('localhost', 'root', '1672943850', 'WebPage');

    $sql = "INSERT INTO board(title, writer, name, written, content) VALUES ('$title', '$writer', '$name', now(), '$content');";

    $res = mysqli_query($conn, $sql);

    if($res) {
        echo "<script>alert('게시글이 작성되었습니다.');";
        echo "window.location.replace('board.php');</script>";
    } else {
        echo mysqli_error($conn);
    }
?>