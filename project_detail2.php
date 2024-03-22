<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>

	<style>
	body {
		background: #0b0b0d;
	}
	</style>
</head>

<body>
	<?php include 'topmenu.php'; ?>

	<div class="projectWrap">
		<div class="project">
			
			<div class="head-area grid-x align-justify">
				<div class="en cell shrink">project</div>
				<div class="num cell shrink">02</div>
			</div>

			<article class="project-container grid-x">

				<div class="content-area cell large-auto large-order-1 small-order-2">
					<div class="title ch">台南_蘇小姐</div>
					<div class="content">
						開放空間特別設計了兩座中島，分別為水火操作料理區，在多人同時使用時不影響動線。實木吧台增添了料理者對食物的溫度，凝聚了家人與朋友之間的情感。整體色系採用深色為基底搭配出業主期望的沉穩內斂質感。
					</div>
				</div>
				<div class="pic-area cell large-shrink large-order-2 small-order-1">
					<div class="pic"><img src="images/pd-2-1.jpg"></div>
				</div>

			</article>

			<article class="project-container grid-x">

				<div class="content-area cell large-auto large-order-1 small-order-2">
					<div class="title en">feature</div>
					<div class="content">
						LEICHT新款的橫向烤漆實木刀叉分類盤，整理上更一目了然，並且可隨餐具長度自由調整，讓收納能更有具變化性跟彈性。
					</div>
				</div>
				<div class="pic-area cell large-shrink large-order-2 small-order-1">
					<div class="pic"><img src="images/pd-2-2.jpg"></div>
				</div>
				
			</article>

			<article class="project-container bottom grid-x align-bottom">

				<div class="pic-area cell large-shrink">
					<div class="title show-for-large">feature</div>
					<div class="pic"><img src="images/pd-2-3.jpg"></div>
				</div>
				<div class="content-area cell large-auto">
					<div class="content">
						LEICHT專有的小家電平台高櫃，除了具有強大的收納功能以外，還附有原廠LED燈，能夠展示業主喜好的杯盤。
					</div>
				</div>
				
			</article>

			<article class="project-container grid-x">

				<div class="content-area cell large-auto large-order-1 small-order-2">
					<div class="title en">feature</div>
					<div class="content">
						業主希望廚房檯面上呈現簡約俐落感。
					</div>
				</div>
				<div class="pic-area cell large-shrink large-order-2 small-order-1">
					<div class="pic"><img src="images/pd-2-4.jpg"></div>
				</div>
				
			</article>

		</div>
	</div>

	<section class="projectSliderWrap">
		<div class="head-area">
			<div class="ch">經典案例</div>
			<div class="en">project</div>
		</div>

		<ul class="projectSlider">
			<li data-link="project_detail1.php">
				<div class="pic"><img src="images/brand-s-1.jpg"></div>
				<div class="item-area show-for-large">
					<div class="num">01</div>
					<div class="content-area">
						<div class="title">台南沈宅</div>
						<div class="more">
							reading<br>
							more
						</div>
					</div>
				</div>
			</li>
			<li data-link="project_detail2.php">
				<div class="pic"><img src="images/brand-s-2.jpg"></div>
				<div class="item-area show-for-large">
					<div class="num">02</div>
					<div class="content-area">
						<div class="title">台南_蘇小姐</div>
						<div class="more">
							reading<br>
							more
						</div>
					</div>
				</div>
			</li>
			<li data-link="project_detail1.php">
				<div class="pic"><img src="images/brand-s-1.jpg"></div>
				<div class="item-area show-for-large">
					<div class="num">03</div>
					<div class="content-area">
						<div class="title">台南沈宅</div>
						<div class="more">
							reading<br>
							more
						</div>
					</div>
				</div>
			</li>
			<li data-link="project_detail2.php">
				<div class="pic"><img src="images/brand-s-2.jpg"></div>
				<div class="item-area show-for-large">
					<div class="num">04</div>
					<div class="content-area">
						<div class="title">台南_蘇小姐</div>
						<div class="more">
							reading<br>
							more
						</div>
					</div>
				</div>
			</li>
		</ul>

		<div class="bar-area hide-for-large">
			<div class="bar cell auto">
				<div class="progress"></div>
			</div>
		</div>

		<div class="pbm hide-for-large">
			<ul class="projectSlider-mobile">
				<li>
					<div class="num">01</div>
					<div class="title">台南沈宅</div>
				</li>
				<li>
					<div class="num">02</div>
					<div class="title">台南_蘇小姐</div>
				</li>
				<li>
					<div class="num">03</div>
					<div class="title">台南沈宅</div>
				</li>
				<li>
					<div class="num">04</div>
					<div class="title">台南_蘇小姐</div>
				</li>
			</ul>

			<div class="pbm-next"><img src="images/pjs-next.svg"></div>
		</div>
	</section>

	<div class="project-back">
		<div class="backWrap" onclick="history.back()">
			<div class="bg"></div>
			<div class="back-area flex-container align-center-middle">
				<div class="pic"><img src="images/p-back.svg"></div>
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
		var $pjSlider = $('.projectSlider').flickity({
			"prevNextButtons": false,
			"pageDots": false,
			"wrapAround": true,
			"autoPlay": false,
			"cellAlign": "center",
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

		var $pbmSlider = $('.projectSlider-mobile').flickity({
			"prevNextButtons": false,
			"pageDots": false,
			"wrapAround": true,
			"cellAlign": "left",
			"imagesLoaded": true,
			"fade": true,
			"lazyLoad": 3,
			"arrowShape": ""
		});



		var cellElements = $pjSlider.flickity('getCellElements');

		$pjSlider.on( 'change.flickity', function( event, index ) {

			$(".bar-area .progress").css({
				width: (index + 1) / cellElements.length * 100 + "%"
			})

			$pbmSlider.flickity( 'select', index );

		});

		// ---------------------------------------------------------

		$pbmSlider.on( 'change.flickity', function( event, index ) {

			$(".bar-area .progress").css({
				width: (index + 1) / cellElements.length * 100 + "%"
			})

			$pjSlider.flickity( 'select', index );

		});

		$(".bar-area .progress").css({
			width: 1 / cellElements.length * 100 + "%"
		})

		$(".pbm-next").on("click", function () {
			$pjSlider.flickity('next');
		})






		$(".projectSlider li").on("mouseenter", function () {
			$(this).find(".item-area .content-area").slideDown(500)
			$(this).addClass("is-open").siblings().removeClass("is-open")
		}).on("mouseleave", function () {
			$(this).find(".item-area .content-area").slideUp(500).stop(true).slideUp(500)
			$(this).removeClass("is-open")
		})


	})
	
</script>