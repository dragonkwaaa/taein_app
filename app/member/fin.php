<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/head.php";

$pageName					=	"회원가입";

?>



<div class="container">
	<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/header.php" ?>

	<div class="contents">

		<section class="find">
			<div class="inner">
				<div class="inputInfo f_main mb10">* 선택항목으로 기입하지 않으셔도 회원가입이 가능합니다.</div>
				<div class="inputBox full">
					<input type="text" name="pw" value="abcdefg1234@naver.com">
				</div>
				<div class="qrBox mt10">
					<a href="#none" class="qrBtn">QR코드 등록하기</a>

				</div>
			</div>
			<div class="btnGroup">
				<a href="/index.php" class="btn full col_main f_w bold big">회원가입 완료</a>
			</div>
		</section>
	</div>

</div>
<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/footer.php" ?>
