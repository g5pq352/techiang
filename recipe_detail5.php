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
		<div class="title">recipe</div>
		<div class="content-area">
			<div class="ch">德匠食光</div>
			<div class="en">meet your better life</div>
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

		<div class="recipeDetail-deco">
			<div class="dede-1 show-for-large"><img src="images/recipe-deco-1.png"></div>
			<div class="dede-2 show-for-large"><img src="images/recipe-deco-2.png"></div>
			<div class="dede-3 show-for-large"><img src="images/recipe-deco-3.png"></div>
			<div class="dede-4 show-for-large"><img src="images/recipe-deco-4.png"></div>
			<div class="dede-5 show-for-large"><img src="images/recipe-yaya.png"></div>

			<div class="recipe-deco-1 show-for-large"><img src="images/recipe-deco-1.svg"></div>
			<div class="recipe-deco-2 show-for-large"><img src="images/recipe-deco-2.svg"></div>
		</div>

		<div class="recipeDetailWrap">
			<div class="pic"><img src="images/recipe-5.jpg"></div>

			<div class="head-area">
				<div class="title">
					<span>Filet Mignon</span>
				</div>

				<div class="item"><span>香煎菲力牛排</span></div>
			</div>

			<article class="content-area grid-x align-justify large-up-2">
				<div class="title-area">
					<div class="en">material</div>
					<div class="line-lr hide-for-large"></div>
					<div class="ch">材 料</div>
					<div class="line-lr show-for-large"></div>
				</div>

				<ul class="cell shrink">
					<li>1.牛排1塊約3公分厚度</li>
					<li>2.鹽/黑白胡椒/橄欖油適量</li>
					<li>3.迷迭香/百里香/奶油適量</li>
				</ul>

				<div class="line-lr"></div>
			</article>

			<article class="content-area">
				<div class="title-area">
					<div class="en who">who to do</div>
					<div class="ch">作 法</div>
					<div class="line-lr"></div>
				</div>

				<div class="dash">-</div>

				<div class="content">
					01.牛肉去除筋膜。撒上鹽巴、黑白胡椒調味。<br>
					02.真空袋放入橄欖油。<br>
					03.放入調味的牛肉、迷迭香、百里香、真空包裝好。<br>
					04.低溫烹調52度，2個小時。<br>
					05.熱一個煎鍋，放入適量的橄欖油放入已低溫完成，並擦乾表面的牛肉，兩面煎約2分鐘，完成前放入些許奶油稍微覆蓋在肉的表面，增加牛排的香氣。<br>
					06.溫熱盛裝牛排的盤子，擺上煎好的牛肉，放上喜歡的蔬菜，即完成。
				</div>
			</article>

			<div class="back"><a href="recipe.php"><img src="images/back.svg" width="150"></a></div>
		</div>
	
		<div class="recipe-top show-for-large">
			<div class="line-top"></div>
			<div class="pic backtotop"><img src="images/recipe-top.svg"></div>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>

<?php include 'script.php'; ?>

</html>

<script>

	if(device == 'mobile') {
		$(".catSub").fadeIn(500)
	} else {
		$(".catList li").hover(function() {

			if($(this).hasClass("sub")) {
				$(".catSub").fadeIn(500)
			} else {
				$(".catSub").fadeOut(500)
			}
			
		})	
	}
	
	$(".catSub a").hover(function() {
		$(this).addClass("is-hover").siblings().removeClass("is-hover")
	})
</script>