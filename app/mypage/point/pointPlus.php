<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/head.php";

$pageName					=	"포인트 충전";

?>


<div class="container">
	<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/header.php" ?>

	<div class="contents">

		<section class="my">
			<div class="havePoint">
				<span class="txt">보유 포인트</span>
				<span class="point f_main">15,000 P</span>
			</div>
			<div class="inner">
				<div class="inputBox full">
					<input type="text" placeholder="충전금액 (원)" name="pw">
				</div>
				<div class="inputInfo f_main mt10">
					* 포인트 충전의 최소 금액은 10,000원 입니다.<br/>
					* 포인트 충전은 카드결제로만 가능합니다.<br/>
					* 충전된 포인트로 키오스크에서 결제하실 수 있습니다.
				</div>
			</div>
			<div class="btnGroup half">
				<a href="#none" class="btn half f_main bold big">취소</a>
				<a href="#none" class="btn half col_main f_w bold big">충전하기</a>
			</div>
		</section>
	</div>

</div>
<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/footer.php" ?>
