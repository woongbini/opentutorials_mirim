<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
   <h1>로그인 애플리케이션 PHP</h1>
    <h2>PHP</h2>
    <?php
      //id값을 출력한다.
      print($_GET['id']);
      //password 값을 출력한다.
      $password = $_GET['password'];
      if($password == '111111') {
         print('하이요 좋은 아침');
      } else {
         print('누구수에요');
      }

     ?>

  </body>
</html>
