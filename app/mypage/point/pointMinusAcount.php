<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/head.php";
$pageName					=	"계좌로 환불";

?>
<div class="container">
	<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/header.php" ?>
	<div class="contents">
		<section class="my find">
			<div class="havePoint">
				<span class="txt">보유 포인트</span>
				<span class="point f_main" id="userPoint"></span>
			</div>
			<div class="inner">
				<div class="sbox mb10">
					<select>
						<option value="">은행선택</option>
						<option>국민은행</option>
						<option>신한은행</option>
						<option>우체국</option>
						<option>KEB하나은행</option>
						<option>케이뱅크</option>
						<option>카카오뱅크</option>
					</select>
				</div>
				<div class="inputBox full">
					<input type="text" placeholder="계좌번호" name="pw">
				</div>
				<div class="inputBox full">
					<input type="text" class="onlyComma" placeholder="환불 요청 금액(원)" name="pw">
				</div>
				<div class="inputInfo f_main">
					* 본인명의의 계좌로만 환불이 가능합니다.<br/>
					* 계좌로 환불 시 500원의 수수료가 부과됩니다.
				</div>
			</div>
			<div class="btnGroup half">
				<a href="/mypage/point/pointMinusMenu" class="btn half f_main bold big">취소</a>
				<a href="/mypage/point/pointMinusAcountInfo" class="btn half col_main f_w bold big">환불요청</a>
			</div>
		</section>
	</div>
</div>
<script src="/mypage/point/js/pointMinusAccount.js"></script>
<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/footer.php" ?>
