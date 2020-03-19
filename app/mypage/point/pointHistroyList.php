<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/head.php";

$pageName					=	"포인트 충전 및 사용 내역";

?>


<div class="container">
	<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/header.php" ?>

	<div class="contents">

		<section class="my">

			<ul class="menuList">
				<li>
					<a href="/mypage/point/pointPlusInfo.php" class="plus">
						<span class="menuTxt">2019.03.04(월) 14:30</span>
					</a>
				</li>
				<li>
					<a href="/mypage/point/pointUseInfo.php" class="use">
						<span class="menuTxt">2019.03.04(월) 14:30</span>
					</a>
				</li>
				<li>
					<a href="/mypage/point/pointUseInfo.php" class="use">
						<span class="menuTxt">2019.03.04(월) 14:30</span>
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
