<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>LOGIN</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<script type="text/javascript" src="./js/login.js"></script>
</head>
<body> 
	<header>
    	<?php include "header.php";?>
    </header>
	<section>
		<div class="main_content">
			<div id="login_box">
				<div id="login_title">
					<span>LOGIN</span>
				</div>
				<div class="input-box">
				<form name="login_form" method="post" action="login.php">
					<div class="input-box">
						<input type="text" name="id" placeholder="아이디">
						<label for="username">아이디</label>
					</div>

					<div class="input-box">
						<input type="password" id="pass" name="pass" placeholder="비밀번호">
						<label for="username">비밀번호</label>
					</div>
					<input id="login_btn" type="submit" value="로그인">
				</form>
				</div>
			</div>
		</div>

	</section> 
	<footer>
    	<?php include "footer.php";?>
    </footer>
</body>
</html>

