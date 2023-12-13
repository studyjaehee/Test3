<!DOCTYPE html>
<html lang="ko">
<head>
</head>
<body>
<a href="./183_list.php">게시판 목록</a>
    <form name="boardWrite" method="POST" action="181_saveBoard.php">
    제목
    <br>
    <br>
    <input type="text" name="title" required />
    <br>
    <br>
    내용
    <br>
    <br>
    <textarea name="content" cols="80" rows="10" required></textarea>
    <br>
    <br>
    <input type="submit" value="저장" />
    </form>  
</body>
</html>