<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/head.php";
$pageName					=	"회원결제";
// $orderCode					=	$SubFunction->allTags($_GET['no']);
// if(!$orderCode){
// 	$CommonManager->goPage('/pay/qrscan', '잘못된 접근입니다.');
// 	exit;
// }

$backUrl					=	'/pay/qrscan';


?>
<div class="container">
	<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/header.php" ?>
	<div class="contents">
		<section class="unPayment">
			<div class="inner">
				<div class="infoGroup">
					<div class="infoTit">
						<div class="row">
							<div class="subject">전기 오토바이 배터리 교환</div>
							<div class="con" id="date">2020.01.01(금) 14:00</div>
						</div>
					</div>
					<div class="infoCon">
						<div class="row">
							<div class="subject">위치</div>
							<div class="con">서울 강서구 가로공원로 173 가로공원로 입구</div>
						</div>
						<div class="row">
							<div class="subject">결제금액</div>
							<div class="con">1,500 원</div>
						</div>
						<div class="row">
							<div class="subject">결제수단</div>
							<div class="con">모바일결제</div>
						</div>
						<div class="row">
							<div class="subject">보유포인트</div>
							<div class="con">0P</div>
						</div>
					</div>
					<div class="infoGuide">
						상기 내용으로 결제를 진행하시겠습니까?
					</div>
				</div>
			</div>
			<div class="btnGroup half">
				<a href="javascript:void(0)" class="btn half f_main bold big">취소</a>
				<a href="/pay/payFinish" class="btn half col_main f_w bold big">결제하기</a>
			</div>
		</section>
	</div>
</div>





<!-- :: 퍼블리싱 안내문 (제거 필요) -->
<div class="publishingTipBox">
	<div>클릭하시오</div>
	<div class="info">1. "결제수단" 항목 추가함.</div>
	<div class="info">2. 버튼을 취소/결제하기 두개로 구분함.</div>
	<div class="info">3. 결제하기 버튼을 클릭 시, 결제 완료 페이지로 넘어가게 함.</div>
</div>





<!-- <input type="hidden" id="orderCode" value="<?=$orderCode?>"> -->
<!-- <script src="/pay/js/payInfo.js"></script> -->
<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/footer.php" ?>