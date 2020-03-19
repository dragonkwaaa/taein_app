<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/head.php"; 


$pageName					=	"키오스크 위치찾기";


?>
<div class="container">
	<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/header.php"; ?>
	<div class="contents">
		<section class="areaSearch">
			<div class="inner">
				<div class="inputBox">
					<input type="text" placeholder="구나, 동으로 검색해주세요.">
					<a href="#none" class="btn">검색</a>
				</div>
			</div>
		</section>
		<section class="areaShow">
			<div class="map">
				<img src="/common/img/img_map_preview.png">
				<div class="locationBox">
					<div class="locationTitle">마포역 키오스크</div>
					<div class="locationInfo">
						<div class="locaStatus">
							<div>스쿠터 배터리 교환</div>
							<div class="possible">가능</div>
						</div>
						<div class="locaStatus">
							<div>전기차 충전</div>
							<div class="impossible">불가능</div>
						</div>
						<div class="locaStatus">
							<div>전기스쿠터 충전</div>
							<div class="possible">가능</div>
						</div>
					</div>
				</div>	
			</div>
			<div class="inner">
				<div class="mapInfo">
					서울시 마포구 어울마당로 144<br/>
					(지번) 서울시 마포구 서교동 331-18
				</div>
				<a href="#none" class="btn full big col_main f_w">확인</a>
			</div>
		</section>
	</div>

</div>
<?php include $_SERVER["DOCUMENT_ROOT"]."/common/page/footer.php"; ?>