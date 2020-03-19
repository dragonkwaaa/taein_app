<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/head.php";

$pageName					=	"결제내역 상세정보";

?>


<div class="container">
	<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/header.php" ?>

	<div class="contents">

		<section class="unPayment">
			<div class="inner">
				<div class="infoGroup">
					<div class="infoTit">
						<div class="row">
							<div class="subject">전기스쿠터 충전</div>
							<div class="con">2019.03.04(월) 14:30</div>
						</div>
					</div>
					<div class="infoCon">
						<div class="row">
							<div class="subject">위치</div>
							<div class="con">마포역</div>
						</div>
						<div class="row">
							<div class="subject">미결제금액</div>
							<div class="con">5,000 원</div>
						</div>
						<div class="row">
							<div class="subject"></div>
							<div class="con sub">신한카드 1111-****-****-**** (일시불)</div>
						</div>
					</div>

				</div>
			</div>
			<div class="btnGroup half">
				<a href="#none" class="btn half f_main bold big">삭제</a>
				<a href="#none" class="btn half col_main f_w bold big">확인</a>
			</div>
		</section>
	</div>

</div>
<script>
</script>
<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/footer.php" ?>
