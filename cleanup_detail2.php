<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>

	<style>
	body {
		background: #f6f6f6;
	}
	</style>
</head>

<body>
	<?php include 'topmenu.php'; ?>

	<div class="cleanupWrap">

		<div class="cleanup">

			<div class="head-area grid-x align-middle align-justify">
				<div class="en cell shrink">project</div>
				<div class="ch cell shrink">經典案例</div>
			</div>

			<article class="clean-1 grid-x">
				<div class="pic-area cell large-shrink large-order-1 small-order-2">
					<div class="pic"><img src="images/cd-2-1.jpg"></div>
					<div class="content-area">
						<div class="title">feature</div>
						<div class="content">
							全套廚具全長14米，採用日本CLEANUP STEDIA-04 的雞蛋白門片，檯面採用灰色系賽麗石搭配美國杜邦人造石。中島餐桌外側部分美國杜邦人造石懸空520公分，內側懸空約390公分，中島餐桌深度120公分。讓所有經過的朋友直呼這塊這個廚房太壯觀了。
						</div>
					</div>
				</div>
				<div class="intro-area cell large-auto large-order-2 small-order-1">
					<div class="title">
						大寮<br>
						張公館
					</div>
					<!-- <div class="content">
						王子元
					</div> -->
				</div>
			</article>

			<ul class="cleanList">
				<li>
					<div class="item-1">
						<div class="pic"><img src="images/cd-2-2.jpg"></div>
						<div class="content-area">
							<div class="title">
								<div class="ch hide-for-large">特色五金</div>
								<div class="en">feature</div>
							</div>
							<div class="content">
								從客廳往內看，左側木紋增加了色調的溫暖，右側雞蛋白的門片將整個空間拉長，但不讓室內的色調過於蒼白。
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="item-2">
						<div class="pic"><img src="images/cd-2-3.jpg"></div>
					</div>
				</li>
			</ul>

			<article class="clean-3">
				<div class="pic-area">
					<div class="pic"><img src="images/cd-2-4.jpg"></div>
					<div class="content-area">
						<div class="title">feature</div>
						<div class="content">
							角落L型為熱炒區，僅做一字型吊櫃，較不會有壓迫感，冰箱位置設置在廚房中間，不論使用熱炒區還是中島區域都會較為流暢。
						</div>
					</div>
				</div>
			</article>
		</div>

	</div>

	<div class="cleanup-section-4">

		<div class="Wrap">

			<div class="head-area grid-x align-middle align-justify">
				<div class="en cell large-shrink">project</div>
				<div class="ch cell large-shrink">經典案例</div>

				<div class="deco"><img src="images/cup-deco-7.png"></div>
			</div>

			<div class="item-area grid-x">
				<div class="content-area cell shrink show-for-large" style="opacity: 0;">
					<div class="content">重新檢視廚性全面升級,打造出無壓力的料理環境,置中設計。重新檢視廚性全面環境,置中設計。視廚性全面環境,置中設計。</div>
					<div class="deco"></div>
				</div>

				<div class="ryder-nd-slider-wrap cell large-auto">
					<ul class="ryder-nd-slider-list">
						<li data-link="cleanup_detail1.php">
							<div class="num-area">
								<div class="num">01</div>
								<div class="line"></div>
							</div>
							<div class="title-area">
								<div class="more"><span>＋</span> reading more</div>
								<div class="title">阿罵ㄟ厝</div>
							</div>
							<div class="pic"><img src="images/bs-up-1.jpg"></div>
						</li>
						<li data-link="cleanup_detail2.php">
							<div class="num-area">
								<div class="num">02</div>
								<div class="line"></div>
							</div>
							<div class="title-area">
								<div class="more"><span>＋</span> reading more</div>
								<div class="title">大寮張公館</div>
							</div>
							<div class="pic"><img src="images/bs-up-2.jpg"></div>
						</li>
						<li data-link="cleanup_detail1.php">
							<div class="num-area">
								<div class="num">03</div>
								<div class="line"></div>
							</div>
							<div class="title-area">
								<div class="more"><span>＋</span> reading more</div>
								<div class="title">阿罵ㄟ厝</div>
							</div>
							<div class="pic"><img src="images/bs-up-1.jpg"></div>
						</li>
						<li data-link="cleanup_detail2.php">
							<div class="num-area">
								<div class="num">04</div>
								<div class="line"></div>
							</div>
							<div class="title-area">
								<div class="more"><span>＋</span> reading more</div>
								<div class="title">大寮張公館</div>
							</div>
							<div class="pic"><img src="images/bs-up-2.jpg"></div>
						</li>
					</ul>

					<div class="arrow flex-container hide-for-large">
						<div class="bc-prev"><img src="images/bc-prev.svg" width="45"></div>
						<div class="bc-next"><img src="images/bc-next.svg" width="45"></div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="project-back cleanup">
		<div class="backWrap" onclick="history.back()">
			<div class="bg"></div>
			<div class="back-area flex-container align-center-middle">
				<div class="pic"><img src="images/pp-back.svg"></div>
				<div class="text">back</div>
			</div>
		</div>
	</div>

	<?php include 'footer-black.php'; ?>
</body>

<?php include 'script.php'; ?>

</html>

<script>

	$(function () {

		var dragging = false;
		var $rndlider = $('.ryder-nd-slider-list').flickity({
			"prevNextButtons": false,
			"pageDots": false,
			"wrapAround": true,
			"autoPlay": false,
			"cellAlign": "left",
			"imagesLoaded": true,
			"lazyLoad": 3,
			"arrowShape": ""
		}).on( 'dragStart.flickity', function( event, pointer ) {
			dragging = true
		}).on( 'dragEnd.flickity', function( event, pointer ) {
			gsap.delayedCall(0.2, function () {
				dragging = false
			});
		}).on( 'pointerUp.flickity', function( event, pointer ) {
			if (dragging) {
				return false
			}

			var _src = $(event.target).parents("li").data("link")

			if(_src == undefined) {
				
			} else {
				location.href = _src;
			}
		});

		$(".arrow .bc-prev").on("click", function () {
			$rndlider.flickity('previous');
		})

		$(".arrow .bc-next").on("click", function () {
			$rndlider.flickity('next');
		})
	
	})

	
</script>