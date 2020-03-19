<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/head.php";

$pageName					=	"포인트 사용내역";

?>


<div class="container">
	<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/header.php" ?>

	<div class="contents">

		<section class="unPayment">
			<div class="inner">
				<div class="infoGroup">
					<div class="infoTit">
						<div class="row">
							<div class="subject f_red">사용</div>
							<div class="con">2019.03.04(월) 14:30</div>
						</div>
					</div>
					<div class="infoCon">
						<div class="row">
							<div class="subject">위치</div>
							<div class="con">마포역</div>
						</div>
						<div class="row">
							<div class="subject">결제수단</div>
							<div class="con">5,000</div>
						</div>
						<div class="row">
							<div class="subject">사용 후 보유금액</div>
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
