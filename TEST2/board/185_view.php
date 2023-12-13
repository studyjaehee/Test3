<?php
  #include $_SERVER['DOCUMENT_ROOT'].'/php/board/171_session.php';
  #include $_SERVER['DOCUMENT_ROOT'].'/php/board/179_checkSignSession.php';
  include $_SERVER['DOCUMENT_ROOT'].'/TEST2/cssControlPanel/163_connection.php';

  if(isset($_GET['boardID']) && (int) $_GET['boardID'] > 0) {
    $boardID = $_GET['boardID'];
    $sql = "SELECT b.title, b.content, m.nickName, b.regDate FROM board b JOIN member m ON (b.memberID = m.memberID) ";
    $sql .= "WHERE b.boardID = {$boardID}";
    #$sql = "SELECT title, content, regDate FROM board WHERE boardID = {$boardID}"
    $result = $dbConnect->query($sql);
    #echo $result;

    if($result) {
      $contentInfo = $result->fetch_array(MYSQLI_ASSOC);
      echo "제목 : ".$contentInfo['title']."<br>";
      echo "작성자 : ".$contentInfo['nickName']."<br>";
      $regDate = date('Y-m-d h:i:s', $contentInfo['regDate']);
      echo "게시일 : {$regDate} <br><br>";
      echo "내용 <br>";
      echo $contentInfo['content']."<br>";
      echo "<a href='/TEST2/board/183_listlist.php'>목록으로 이동</a>";
    } else {
      echo "잘못된 접근 입니다.";
      exit;
    }
  } else {
    echo "잘못된 접근 입니다.";
    exit;
  }
?>