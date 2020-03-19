<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/head.php"; ?>


<div class="container">
	<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/mainHeader.php"; ?>

	<div class="contents">
		<section class="mainVisual">
			<a href="#none" class="mainImg">
				<img src="/common/img/img_main1.png" alt="메인">
			</a>
		</section>
		<section class="mainBattery">
			<a href="#none" class="batteryGroup">
				<div class="batteryTxt">전기스쿠터<br/>배터리 잔량</div>
				<div class="batteryChart">50%</div>
			</a>
		</section>
		<section class="mainLocation">
			<a href="/location/location.php" class="mainImg">
				<img src="/common/img/img_mainLocation.png" alt="메인">
			</a>
		</section>
	</div>
	<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/footerInfo.php"; ?>

</div>
<script>
	//alarmPop('GPS');
</script>
<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/footer.php"; ?>
