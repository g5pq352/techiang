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
				<div class="title">Leicht 「居家辦公室」設計</div>

				<div class="year-area">
					<div class="year">2021．01．27</div>
					<!-- <div class="writer">工商時報 /曾麗芳 報導</div> -->
				</div>
			</div>

			<div class="content">
				| LEICHT X 德匠名廚 |<br>
				<br>
				疫情帶來了前所未有的影響,居家辦公模式將成為許多 人的新常態!<br>
				<br>
				Leicht 「居家辦公室」設計,利用「FIOS」層板結合金 屬結構的單元,打造舒適高效的居家辦公空間。<br>
				<br>
				Leicht 為簡約優雅的生活空間做出最完美的詮釋!<br>
				<br>

				<br>

				<img src="images/news-3-1.jpg">
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