<?php include $_SERVER["DOCUMENT_ROOT"] . "/common/page/head.php";

$pageName					=	"비밀번호 변경";
$backUrl					=	'/mypage';
?>


<div class="container">
	<?php include $_SERVER["DOCUMENT_ROOT"] . "/common/page/header.php" ?>
	<div class="contents">
		<section class="find">
			<div class="inner">
				<div class="inputInfo f_main mb10">
					* 정보를 안전하게 보호하기 위해<br/>
					비밀번호를 다시 한번 입력해주세요.
				</div>
				<div class="inputBox full">
					<input type="password" placeholder="비밀번호" name="pw">
				</div>
				<div class="inputBox full">
					<input type="password" placeholder="새로운 비밀번호 재입력" name="pw">
				</div>
				<div class="inputBox">
					<input type="text" placeholder="" value="01084649696">
					<a href="javascript:void(0)" class="btn">재인증받기</a>
				</div>
				<div class="inputBox certify">
					<input type="text" placeholder="인증번호">
					<span class="certifyTime f_main">03:00</span>
					<a href="javascript:void(0)" class="btn">인증완료</a>
				</div>
				<div class="inputBox full">
					<input type="text" name="pw" value="abcdefg1234@naver.com">
				</div>
				<div class="qrBox mt10">
					<a href="javascript:void(0)" class="qrBtn">QR코드 등록하기</a>
				</div>
			</div>
			<div class="btnGroup">
				<a href="javascript:finPop()" class="btn full col_main f_w bold big">수정</a>
			</div>
		</section>
	</div>
</div>
<script>
	function finPop() {

		$('body').append("<div id='popup'></div>");
		$('#popup').load('/popup/myInfoFinPop.php');
		popupShow();
	}
</script>
<?php include $_SERVER["DOCUMENT_ROOT"] . "/common/page/footer.php" ?>
