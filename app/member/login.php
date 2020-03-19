<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/head.php" ?>


<div class="container loginContainer">
	<div class="contents">
		<section class="find btnType">
			<div class="inner">
				<div class="logoBox">
					<img src="/common/img/img_logo1.png">
				</div>
				<div class="inputBox">
					<input type="text" placeholder="아이디">
				</div>
				<div class="inputBox full">
					<input type="text" name="pw" placeholder="비밀번호" value="">
				</div>
				<div class="loginCheck">
					<label>
						<input type="checkbox">
						<span>자동 로그인</span>
					</label>
				</div>
			</div>
			<div class="btnGroup loginBox">
				<a href="/index.php" class="btn full col_main f_w bold big">LOGIN</a>
				<div class="subBtn">
					<a href="/member/join.php">회원가입</a>
					<div>｜</div>
					<a href="/member/findId.php">아이디 찾기</a>
					<div>｜</div>
					<a href="/member/findPw.php">비밀번호 찾기</a>
				</div>
			</div>
		</section>
	</div>
</div>
<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/footer.php" ?>