<?php
  include $_SERVER['DOCUMENT_ROOT'].'/TEST2/cssControlPanel/163_connection.php';

  $title = $_POST['title'];
  $content = $_POST['content'];

  if($title != null && $title != '') {
    $title = $dbConnect->real_escape_string($title);
  } else {
    echo "제목을 입력하세요.";
    echo "<a href='./180_writeForm.php'>작성 페이지로 이동</a>";
    exit;
  }

  if($content != null && $content != '') {
    $content = $dbConnect->real_escape_string($content);
  } else {
    echo "내용을 입력하세요.";
    echo "<a href='./180_writeForm.php'>작성 페이지로 이동</a>";
    exit;
  }

  $memberID = $_SESSION['memberID'];

  $regDate = time();

  $sql = "INSERT INTO board (memberID, title, content, regDate) ";
  $sql .= "VALUES ('$memberID', '$title', '$content', '$regDate')";
  $result = $dbConnect->query($sql);

  if($result) {
    echo "저장 완료<br>";
    echo "<a href='./183_list.php'>게시글 목록으로 이동</a>";
    exit;
  } else {
    echo "저장 실패<br>";
    echo "<a href='./183_list.php'>게시글 목록으로 이동</a>";
    exit;
  }
?>