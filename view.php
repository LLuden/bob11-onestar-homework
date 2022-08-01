<?php
    $contentID = $_GET['id'];

    $conn = mysqli_connect('us-cdbr-east-06.cleardb.net', 'b970e70fd75771', '96a47725', 'heroku_ac62ccc8b051e59');
    
    $sql = "SELECT * FROM board WHERE id = $contentID";
    $res = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($res)){
?>
<head>
    <link rel="stylesheet" href="./css/view.css">
</head>
<body>
    <div class="frame">
        <div class="contentName">
            <p>게시물 제목 : <?php echo $row['title'];?></p>
        </div>
        <hr>
        <div class="writer">
            <p>작성자 : <?php echo $row['name'];?></p>
        </div>
        <hr>
        <div class="written">
            <p>게시물 작성 시간 : <?php echo $row['written'];?></p>
        </div>
        <hr>
        <div class="content">
            <p>내용 : <?php echo $row['content'];?></p>
        </div>
    </div>
    <br>
    <a href="board.php">게시물 목록</a>
</body>
<?php } ?>
