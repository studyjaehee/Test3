<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title></title>
</head>
<body>
   <?php
   session_start();
   $host = 'localhost';
   $user = 'root';
   $pw = '1234';
   $db_name = 'test';
      $mysqli = new mysqli($host, $user, $pw, $db_name); //db 연결
      
      //login.php에서 입력받은 id, password
      $username = $_REQUEST['id'];
      $userpass = $_REQUEST['pw'];
      
      $q = "SELECT * FROM login WHERE id = '$username' AND pass = '$userpass'";
      $result = $mysqli->query($q);
      $row = $result->fetch_array(MYSQLI_ASSOC);
      
      //결과가 존재하면 세션 생성
      if ($row != null) {
         //$_SESSION['username'] = $row['id'];
         //$_SESSION['name'] = $row['name'];
         echo "<script>alert('로그인 성공!')</script>";
         exit;
      }
      
      //결과가 존재하지 않으면 로그인 실패
      if($row == null){
         echo "<script>alert('로그인 실패!')</script>";
         exit;
      }
      ?>
   </body>