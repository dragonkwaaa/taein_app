<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/head.php";

$pageName					=	"비밀번호 재설정";

?>


<div class="container">
	<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/header.php" ?>

	<div class="contents">

		<section class="find">
			<div class="inner">
				<div class="inputBox full">
					<input type="password" placeholder="비밀번호" name="pw">
				</div>
				<div class="inputBox full">
					<input type="password" placeholder="비밀번호 재입력" name="pwR">
				</div>
				<div class="inputInfo f_main hide mt10">
					비밀번호가 일치하지 않습니다.
				</div>
			</div>
			<div class="btnGroup">
				<a href="javascript:findPop()" class="btn full col_main f_w bold big">확인</a>
			</div>
		</section>
	</div>

</div>
<script>
	function findPop() {

		if($('input[name=pw]').val() != $('input[name=pwR]').val()){
			$('.inputInfo').show();
			return
		}


		$('body').append("<div id='popup'></div>");
		$('#popup').load('/popup/pwSetPop.php');
		popupShow();
	}
</script>
<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/footer.php" ?>
