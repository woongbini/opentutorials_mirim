<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
   <h1>조건문의 활용 JavaScript</h1>
    <h2>JavaScript</h2>
       <script>
         var password = prompt('password?');
         //만약에 사용자가 입력한 값이 111111이라면,
         if(password == 111111) {
         //안녕하세요 주인님을 출력한다.
            document.write("하이 주인님 ");
         //만약아니라면, 누구냐 넌을 출력한다.
         } else {
            document.write("누구냐 넌");
         }
      </script>
  </body>
</html>
