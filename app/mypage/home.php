<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/head.php";

$pageName					=	"마이페이지";

?>

<div class="container">
	<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/header.php" ?>

	<div class="contents">

		<section class="my">

			<ul class="menuList">
				<li>
					<a href="/mypage/unPayment/unPaymentList.php" class="icon unPayment">
						<span class="menuTxt">미결제 내역</span>
					</a>
				</li>
				<li>
					<a href="/mypage/point/pointMenu.php" class="icon pointSet">
						<span class="menuTxt">포인트 관리</span>
					</a>
				</li>
				<li>
					<a href="/mypage/leaseState/leaseStateList.php" class="icon leaseState">
						<span class="menuTxt">임대현황</span>
					</a>
				</li>
				<li>
					<a href="/mypage/payHistory/payHistoryList.php" class="icon payHistory">
						<span class="menuTxt">결제내역</span>
					</a>
				</li>
				<li>
					<a href="/mypage/myInfo/pwChk.php" class="icon profileSet">
						<span class="menuTxt">개인정보 수정</span>
					</a>
				</li>
			</ul>

		</section>
	</div>

</div>
<script>
	function findPop() {

		$('body').append("<div id='popup'></div>");
		$('#popup').load('/popup/idFindPop.php');
		popupShow();
	}
</script>
<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/footer.php" ?>
