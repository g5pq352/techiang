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
			<div class="pic"><img src="images/recipe-6.jpg"></div>

			<div class="head-area">
				<div class="title">
					<span>Orecchiette al Ragu</span>
				</div>

				<div class="item"><span>起士肉醬貓耳朵</span></div>
			</div>

			<article class="content-area grid-x align-justify large-up-2">
				<div class="title-area">
					<div class="en">material</div>
					<div class="line-lr hide-for-large"></div>
					<div class="ch">材 料</div>
					<div class="line-lr show-for-large"></div>
				</div>

				<ul class="cell shrink">
					<li>1.貓耳朵義大利麵（Orecchiette）或各式義大利麵</li>
					<li>2.煙花女義大利麵醬或其他義大利番茄麵醬: 1罐</li>
					<li>3.豬(牛) 絞肉 : 300公克</li>
					<li>4.洋蔥末: 1/4顆</li>
					<li>5.帕瑪森起司(Parmesan): 適量</li>
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
					01.熱鍋倒入些許橄欖油，放入切碎洋蔥炒香。<br>
					02.加入絞肉以中小火慢慢把絞肉炒散。<br>
					03.倒入蕃茄紅醬罐頭，可適當加入些許水以中小火稍微燉煮收汁。<br>
					04.主廚小秘訣（可以放入一點點帕瑪森起司粉或披薩乳絲增加稠度與濃郁感）<br>
					05.煮完肉醬盛裝起來，可以準備一週份量放冷藏或分量冷凍保存。<br>
					06.準備一鍋滾水加入鹽。每100公克麵需要1公升水每公升水需7公克鹽。<br>
					07.加入適當麵，依照外包裝上面建議時間烹煮。<br>
					08.最後貓耳朵與肉醬在平底鍋中，以大火快速稍微收汁即可呈盤完成！<br>
					09.主廚小秘訣（最後成盤後一定一定要刨上滿滿帕瑪森起司，才會濃郁好吃)<br>
					<br>
					防疫在居家料理簡單做<br>
					疫情期間在家都悶壞了～想外出吃的義大利麵也很難。今天教大家快速又方便的貓耳朵義大利麵！！<br>
					義大利貓耳朵義大利語(Orecchiette)意語小耳朵意思，吃起來類似麵疙瘩小巧Q彈。<br>
					.義大利麵是用杜蘭沙粒粉所製成，低GI食物、富含鐵質，葉酸和菸鹼酸、低鈉、低膽固醇食品
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