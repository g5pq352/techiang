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
				<div class="title">水槽，廚房的心臟，必須完美</div>

				<div class="year-area">
					<div class="year">2021．04．28</div>
					<!-- <div class="writer">工商時報 /曾麗芳 報導</div> -->
				</div>
			</div>

			<div class="content">
				｜Cleanup x 德匠名廚｜<br>
				水槽，廚房的心臟，必須完美<br>
				有65%的廚房時間，離不開水槽的使用，怎麼能不精挑細選？<br>
				<br>
				cleanup 的『超進化·導流水槽』能完美符合您對水槽的需求！<br>
				<br>
				➤e-coat<br>
				表面施有親水性陶瓷特殊塗裝，讓水能滲入污垢下方使污垢浮起，難以清除的髒污也能輕鬆去除。<br>
				<br>
				➤特殊浮凸設計<br>
				減少餐具與水槽接觸面積，不易產生刮痕，即使有刮痕也較不明顯。<br>
				<br>
				➤導流槽設計<br>
				料理洗菜時或洗滌餐具時的水流，藉由『導流槽』的洩水坡度將殘渣匯集至排水口。<br>
				<br>
				➤最高品質-靜悄悄<br>
				導流水槽有「制震層」及「防護層」的設計，使用時僅產生40dB音量，相當於圖書館的寧靜。<br>
				<br>
				-<br>
				<br>
				導流水槽除不鏽鋼材質，另有多款色系日本原裝人造石材質的選擇喔！<br>
				如此完美的水槽，歡迎您親自參觀體驗<br>
				<br>

				<br><br>

				<img src="images/news-4-1.jpg"><br>
				<br>
				<img src="images/news-4-2.jpg">
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