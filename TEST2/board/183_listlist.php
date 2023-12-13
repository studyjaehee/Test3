<?php
  include $_SERVER['DOCUMENT_ROOT'].'/TEST2/cssControlPanel/163_connection.php';
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <title>게시물목록</title>
</head>
<body>
  <a href="./180_writeForm.php">글 작성하기</a>
  <table>
    <thead>
      <br><br>
      <th>번호</th>
      <th>&nbsp;&nbsp;&nbsp;제목</th>
      <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;게시일</th>
    </thead>
    <tbody>
      <?php
        if(isset($_GET['page'])) {
          $page = (int) $_GET['page'];
        } else {
          $page = 1;
        }

        $numView = 30;
        $firstLimitValue = ($numView * $page) - $numView;

        $sql = "SELECT b.boardID, b.title, b.regDate FROM board b ";
        $sql .= "JOIN member m ON (b.memberID = m.memberID) ORDER BY boardID ";
        $sql .= "DESC LIMIT {$firstLimitValue}, {$numView}";
        $result = $dbConnect->query($sql);

        if($result) {
          $dataCount = $result->num_rows;

          if($dataCount > 0) {
            for($i = 0; $i < $dataCount; $i++) {
              $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
              echo "<th>";
              echo "<td>".$memberInfo['boardID']."</td>";
              echo "<td><a href='/TEST2/board/185_view.php?boardID={$memberInfo['boardID']}'>{$memberInfo['title']}</a></td>";
              echo "<td>".date('Y-m-d H:i:s', $memberInfo['regDate'])."</td>";
              echo "</tr>";
            }
          } else {
            echo "<tr><td colspan='4'>게시글이 없습니다.</td></tr>";
          }
        }
      ?>
    </tbody>
  </table>

  <?php
    include $_SERVER['DOCUMENT_ROOT'].'/TEST2/board/184_nextPageLink.php';
    include $_SERVER['DOCUMENT_ROOT'].'/TEST2/board/186_searchForm.php';
  ?>
</body>
</html>