<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/head.php";

$pageName					=	"포인트 충전내역";

?>


<div class="container">
	<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/header.php" ?>

	<div class="contents">

		<section class="unPayment">
			<div class="inner">
				<div class="infoGroup">
					<div class="infoTit">
						<div class="row">
							<div class="subject f_sky">충전</div>
							<div class="con">2019.03.04(월) 14:30</div>
						</div>
					</div>
					<div class="infoCon">
						<div class="row">
							<div class="subject">충전금액</div>
							<div class="con">10,000 원</div>
						</div>
						<div class="row">
							<div class="subject">결제수단</div>
							<div class="con">신용카드 결제</div>
						</div>
						<div class="row">
							<div class="subject"></div>
							<div class="con sub">신한카드 1111-****-****-**** (일시불)</div>
						</div>
						<div class="row">
							<div class="subject">충전 후 보유금액</div>
							<div class="con">10,000 원</div>
						</div>
					</div>

				</div>
			</div>
			<div class="btnGroup half">
				<a href="#none" class="btn half f_main bold big">삭제</a>
				<a href="javascript:history.back()" class="btn half col_main f_w bold big">확인</a>
			</div>
		</section>
	</div>

</div>
<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/footer.php" ?>
