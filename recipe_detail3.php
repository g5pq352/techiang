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
			<div class="pic"><img src="images/recipe-3.jpg"></div>

			<div class="head-area">
				<div class="title">
					<span>Chocolate brownie</span>
				</div>

				<div class="item"><span>布朗尼蛋糕</span></div>
			</div>

			<article class="content-area grid-x align-justify large-up-2">
				<div class="title-area">
					<div class="en">material</div>
					<div class="line-lr hide-for-large"></div>
					<div class="ch">材 料</div>
					<div class="line-lr show-for-large"></div>
				</div>

				<ul class="cell shrink">
					<li>1.無鹽奶油210g</li>
					<li>2.全蛋200g</li>
					<li>3.紅糖80g</li>
					<li>4.上白糖85g</li>
					<li>5.鹽2g</li>
					<li>6.72%法芙娜巧克力130g</li>
					<li>7.可可粉20g</li>
					<li>8.低筋麵粉50g</li>
					<li>9.萊姆酒10g</li>
					<li>10.核桃80g</li>
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
					01.準備20*20烤膜*1個，並舖入烤紙<br>
					02.生核桃160度烘烤35分鐘備用<br>
					03.取一個鋼盆隔水加熱融化奶油與巧克力備用<br>
					04.另取一個料理盆將全蛋、糖、鹽一起打發<br>
					05.將融化的奶油巧克力倒入打發的蛋糊液中，加入萊姆酒，攪拌均勻<br>
					06.放入過篩的低筋麵粉拌勻<br>
					07.混合完成的麵糊放入烤膜中，並撒上核桃<br>
					(喜歡核桃在中間者，可將麵糊倒到一半的時候放入)<br>
					08.上下火160度25分鐘(喜歡稍微脆感的，可以將烤盤放在中上層)
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