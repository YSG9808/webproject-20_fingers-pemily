<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>DOG BOARD</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/board.css">
<script>
  function check_input() {
      if (!document.board_dog_form.subject.value)
      {
          alert("제목을 작성하세요.");
          document.board_dog_form.subject.focus();
          return;
      }
      if (!document.board_dog_form.content.value)
      {
          alert("내용을 작성하세요.");    
          document.board_dog_form.content.focus();
          return;
      }
      document.board_dog_form.submit();
   }
</script>
</head>
<body> 
<header>
    <?php include "header.php";?>
</header>  
<section>
      <div id="board_dog_box">
       <h3 id="board_dog_title">
        Upload memories with your dog !
      </h3>
       <form  name="board_dog_form" method="post" action="board_dog_insert.php" enctype="multipart/form-data">
           <ul id="board_dog_form">
            <li>
               <span class="col1">NAME : </span>
               <span class="col2"><?=$username?></span>
            </li>      
             <li>
                <span class="col1">TITLE : </span>
                <span class="col2"><input name="subject" type="text"></span>
             </li>          
             <li id="text_area">   
                <span class="col1">CONTENT : </span>
                <span class="col2">
                   <textarea name="content"></textarea>
                </span>
             </li>
             <li>
                 <span class="col1">FILE UPLOAD : </span>
                 <span class="col2"><input type="file" name="upfile"></span>
             </li>
              </ul>
          <ul class="buttons">
            <li ><button type="button" onclick="check_input()">SAVE</button></li>
            <li><button type="button" onclick="location.href='board_dog_list.php'">LIST</button></li>
         </ul>
       </form>
   </div> <!-- board_box -->
</section> 
<footer>
    <?php include "footer.php";?>
</footer>
</body>
</html>