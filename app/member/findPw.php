<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/head.php";

$pageName					=	"비밀번호 찾기";

?>


<div class="container">
	<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/header.php" ?>

	<div class="contents">

		<section class="find">
			<div class="inner">
				<div class="inputBox full">
					<input type="text" placeholder="아이디">
				</div>
				<div class="inputBox">
					<input type="text" placeholder="휴대폰번호">
					<a href="#none" class="btn">인증받기</a>
				</div>
				<div class="inputBox">
					<input type="text" placeholder="인증번호">
					<a href="#none" class="btn">인증완료</a>
				</div>
			</div>
			<div class="btnGroup">
				<a href="/member/findPwSet.php" class="btn full col_main f_w bold big">비밀번호 재설정</a>
			</div>
		</section>
	</div>

</div>
<script>
</script>
<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/footer.php" ?>
