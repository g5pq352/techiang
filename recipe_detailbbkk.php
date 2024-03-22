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
			<div class="ch">德匠私房</div>
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
				<nav class="catSub flex-container" data-sub="3">
					<a href="recipe.php"><div>主菜</div></a>
					<a href="recipe.php"><div>湯品</div></a>
					<a href="recipe.php"><div>甜點</div></a>
				</nav>
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
			<div class="pic"><img src="images/recipie-detail-1.jpg"></div>

			<div class="head-area">
				<div class="title">
					<span>Sesame Tapioca Bread</span>
				</div>

				<div class="item"><span>韓國麵包</span></div>
			</div>

			<article class="content-area grid-x align-justify large-up-2">
				<div class="title-area">
					<div class="en">material</div>
					<div class="line-lr hide-for-large"></div>
					<div class="ch">材 料</div>
					<div class="line-lr show-for-large"></div>
				</div>

				<ul class="cell shrink">
					<li>1.無鹽奶油或植物油60g</li>
					<li>2.雞蛋2顆(約100g)</li>
					<li>3.醬油10cc 4.奶粉10g</li>
					<li>4.牛奶125g</li>
					<li>5.韓國麵包預拌粉360g</li>
					<li>6.黑芝麻15g</li>
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
					01.將奶油融化與雞蛋稍微攪打融合放入鋼盆。 <br>
					02.將麵包預拌粉、醬油、牛奶倒入攪拌缸中。 <br>
					03.一開始先用慢速將所有材料攪拌成無粉粒團狀。 <br>
					04.再使用中速攪打4-5分鐘成為一個均勻的麵團，再放入芝麻。 <br>
					05.工作檯上稍微塗抹一些油脂避免沾黏。 <br>
					06.手沾一點油將麵團從攪拌鋼取出略整成一個團狀。 <br>
					07.麵團平均分成17等份(每塊約40g)。 <br>
					08.手上沾些油脂，分好的小麵團滾圓。 <br>
					09.間隔放入烤盤中。 <br>
					10.預熱烤箱170度。 <br>
					11.已預熱好的烤箱，打開灑水。 <br>
					12.麵糰放進已經預熱好的烤箱中烘烤10分鐘。 <br>
					13.打開烤箱再次灑水，掉頭然後關上烤箱再烘烤25分鐘即可出爐。
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
	
</script>