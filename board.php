<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Board</title>
</head>
<body>
    <div class=top><h2>게시판</h2></div>
    <button class=no onclick="window.location.href='write.php'">글쓰기</button>
    <a href="index.php">메인으로 돌아가기</a>
    <table class=middle>
        <thead>
            <tr align=center>
                <th width=70>Post ID</th>
                <th width=300>제목</th>
                <th width=120>작성자</th>
                <th width=120>작성일</th>
            </tr>
       </thead>
       <?php
            $conn = mysqli_connect('us-cdbr-east-06.cleardb.net', 'b970e70fd75771', '96a47725', 'heroku_ac62ccc8b051e59');
            
            $sql = "SELECT * FROM board ORDER BY id DESC";
            $res = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_array($res)){
        ?>
            <tbody>
                <tr align=center>
                    <td><?php echo $row['id'];?></td>
                    <td><a href="view.php?id=<?=$row['id']?>"><?php echo $row['title'];?></a></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['written'];?></td>
                </tr>
            </tbody>
        <?php } ?>
    </table>
</body>
</html>