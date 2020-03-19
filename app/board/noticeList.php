<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/head.php";

$pageName					=	"공지사항";

?>


<div class="container">
	<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/header.php" ?>

	<div class="contents">

		<section class="board">

			<ul class="menuList">
				<li>
					<a href="/board/noticeInfo.php" class="">
						<span class="menuTxt">공지사항1</span>
					</a>
				</li>
				<li>
					<a href="/board/noticeInfo.php" class="">
						<span class="menuTxt">공지사항1</span>
					</a>
				</li>
				<li>
					<a href="/board/noticeInfo.php" class="">
						<span class="menuTxt">공지사항1</span>
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
