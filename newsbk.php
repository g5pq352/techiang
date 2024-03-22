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

		<ul class="newsList">
			<a href="news_detail.php"><li class="grid-x align-middle">
				<div class="pic cell shrink"><img src="images/news-1.jpg"></div>
				<div class="content-area cell auto">
					<div class="date">2021.07.16</div>
					<div class="title">歡迎來到LEICHT全新工廠</div>
					<div class="read">reading more</div>
				</div>
				<div class="more show-for-large"><img src="images/more.svg"></div>
			</li></a>
			<a href="news_detail1.php"><li class="grid-x align-middle">
				<div class="pic cell shrink"><img src="images/news-2.jpg" width="288"></div>
				<div class="content-area cell auto">
					<div class="date">2021.05.19</div>
					<div class="title">防疫升級公告及措施</div>
					<div class="read">reading more</div>
				</div>
				<div class="more show-for-large"><img src="images/more.svg"></div>
			</li></a>
			<a href="news_detail2.php"><li class="grid-x align-middle">
				<div class="pic cell shrink"><img src="images/news-4.jpg" width="288"></div>
				<div class="content-area cell auto">
					<div class="date">2021.04.28</div>
					<div class="title">水槽，廚房的心臟，必須完美</div>
					<div class="read">reading more</div>
				</div>
				<div class="more show-for-large"><img src="images/more.svg"></div>
			</li></a>
			<a href="news_detail3.php"><li class="grid-x align-middle">
				<div class="pic cell shrink"><img src="images/news-3.jpg" width="288"></div>
				<div class="content-area cell auto">
					<div class="date">2021.01.27</div>
					<div class="title">Leicht 「居家辦公室」設計</div>
					<div class="read">reading more</div>
				</div>
				<div class="more show-for-large"><img src="images/more.svg"></div>
			</li></a>
		</ul>

		<!-- <div class="new-pagerWrap flex-container align-center">
			<div class="nl-prev"><a href="javascript:;"><img src="images/ns-prev.svg"></a></div>

			<div class="news-pager grid-x align-center-middle">
				<a href="javascript:;" class="current cell shrink flex-container align-center-middle">1</a>
				<a href="javascript:;" class="cell shrink flex-container align-center-middle">2</a>
				<a href="javascript:;" class="cell shrink flex-container align-center-middle">3</a>
				<a href="javascript:;" class="cell shrink flex-container align-center-middle">4</a>
			</div>

			<div class="nl-next"><a href="javascript:;"><img src="images/ns-next.svg"></a></div>
		</div> -->

		<div class="news-top">
			<div class="line-top"></div>
			<div class="pic backtotop"><img src="images/news-top.svg"></div>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>

<?php include 'script.php'; ?>

</html>

<script>

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