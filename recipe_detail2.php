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
			<div class="pic"><img src="images/recipe-2.jpg"></div>

			<div class="head-area">
				<div class="title">
					<span>Yaki-Soba</span>
				</div>

				<div class="item"><span>日式廣島海鮮炒麵</span></div>
			</div>

			<article class="content-area grid-x align-justify large-up-2">
				<div class="title-area">
					<div class="en">material</div>
					<div class="line-lr hide-for-large"></div>
					<div class="ch">材 料</div>
					<div class="line-lr show-for-large"></div>
				</div>

				<ul class="cell shrink">
					<li>1.油麵：200g</li>
					<li>2.高麗菜碎: 適量</li>
					<li>3.去殼蝦仁: 3隻</li>
					<li>4.干貝: 2顆</li>
					<li>5.鮭魚卵: 適量</li>
					<li>6.柴魚片: 適量</li>
				</ul>

				<div class="line-lr"></div>
			</article>

			<article class="content-area grid-x align-justify large-up-2">
				<div class="title-area">
					<div class="en">seasoning</div>
					<div class="line-lr hide-for-large"></div>
					<div class="ch">調 味 料</div>
					<div class="line-lr show-for-large"></div>
				</div>

				<ul class="cell shrink">
					<li>1.日本 OTAFUKU 多福炒麵醬：2大匙</li>
					<li>2.黑胡椒: 適量</li>
					<li>3.米酒: 適量</li>
					<li>4.水: 適量</li>
					<li>5.美乃滋: 適量</li>
					<li>6.哇薩米: 適量</li>
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
					01.＊熱平底鍋，到最熱狀態。干貝與蝦仁先用紙巾吸乾，表面撒上些許胡椒與鹽巴。放入少許橄欖油，置入干貝與蝦仁煎至熟，取出備用。<br>
					02.鍋中加入少許橄欖油，放入高麗菜炒軟，加入油麵、炒麵醬、米酒，快速翻炒。是狀況可以加點水調節濕度，即可起鍋，裝盤。<br>
					03.美乃滋與哇薩米 2:1方式調和均勻。完成麵，表面可撒上柴魚片，擠上哇薩米美乃滋，放上鮭魚卵擺上干貝蝦子，即可以完成。<br>
					<br>
					主廚小秘訣：<br>
					01.麵與醬部分可至好市多購買’’宮武讚岐燒炒麵’’即分裝好較方便。<br>
					02.干貝與蝦子一定要擦乾，不然煎過程中，表面不容易梅納反應。
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