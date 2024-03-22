<?php
require_once 'Connections/connect2data.php';

$row = $DB->row("SELECT * FROM data_set, file_set, class_set WHERE d_id=? AND d_class2=c_id AND d_id=file_d_id AND file_type='recipeCover'", [$_GET['id']]);

$other = $DB->query("SELECT * FROM data_set, file_set, class_set WHERE d_class1='recipe' AND d_id!=? AND d_class2=c_id AND d_id=file_d_id AND file_type='recipeCover' AND d_active=1 ORDER BY rand() ASC", [$row['d_id']]);

$url = (isset($_SERVER['HTTPS']) ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

$cat = $DB->query("SELECT * FROM class_set WHERE c_parent='recipeC' AND c_active=1 ORDER BY c_sort ASC");
?>

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

			<?php foreach($cat as $c) : ?>
				<li class="<?php if($row['d_class2'] == $c['c_id']) : ?>current<?php endif ?>"><a href="recipe.php?c=<?=$c['c_id'] ?>" data-sub="1">
					<span class="en"><?=$c['c_title']?></span>
					<!-- <span class="ch"><?=$c['c_title']?></span> -->
				</a></li>
			<?php endforeach ?>

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
			<div class="pic"><img src="<?=$row['file_link1']?>"></div>

			<div class="head-area">
				<div class="title">
					<span><?=$row['d_title_en']?></span>
				</div>

				<div class="item"><span><?=$row['d_title']?></span></div>
			</div>

			<article class="content-area grid-x align-justify large-up-2">
				<div class="title-area">
					<div class="en">material</div>
					<div class="line-lr hide-for-large"></div>
					<div class="ch">材 料</div>
					<div class="line-lr show-for-large"></div>
				</div>

				<!-- <ul class="cell shrink">
					<li>1.奶油乳酪250g</li>
					<li>2.糖65g</li>
					<li>3.全蛋1顆</li>
					<li>4.蛋黃2顆</li>
					<li>5.鮮奶油100g</li>
					<li>6.玉米粉10g</li>
					<li>7.萊姆酒10g</li>
				</ul> -->

				<?=$row['d_data1']?>

				<div class="line-lr"></div>
			</article>

			<article class="content-area">
				<div class="title-area">
					<div class="en who">how to do</div>
					<div class="ch">作 法</div>
					<div class="line-lr"></div>
				</div>

				<div class="dash">-</div>

				<div class="content">
					<?=nl2br($row['d_data2'])?>
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
	
	$(".content-area ul").addClass("cell shrink")
</script>