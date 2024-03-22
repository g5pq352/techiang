<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>

	<style>
	body {
		background: #ffffff;
	}
	</style>
</head>

<body>
	<?php include 'topmenu.php'; ?>

	<div class="no2-head-area flex grid-x align-middle">
		<div class="title">news</div>
		<div class="content-area">
			<div class="ch">最新消息</div>
			<div class="en">活動\新品推出\合作新夥伴</div>
		</div>
	</div>

	<div class="newsWrap">
		<ul class="catList grid-x">
			<li><a href="news.php" data-sub="1">
				<span class="en">event</span>
				<span class="ch">活動</span>
			</a></li>
			<!-- <li><a href="news.php" data-sub="2">
				<span class="en">csr</span>
				<span class="ch">最新</span>
			</a></li> -->
			<li class="sub"><a href="recipe.php" data-sub="3">
					<span class="en">recipe</span>
					<span class="ch">食譜</span>
				</a>
				<!-- <nav class="catSub flex-container" data-sub="3">
					<a href="recipe.php"><div>主菜</div></a>
					<a href="recipe.php"><div>湯品</div></a>
					<a href="recipe.php"><div>甜點</div></a>
				</nav> -->
			</li>
		</ul>

		<div class="line-lr"></div>

		<article class="newsDetailWrap">

			<div class="title-container">
				<div class="title">防疫升級公告及措施</div>

				<div class="year-area">
					<div class="year">2021．05．19</div>
					<!-- <div class="writer">工商時報 /曾麗芳 報導</div> -->
				</div>
			</div>

			<div class="content">
				<a href="https://m.facebook.com/hashtag/%E9%98%B2%E7%96%AB%E5%8D%87%E7%B4%9A%E5%85%AC%E5%91%8A%E5%8F%8A%E6%8E%AA%E6%96%BD?__eep__=6&__cft__%5B0%5D=AZW69wanvizllP0vixBm-sFiCUYlOEZseBtqy_vppeqb-D3rP_boNF-WiNvy-ZLzS9mDTOvTTafkhaXRai-2RTCpInW8y0_e7OVRe3361kLxwi7DbwpipM8OaZvzOlX8sBBr4RODdPa8oNsbbu-I-IIPw1smameoIFtONxehgaRSYTZOHjCPRelRtj09DVXStkk&__tn__=%2ANK-R" target="_blank">#防疫升級公告及措施</a><br>
				本公司因應防疫升級,原營業時間下午6點至晚上8點 改採「預約制」。<br>
				<br>
				若有此時段參觀之需求,請於早上9點至下午6點時間 電洽門市或FB粉絲團私訊,將由專人為您預約。<br>
				<br>
				造成不便,敬請見諒。<br>
				團團結防疫,我們一起加油
				<br><br>
				<img src="images/news-2.jpg" alt="">
			</div>

			<!-- <div class="ryder-nd-slider-wrap">
				<ul class="ryder-nd-slider-list">
					<li><img src="images/newsd-1.jpg"></li>
					<li><img src="images/newsd-2.jpg"></li>
					<li><img src="images/newsd-3.jpg"></li>
					<li><img src="images/newsd-4.jpg"></li>
					<li><img src="images/newsd-5.jpg"></li>
				</ul>
			</div> -->

			<div class="back"><a href="news.php"><img src="images/back.svg" width="150"></a></div>
		</article>

		<div class="news-top show-for-large">
			<div class="line-top"></div>
			<div class="pic backtotop"><img src="images/news-top.svg"></div>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>

<?php include 'script.php'; ?>

</html>

<script>

	$('.ryder-nd-slider-list').slick({
		dots: false,
		infinite: true,
		speed: 500,
		arrows: false,
		focusOnSelect: false,
		swipeToSlide: true,
		touchThreshold: 10,
		variableWidth: true,
		easing: 'easeInOutCubic'
	});

	if(device == 'mobile') {
		// $(".catSub").fadeIn(500)
	} else {
		$(".catList li").hover(function() {

			if($(this).hasClass("sub")) {
				$(".catSub").fadeIn(500)
			} else {
				$(".catSub").fadeOut(500)
				$(".catSub a").removeClass("is-hover")
			}
			
		})
	}

	$(".catSub a").hover(function() {
		$(this).addClass("is-hover").siblings().removeClass("is-hover")
	})

</script>