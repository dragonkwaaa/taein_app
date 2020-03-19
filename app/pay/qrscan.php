<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/head.php"; 
$pageName					=	"키오스크 결제";


?>
<div class="container">
	<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/header.php"; ?>
	<div class="contents">
		<section class="areaSearch">
			<div class="inner">
				<ul class="menuList">
					<li>
						<input type=file accept="image/*" onclick="return showQRIntro();" class="hide" capture=environment onchange="openQRCamera(this);" id="upload" tabindex=-1>
						<input type="text" placeholder="스캔정보" id="searchWord" readonly>
						<a href="javascript:void(0)" onclick="click_upload();" class="typeSelector">
							<span class="menuTxt bold">qr스캔</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0)" class="typeSelector codeFill">
							<span class="menuTxt bold">주문코드 직접입력</span>
						</a>
					</li>
				</ul>
				<div class="codeInputBox">
					<input type="text" placeholder="주문코드" id="orderCode">
				</div>
			</div>
			<div class="btnGroup half codeAqquireBtn">
				<a href="javascript:void(0)" class="btn half f_main bold big">취소</a>
				<a href="javascript:void(0)" onclick="check_order();" class="btn half col_main f_w bold big">결제하기</a>
			</div>
		</section>
	</div>
</div>



<!-- :: 퍼블리싱 안내문 (제거 필요) -->
<div class="publishingTipBox">
	<div>클릭하시오</div>
	<div class="info">1. 디자인 변경함.</div>
	<div class="info">2. "주문코드 직접입력" 클릭 시, 입력창 및 버튼이 토글 되게 설정함.</div>
	<div class="info">3. 기존의 주문코드 확인 버튼에 있던 onclick은 "결제하기" 버튼으로 옮겨놓음.</div>
</div>




<script src="/common/js/qr_packed.js">
</script>

<script>
$(document).on('click', '.typeSelector.codeFill', function(){
	$(this).toggleClass('active');
	$('.codeInputBox').toggleClass('active');
	$('.codeAqquireBtn').toggleClass('active');
});
</script>

<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/footer.php"; ?>
<script type="text/javascript" src="/pay/js/qrscan.js"></script>