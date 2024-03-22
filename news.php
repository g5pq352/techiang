<?php
require_once 'Connections/connect2data.php';
require_once 'paginator.class.php';

$ryder_cat = (isset($_GET['c'])) ? $_GET['c'] : 0;

if ($ryder_cat == 0) {
	$sort = 'd_date DESC';
}else{
	$sort = 'd_sort ASC';
}

$cat = $DB->query("SELECT * FROM class_set WHERE c_parent='newsC' AND c_active=1 ORDER BY c_sort ASC");

//page start
$page = (isset($_GET['page'])) ? $_GET['page'] : 1;
$maxItem = 5;
$limit = ($page - 1) * $maxItem;

// 拿來計算全部有幾則
$workTotal = $DB->query("SELECT * FROM data_set, file_set, class_set WHERE d_class1='news' AND d_class2=c_id AND (d_class2=? || $ryder_cat=0) AND d_id=file_d_id AND file_type='newsCover' AND d_active=1 ORDER BY ".$sort, [$ryder_cat]);
$pageTotalCount = count($workTotal);
$totalpage = ceil($pageTotalCount / $maxItem);

//使用
$work = $DB->query("SELECT * FROM data_set, file_set, class_set WHERE d_class1='news' AND d_class2=c_id AND (d_class2=? || $ryder_cat=0) AND d_id=file_d_id AND file_type='newsCover' AND d_active=1 ORDER BY ".$sort." LIMIT ?, ?", [$ryder_cat, $limit, $maxItem]);

$pages = new Paginator;
$pages->items_total = $pageTotalCount;
$pages->items_per_page = $maxItem;
$pages->paginate();
//page end
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

		<ul class="newsList">

			<?php foreach($work as $row) : ?>
				<a href="news_detail.php?id=<?=$row['d_id']?>"><li class="grid-x align-middle">
					<div class="pic cell shrink"><img src="<?=$row['file_link1']?>"></div>
					<div class="content-area cell auto">
						<div class="date"><?= date("Y.m.d", strtotime($row['d_date'])) ?></div>
						<div class="title"><?=$row['d_title']?></div>
						<div class="read">reading more</div>
					</div>
					<div class="more show-for-large"><img src="images/more.svg"></div>
				</li></a>
			<?php endforeach ?>

			<!-- <a href="news_detail.php"><li class="grid-x align-middle">
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
			</li></a> -->
		</ul>



		<div class="new-pagerWrap flex-container align-center">
			<!-- <div class="nl-prev"><a href="javascript:;"><img src="images/ns-prev.svg"></a></div> -->

			<?php if($page != 1) {?>
				<div class="nl-prev"><a href="<?= $pages->prevpage(); ?>"><img src="images/ns-prev.svg"></a></div>
			<?php } ?>
			
			<div class="news-pager grid-x align-center-middle">
				<?php echo $pages->display_pages(); ?>
			</div>

			<?php if($page != $totalpage && $totalpage > 1) {?>
				<div class="nl-next"><a href="<?= $pages->nextpage(); ?>"><img src="images/ns-next.svg"></a></div>
			<?php } ?>

			<!-- <div class="news-pager grid-x align-center-middle">
				<a href="javascript:;" class="current cell shrink flex-container align-center-middle">1</a>
				<a href="javascript:;" class="cell shrink flex-container align-center-middle">2</a>
				<a href="javascript:;" class="cell shrink flex-container align-center-middle">3</a>
				<a href="javascript:;" class="cell shrink flex-container align-center-middle">4</a>
			</div> -->

			<!-- <div class="nl-next"><a href="javascript:;"><img src="images/ns-next.svg"></a></div> -->
		</div>

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