<!DOCTYPE html>
<head>
<meta charset="utf-8">
<style>
h3 {
   padding-left: 5px;
   border-left: solid 5px #edbf07;
}
#close {
   margin:20px 0 0 80px;
   cursor:pointer;
}
#btn { 
    border: 1px solid black; 
    border-radius: 5px;
    background-color: black; 
    color: white; 
    padding: 10px; 
    font-weight: bold;
    position: absolute;
    bottom: 50px;
}
</style>
</head>
<body>
<h3>아이디 중복 확인</h3>
<p>
<?php
   $id = $_GET["id"];

   if(!$id) 
   {
      echo("<li>아이디를 입력해 주세요.</li>");
   }
   else
   {
      $con = mysqli_connect("localhost", "user1", "12345", "sample");
      $sql = "select * from members where id='$id'";
      $result = mysqli_query($con, $sql);

      $num_record = mysqli_num_rows($result);

      if ($num_record)
      {
         echo "<li>".$id." 아이디는 중복됩니다.</li>";
         echo "<li>다른 아이디를 사용해 주세요.</li>";
      }
      else
      {
         echo "<li>".$id." 아이디는 사용 가능합니다.</li>";
      }
    
      mysqli_close($con);
   }
?>
</p>
<div id="close">
   <button id="btn" onclick="javascript:self.close()">닫기</button>
</div>
</body>
</html>

