<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/head.php";
$pageName					=	"포인트 관리";
$backUrl					=	'/mypage';
?>
<div class="container">
	<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/header.php" ?>
	<div class="contents">
		<section class="my">
			<div class="havePoint">
				<span class="txt">보유 포인트</span>
				<span class="point f_main" id="userPoint">0 P</span>
			</div>
			<ul class="menuList">
				<li>
					<a href="/mypage/point/pointPlus" class="icon pointPlus">
						<span class="menuTxt">포인트 충전</span>
					</a>
				</li>
				<li>
					<a href="/mypage/point/pointMinusMenu" class="icon pointMinus">
						<span class="menuTxt">포인트 환불</span>
					</a>
				</li>
				<li>
					<a href="/mypage/point/pointHistroyList" class="icon pointHistory">
						<span class="menuTxt">충전 및 사용 내역</span>
					</a>
				</li>
			</ul>
		</section>
	</div>
</div>
<script src="/mypage/point/js/index.js"></script>
<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/footer.php" ?>
