<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/head.php";
$pageName					=	"포인트 환불";
$backUrl					=	'/mypage/point';
?>
<div class="container">
	<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/header.php" ?>
	<div class="contents">
		<section class="my">
			<ul class="menuList">
				<li>
					<a href="/mypage/point/pointMinusCard" class="">
						<span class="menuTxt">카드 결제취소</span>
					</a>
				</li>
				<li>
					<a href="/mypage/point/pointMinusAcount" class="">
						<span class="menuTxt">계좌로 환불</span>
					</a>
				</li>
			</ul>
		</section>
	</div>
</div>
<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/footer.php" ?>
