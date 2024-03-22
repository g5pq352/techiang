<?php
require_once 'Connections/connect2data.php';

$row = $DB->row("SELECT * FROM data_set, file_set, class_set WHERE d_id=? AND d_class2=c_id AND d_id=file_d_id AND file_type='newsCover'", [$_GET['id']]);

$image = $DB->query("SELECT * FROM file_set WHERE file_d_id=? AND file_type='image' ORDER BY file_sort ASC", [$row['d_id']]);

$url = (isset($_SERVER['HTTPS']) ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

$cat = $DB->query("SELECT * FROM class_set WHERE c_parent='newsC' AND c_active=1 ORDER BY c_sort ASC");

$ryder_cat = $row['d_class2'];
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
		<div class="title">news</div>
		<div class="content-area">
			<div class="ch">最新消息</div>
			<div class="en">活動\新品推出\合作新夥伴</div>
		</div>
	</div>

	<div class="newsWrap">
		<ul class="catList grid-x">

			<li class="<?php if(isset($ryder_cat) && $ryder_cat == '0') : ?>current<?php endif ?>"><a href="news.php">
					<span class="en">ALL</span>
					<span class="ch">全部</span>
				</a></li>
			<?php foreach($cat as $newsC) : ?>
				<li class="<?php if(isset($ryder_cat) && $ryder_cat == $newsC['c_id']) : ?>current<?php endif ?>"><a href="news.php?c=<?=$newsC['c_id'] ?>" data-sub="1">
					<span class="en"><?=$newsC['c_title_en']?></span>
					<span class="ch"><?=$newsC['c_title']?></span>
				</a></li>
			<?php endforeach ?>

			<!-- <li><a href="news.php" data-sub="1">
				<span class="en">event</span>
				<span class="ch">活動</span>
			</a></li> -->
			<!-- <li><a href="news.php" data-sub="2">
				<span class="en">csr</span>
				<span class="ch">最新</span>
			</a></li> -->
			<!-- <li class="sub"><a href="recipe.php" data-sub="3">
					<span class="en">recipe</span>
					<span class="ch">食譜</span>
				</a>
				<nav class="catSub flex-container" data-sub="3">
					<a href="recipe.php"><div>主菜</div></a>
					<a href="recipe.php"><div>湯品</div></a>
					<a href="recipe.php"><div>甜點</div></a>
				</nav>
			</li> -->
		</ul>

		<div class="line-lr"></div>

		<article class="newsDetailWrap">

			<div class="title-container">
				<div class="title"><?=nl2br($row['d_title'])?></div>

				<div class="year-area">
					<div class="year"><?= date("Y. m. d", strtotime($row['d_date'])) ?></div>
					<!-- <div class="writer">工商時報 /曾麗芳 報導</div> -->
				</div>
			</div>

			<div class="content">

				<?=$row['d_content']?>

				<br>

				<!-- <iframe class="show-for-large" width="100%" height="600" src="https://www.youtube.com/embed/5U2Sc_9B3LY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

				<iframe class="hide-for-large" width="100%" height="300" src="https://www.youtube.com/embed/5U2Sc_9B3LY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
			</div>

			<div class="ryder-nd-slider-wrap">
				<ul class="ryder-nd-slider-list">

					<?php foreach($image as $row) : ?>
						<li><img src="<?=$row['file_link1']?>"></li>
					<?php endforeach ?>

					<!-- <li><img src="images/newsd-1.jpg"></li>
					<li><img src="images/newsd-2.jpg"></li>
					<li><img src="images/newsd-3.jpg"></li>
					<li><img src="images/newsd-4.jpg"></li>
					<li><img src="images/newsd-5.jpg"></li> -->
				</ul>
			</div>

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