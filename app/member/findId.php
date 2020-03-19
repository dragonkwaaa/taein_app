<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/head.php";

$pageName					=	"아이디 찾기";

?>


<div class="container">
	<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/header.php" ?>

	<div class="contents">

		<section class="find">
			<div class="inner">
				<div class="inputBox">
					<input type="text" placeholder="구나, 동으로 검색해주세요.">
					<a href="#none" class="btn">인증받기</a>
				</div>
				<div class="inputBox">
					<input type="text" placeholder="인증번호">
					<a href="#none" class="btn">인증완료</a>
				</div>
			</div>
			<div class="btnGroup">
				<a href="javascript:findPop()" class="btn full col_main f_w bold big">아이디 찾기</a>
			</div>
		</section>
	</div>

</div>
<script>
	function findPop() {

		$('body').append("<div id='popup'></div>");
		$('#popup').load('/popup/idFindPop.php');
		popupShow();
	}
</script>
<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/footer.php" ?>
