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

		<!-- <div class="search">

			<form action="search.php" class="grid-x">

				<input type="text" name="search" placeholder="search">

				<div class="arrow"><img src="images/search-arrow.svg" alt=""></div>

			</form>

		</div> -->



		<ul class="catList grid-x">

			<li><a href="news.php" data-sub="1">

				<span class="en">event</span>

				<span class="ch">活動</span>

			</a></li>

			<!-- <li><a href="news.php" data-sub="2">

				<span class="en">csr</span>

				<span class="ch">最新</span>

			</a></li> -->

			<li class="sub">
				<a href="recipe.php" data-sub="3">

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



		<div class="recipe-deco">

			<div class="dede-1"><img src="images/recipe-deco-1.png"></div>

			<div class="dede-2"><img src="images/recipe-deco-2.png"></div>

			<div class="dede-3"><img src="images/recipe-deco-3.png"></div>

			<div class="dede-4"><img src="images/recipe-deco-4.png"></div>



			<div class="recipe-deco-1 show-for-large"><img src="images/recipe-deco-1.svg"></div>

			<div class="recipe-deco-2 show-for-large"><img src="images/recipe-deco-2.svg"></div>

		</div>



		<div class="recipe-slogan show-for-large">

			我們深信料理是一件幸福的事，分享食譜則是分享幸福給更多的人。你可以尋找喜愛的食譜，也可以驕傲分享自己的食譜

		</div>



		<ul class="recipeList grid-x large-up-2 small-up-1">

			<li class="cell ryder-fadeIn"><a href="recipe_detail1.php">

				<div class="pic"><img src="images/recipe-1.jpg"></div>

				<div class="date">2021.08.06</div>

				<div class="title">巴斯克乳酪蛋糕</div>

				<div class="read">

					<div class="more">read more</div>

					<div class="line-lr"></div>

				</div>

			</a></li>

			<li class="cell ryder-fadeIn"><a href="recipe_detail2.php">

				<div class="pic"><img src="images/recipe-2.jpg"></div>

				<div class="date">2021.08.04</div>

				<div class="title">日式廣島海鮮炒麵</div>

				<div class="read">

					<div class="more">read more</div>

					<div class="line-lr"></div>

				</div>

			</a></li>

			<li class="cell ryder-fadeIn"><a href="recipe_detail3.php">

				<div class="pic"><img src="images/recipe-3.jpg"></div>

				<div class="date">2021.08.02</div>

				<div class="title">布朗尼蛋糕</div>

				<div class="read">

					<div class="more">read more</div>

					<div class="line-lr"></div>

				</div>

			</a></li>

			<li class="cell ryder-fadeIn"><a href="recipe_detail4.php">

				<div class="pic"><img src="images/recipe-4.jpg"></div>

				<div class="date">2021.07.29</div>

				<div class="title">地瓜球</div>

				<div class="read">

					<div class="more">read more</div>

					<div class="line-lr"></div>

				</div>

			</a></li>

			<li class="cell ryder-fadeIn"><a href="recipe_detail5.php">

				<div class="pic"><img src="images/recipe-5.jpg"></div>

				<div class="date">2021.07.22</div>

				<div class="title">香煎菲力牛排</div>

				<div class="read">

					<div class="more">read more</div>

					<div class="line-lr"></div>

				</div>

			</a></li>

			<li class="cell ryder-fadeIn"><a href="recipe_detail6.php">

				<div class="pic"><img src="images/recipe-6.jpg"></div>

				<div class="date">2021.07.16</div>

				<div class="title">起士肉醬貓耳朵</div>

				<div class="read">

					<div class="more">read more</div>

					<div class="line-lr"></div>

				</div>

			</a></li>

		</ul>



		<!-- <div class="recipe-more text-center"><img src="images/recipe-more.svg"></div> -->



		<div class="recipe-top">

			<div class="line-top"></div>

			<div class="pic backtotop"><img src="images/recipe-top.svg"></div>

		</div>

	</div>



	<?php include 'footer.php'; ?>

</body>



<?php include 'script.php'; ?>



</html>



<script>





	$(".ryder-fadeIn").each(function (i, el) {



		if(device == 'mobile') {

			gsap.from(el, {

				scrollTrigger: {

					trigger: el,

					start: "top 80%",

					end: "bottom 50%",

					toggleActions: "play none play none",

				},

				duration: 2,

				opacity: 0,

				ease: Power2.easeOut,

			});

		} else {



			if (i % 2 == 0) {

				gsap.from(el, {

					scrollTrigger: {

						trigger: el,

						start: "top 80%",

						end: "bottom 50%",

						toggleActions: "play none play none",

					},

					duration: 2,

					opacity: 0,

					y: 60,

					ease: Power2.easeOut,

				});

			} else {



				gsap.set(el, {

					y: 180,

				})



				gsap.from(el, {

					scrollTrigger: {

						trigger: el,

						start: "top 80%",

						end: "bottom 50%",

						toggleActions: "play none play none",

					},

					duration: 2,

					opacity: 0,

					y: 240,

					ease: Power2.easeOut,

				});

			}



		}

		

	})



	

	if(device == 'mobile') {

		$(".catSub").fadeIn(500)

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



	$(".search .arrow").on("click", function() {

		$(".search form").submit()

	})

</script>