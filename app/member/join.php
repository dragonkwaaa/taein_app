<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/head.php";

$pageName					=	"회원가입";

?>


<div class="container">
	<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/header.php" ?>

	<div class="contents">

		<section class="find btnType">
			<div class="inner">
				<div class="inputBox full">
					<input type="text" name="" value="홍길동" placeholder="이름">
				</div>
				<div class="inputBox">
					<input type="text" placeholder="아이디">
					<a href="javascript:idChkPop()" class="btn">중복확인</a>
				</div>
				<div class="inputBox full">
					<input type="password" placeholder="비밀번호" name="pw">
				</div>
				<div class="inputBox full">
					<input type="password" placeholder="새로운 비밀번호 재입력" name="pw">
				</div>
				<div class="inputBox">
					<input type="text" placeholder="" value="01084649696">
					<a href="#none" class="btn">재인증받기</a>
				</div>
				<div class="inputBox certify">
					<input type="text" placeholder="인증번호">
					<span class="certifyTime f_main">03:00</span>
					<a href="#none" class="btn">인증완료</a>
				</div>
				<div class="inputBox full">
					<input type="text" name="pw" value="abcdefg1234@naver.com">
				</div>
				<div class="agreeGroup">
					<div class="allChk">
						<label>
							<input type="checkbox">
							<span>약관 전체동의</span>
						</label>
					</div>
					<div class="agreeList">
						<div class="agreeItem">
							<label>
								<input type="checkbox">
								<span>이용약관 동의 (필수)</span>
							</label>
							<a href="/member/agree.php" class="agreeInfoBtn">
								<i class="ic ic_agree"></i>
							</a>
						</div>
						<div class="agreeItem">
							<label>
								<input type="checkbox">
								<span>개인정보 수집 및 이용동의 (필수)</span>
							</label>
							<a href="/member/agree.php" class="agreeInfoBtn">
								<i class="ic ic_agree"></i>
							</a>
						</div>
						<div class="agreeItem">
							<label>
								<input type="checkbox">
								<span>E-mail 및 SMS 광고성 정보 수신동의 (선택)</span>
							</label>
							<a href="/member/agree.php" class="agreeInfoBtn">
								<i class="ic ic_agree"></i>
							</a>
						</div>
					</div>

				</div>

			</div>
			<div class="btnGroup">
				<a href="/member/fin.php" class="btn full col_main f_w bold big">다음</a>
			</div>
		</section>
	</div>

</div>
<script>
	function idChkPop() {

		$('body').append("<div id='popup'></div>");
		$('#popup').load('/popup/idChkPop.php');
		popupShow();
	}
</script>
<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/footer.php" ?>
