<?php include $_SERVER["DOCUMENT_ROOT"] . "/common/page/head.php";

$pageName					=	"비밀번호 확인";

?>


<div class="container">
	<?php include $_SERVER["DOCUMENT_ROOT"] . "/common/page/header.php" ?>

	<div class="contents">
		<section class="find">
			<div class="inner">
				<div class="inputInfo f_main mb10">
					* 정보를 안전하게 보호하기 위해<br/>
					비밀번호를 다시 한번 입력해주세요.
				</div>
				<div class="inputBox full">
					<input type="password" placeholder="비밀번호" name="pw">
				</div>
			</div>
			<div class="btnGroup">
				<a href="/mypage/myInfo/myInfo.php" class="btn full col_main f_w bold big">확인</a>
			</div>
		</section>
	</div>
</div>
<?php include $_SERVER["DOCUMENT_ROOT"] . "/common/page/footer.php" ?>
