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
			<div class="pic"><img src="images/recipe-4.jpg"></div>

			<div class="head-area">
				<div class="title">
					<span>Fried sweet potato ball</span>
				</div>

				<div class="item"><span>地瓜球</span></div>
			</div>

			<article class="content-area grid-x align-justify large-up-2">
				<div class="title-area">
					<div class="en">material</div>
					<div class="line-lr hide-for-large"></div>
					<div class="ch">材 料</div>
					<div class="line-lr show-for-large"></div>
				</div>

				<ul class="cell shrink">
					<li>1.地瓜500g</li>
					<li>2.地瓜粉200g(依實際情況增減)</li>
					<li>3.細砂糖50g</li>
					<li>4.葡萄籽油適量(耐熱的油脂)</li>
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
					01.將地瓜削皮後切成小塊(越小越快熟)。<br>
					02.地瓜蒸軟以壓泥器或叉子壓碎。<br>
					03.趁熱加入細砂糖。<br>
					04.加入地瓜粉混合拌勻，並搓成團。(太乾就加一點水,太軟就在加一點粉)<br>
					05.成團後搓成長條狀，切割成一小份，接著搓成圓球備用。<br>
					06.起鍋燒油，將油加熱（經測試放入小塊地瓜球團，小氣泡緩緩冒出），地瓜球麵團下鍋。<br>
					07.剛下鍋後輕輕撥動地瓜球，避免沾黏在一起。<br>
					08.待表面定型稍微變硬，即可以孔杓輕壓。（以一顆測試，免整鍋成為地瓜餅）若成功會經壓後稍扁，接著隨即又脹大起來。<br>
					09.持續按壓、撥動接著會逐漸脹大，一樣需要不斷撥動地瓜球。<br>
					10.最後開大火逼出油脂炸至淡黃色即可，即可起鍋。
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