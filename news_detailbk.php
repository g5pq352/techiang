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
				<div class="title">LEICHT Werk 2<br>歡迎來到LEICHT全新工廠</div>

				<div class="year-area">
					<div class="year">2021．07．16</div>
					<!-- <div class="writer">工商時報 /曾麗芳 報導</div> -->
				</div>
			</div>

			<div class="content">

				坐落於Gügling工業園區的新廠， 2019 年 9 月開始興建，並於2020 年 10 月啟動運營，目前約有90%的產品由新廠負責生產製造。預計今年9月，將完成所有的搬遷及整合工作，正式成為一座全面性運轉的新工廠。<br><br>

				新廠透過強大的數據模型及高度自動化產線，提升更大規模的產能，同時滿足多樣化的櫃體設計，以貼近來自世界各地的使用需求，LEICHT將提供更平穩、更高品質、更全面性的產品。在新廠的啟用下，使LEICHT維持業界領先的地位，更是重要的里程碑!<br><br>

				因疫情的緣故，大多數的人無法前來參觀，希望藉此影片讓大家能一睹這座結合科技與環保的新廠，期待不久的將來大家能親自來訪，感受前所未有的劃世代新廠。<br><br>

				<br>

				<iframe class="show-for-large" width="100%" height="600" src="https://www.youtube.com/embed/5U2Sc_9B3LY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

				<iframe class="hide-for-large" width="100%" height="300" src="https://www.youtube.com/embed/5U2Sc_9B3LY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>

			<div class="ryder-nd-slider-wrap">
				<ul class="ryder-nd-slider-list">
					<li><img src="images/newsd-1.jpg"></li>
					<li><img src="images/newsd-2.jpg"></li>
					<li><img src="images/newsd-3.jpg"></li>
					<li><img src="images/newsd-4.jpg"></li>
					<li><img src="images/newsd-5.jpg"></li>
				</ul>
			</div>

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