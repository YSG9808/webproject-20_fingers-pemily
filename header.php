<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";
?>
<div id="top">
    <h3>
        <a href="index.php">PEMILY</a>
    </h3>
    <ul id="top_menu">
        <?php
    if(!$userid) {
?>
        <li>
            <a href="member_form.php">회원 가입</a>
        </li>
        <li>
            |
        </li>
        <li>
            <a href="login_form.php">로그인</a>
        </li>
    <?php
    } else {
                $logged = $username."(".$userid.")님";
?>
        <li><?=$logged?>
        </li>
        <li>
            |
        </li>
        <li>
            <a href="logout.php">로그아웃</a>
        </li>
        <li>
            |
        </li>
        <li>
            <a href="member_modify_form.php">정보 수정</a>
        </li>
        <?php
    }
?>
    </ul>
</div>

<div id="topMenu">
    <ul>

        <li class="topMenuLi">
            <a class="menuLink" href="">QUIZ</a>
            <ul class="submenu">
                <li>
                    <a href="quiz.php" class="submenuLink">고양이 퀴즈</a>
                </li>
                <li>
                    <a href="quiz_dog.php" class="submenuLink">강아지 퀴즈</a>
                </li>
            </ul>
        </li>
        <li class="topMenuLi">
            <a class="menuLink" href="weather.php">WEATHER</a>
        </li>
        <li class="topMenuLi">
            <a class="menuLink" href="">UPLOAD</a>
            <ul class="submenu">
                <li>
                    <a href="board_form.php" class="submenuLink">고양이 게시판</a>
                </li>
                <li>
                    <a href="board_dog_form.php" class="submenuLink">강아지 게시판</a>
                </li>
            </ul>
        </li>
    </ul>
</div>