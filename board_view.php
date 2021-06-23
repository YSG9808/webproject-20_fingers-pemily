<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>CAT BOARD</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/board.css">
</head>
<body> 
<header>
    <?php include "header.php";?>
</header>  
<section>
      <div id="board_box">
       <h3 class="title">
         CONTENT CONFIRM
      </h3>
<?php
   $num  = $_GET["num"];
   $page  = $_GET["page"];

   $con = mysqli_connect("localhost", "user1", "12345", "sample");
   $sql = "select * from board where num=$num";
   $result = mysqli_query($con, $sql);

   $row = mysqli_fetch_array($result);
   $id      = $row["id"];
   $name      = $row["name"];
   $regist_day = $row["regist_day"];
   $subject    = $row["subject"];
   $content    = $row["content"];
   $file_name    = $row["file_name"];
   $file_type    = $row["file_type"];
   $file_copied  = $row["file_copied"];
   $hit          = $row["hit"];

   $content = str_replace(" ", "&nbsp;", $content);
   $content = str_replace("\n", "<br>", $content);

   $new_hit = $hit + 1;
   $sql = "update board set hit=$new_hit where num=$num";   
   mysqli_query($con, $sql);
?>      
       <ul id="view_content">
         <li>
            <span class="col1"><b>TITLE :</b> <?=$subject?></span>
            <span class="col2"><?=$name?> | <?=$regist_day?></span>
         </li>
         <li>
            <?php
               if($file_name) {
                  $real_name = $file_copied;
                  $file_path = "./data/".$real_name;
                  $file_size = filesize($file_path);

                  echo "FILE : $file_name ($file_size Byte) &nbsp;&nbsp;&nbsp;&nbsp;
                      <a href='download.php?num=$num&real_name=$real_name&file_name=$file_name&file_type=$file_type'>[SAVE]</a><br><br>";
                       }
            ?>
            <?=$content?>
         </li>      
       </ul>
       <ul class="buttons">
            <li><button onclick="location.href='board_list.php?page=<?=$page?>'">LIST</button></li>
            <li><button onclick="location.href='board_modify_form.php?num=<?=$num?>&page=<?=$page?>'">MODIFY</button></li>
            <li><button onclick="location.href='board_delete.php?num=<?=$num?>&page=<?=$page?>'">DELETE</button></li>
            <li><button onclick="location.href='board_form.php'">WRITE</button></li>
      </ul>
   </div> <!-- board_box -->
</section> 
<footer>
    <?php include "footer.php";?>
</footer>
</body>
</html>