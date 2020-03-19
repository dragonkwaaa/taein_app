<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/head.php";

$pageName					=	"환불정보";
?>


<div class="container">
	<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/header.php" ?>

	<div class="contents">

		<section class="unPayment">
			<div class="inner">
				<div class="infoGroup">
					<div class="infoCon">
						<div class="row">
							<div class="subject">보유포인트</div>
							<div class="con">10,000 P</div>
						</div>
						<div class="row">
							<div class="subject">환불 수수료</div>
							<div class="con">500 원</div>
						</div>
						<div class="row">
							<div class="subject">환불요청 계좌</div>
							<div class="con">하나은행</div>
						</div>
						<div class="row">
							<div class="subject"></div>
							<div class="con sub">신한카드 1111-****-****-**** (일시불)</div>
						</div>
						<div class="row">
							<div class="subject">환불요청 금액</div>
							<div class="con">9,500 원</div>
						</div>
					</div>

				</div>
			</div>
			<div class="btnGroup half">
				<a href="/mypage/point/pointMinusMenu" class="btn half f_main bold big">취소</a>
				<a href="javascript:accountRefundPop()" class="btn half col_main f_w bold big">환불요청</a>
			</div>
		</section>
	</div>

</div>
<script>
	function accountRefundPop() {

		$('body').append("<div id='popup'></div>");
		$('#popup').load('/popup/accountRefundPop.php');
		popupShow();
	}
</script>
<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/footer.php" ?>
