<?php
require_once 'Connections/connect2data.php';

$work = $DB->row("SELECT * FROM data_set, file_set WHERE d_class1='cleanup' AND d_id=? AND d_id=file_d_id AND file_type='cleanupCover'", [$_GET['id']]);

$CoverOne = $DB->row("SELECT * FROM data_set, file_set WHERE d_class1='cleanup' AND d_id=? AND d_id=file_d_id AND file_type='cleanupCoverOne'", [$_GET['id']]);
$CoverTwo = $DB->row("SELECT * FROM data_set, file_set WHERE d_class1='cleanup' AND d_id=? AND d_id=file_d_id AND file_type='cleanupCoverTwo'", [$_GET['id']]);
$CoverThree = $DB->row("SELECT * FROM data_set, file_set WHERE d_class1='cleanup' AND d_id=? AND d_id=file_d_id AND file_type='cleanupCoverThree'", [$_GET['id']]);

$image = $DB->query("SELECT * FROM data_set, file_set WHERE d_class1='cleanup' AND d_id=? AND d_id=file_d_id AND file_type='image' ORDER BY file_sort ASC", [$_GET['id']]);
$image_total = count($image);

// $other = $DB->query("SELECT * FROM data_set, file_set WHERE d_class1='cleanup' AND d_id=file_d_id AND file_type='cleanupCover' AND d_active=1 ORDER BY rand() LIMIT 4");
$other = $DB->query("SELECT * FROM data_set, file_set WHERE d_class1='cleanup' AND d_id=file_d_id AND file_type='cleanupCover' AND d_active=1 ORDER BY d_sort ASC");
?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>

	<style>
	body {
		background: #f6f6f6;
	}
	</style>
</head>

<body>
	<?php include 'topmenu.php'; ?>

	<div class="cleanupWrap">

		<div class="cleanup">

			<div class="head-area grid-x align-middle align-justify">
				<div class="en cell shrink">project</div>
				<div class="ch cell shrink">經典案例</div>
			</div>

			<article class="clean-1 grid-x">
				<div class="pic-area cell large-shrink large-order-1 small-order-2">
					<div class="pic"><img src="<?=$work['file_link1']?>"></div>
					<div class="content-area">
						<div class="title">feature 01</div>
						<div class="content"><?=nl2br($work['d_data2'])?></div>
					</div>
				</div>
				<div class="intro-area cell large-auto large-order-2 small-order-1">
					<div class="title">
						<?=$work['d_title']?>
					</div>
					<!-- <div class="content">
						羅少均
					</div> -->
				</div>
			</article>

			<ul class="cleanList">
				<li>
					<div class="item-1">
						<div class="pic"><img src="<?=$CoverOne['file_link1']?>"></div>
						<div class="content-area">
							<div class="title">
								<div class="ch hide-for-large">特色五金</div>
								<div class="en">feature 02</div>
							</div>
							<div class="content"><?=nl2br($work['d_data3'])?></div>
						</div>
					</div>
				</li>
				<li>
					<div class="item-2">
						<div class="pic"><img src="<?=$CoverTwo['file_link1']?>"></div>
					</div>
				</li>
			</ul>

			<article class="clean-3">
				<div class="pic-area">
					<div class="pic"><img src="<?=$CoverThree['file_link1']?>"></div>
					<div class="content-area">
						<div class="title">feature 03</div>
						<div class="content"><?=nl2br($work['d_data4'])?></div>
					</div>
				</div>
			</article>
		</div>

	</div>

	<?php if($image_total > 0) : ?>

		<div class="pd-otherSlider cleanup">
			<ul class="text-center sssSlider">

				<?php foreach($image as $row) : ?>
					<li class="pic" style="background: url(<?=$row['file_link1']?>) center center / cover;"></li>
				<?php endforeach ?>
				
				<!-- <li class="pic" style="background: url(images/pd-1-4.jpg) center center / cover;"></li>
				<li class="pic" style="background: url(images/pd-1-4.jpg) center center / cover;"></li>
				<li class="pic" style="background: url(images/pd-1-4.jpg) center center / cover;"></li>
				<li class="pic" style="background: url(images/pd-1-4.jpg) center center / cover;"></li> -->
			</ul>

			<div class="fabric-fancy-prev show-for-large"><img src="images/bc-prev.svg" width="45"></div>
			<div class="fabric-fancy-next show-for-large"><img src="images/bc-next.svg" width="45"></div>
		</div>

	<?php endif ?>

	<div class="cleanup-section-4">

		<div class="Wrap">

			<div class="head-area grid-x align-middle align-justify">
				<div class="en cell large-shrink">project</div>
				<div class="ch cell large-shrink">經典案例</div>

				<div class="deco"><img src="images/cup-deco-7.png"></div>
			</div>

			<div class="item-area grid-x">
				<div class="content-area cell shrink show-for-large" style="opacity: 0;">
					<div class="content">重新檢視廚性全面升級,打造出無壓力的料理環境,置中設計。重新檢視廚性全面環境,置中設計。視廚性全面環境,置中設計。</div>
					<div class="deco"></div>
				</div>

				<div class="ryder-nd-slider-wrap cell large-auto">
					<ul class="ryder-nd-slider-list">

						<?php foreach($other as $row) : ?>
							<li data-link="cleanup_detail.php?id=<?=$row['d_id']?>">
								<div class="num-area">
									<div class="num"><?=str_pad($row['d_sort'], 2, "0", STR_PAD_LEFT)?></div>
									<div class="line"></div>
								</div>
								<div class="title-area">
									<div class="more"><span>＋</span> reading more</div>
									<div class="title"><?=$row['d_title']?></div>
								</div>
								<div class="pic" style="background: url('<?=$row['file_link1']?>') center center / cover"></div>
							</li>
						<?php endforeach ?>

						<!-- <li data-link="cleanup_detail1.php">
							<div class="num-area">
								<div class="num">01</div>
								<div class="line"></div>
							</div>
							<div class="title-area">
								<div class="more"><span>＋</span> reading more</div>
								<div class="title">阿罵ㄟ厝</div>
							</div>
							<div class="pic" style="background: url('images/bs-up-1.jpg') center center / cover;"></div>
						</li>
						<li data-link="cleanup_detail2.php">
							<div class="num-area">
								<div class="num">02</div>
								<div class="line"></div>
							</div>
							<div class="title-area">
								<div class="more"><span>＋</span> reading more</div>
								<div class="title">大寮張公館</div>
							</div>
							<div class="pic" style="background: url('images/bs-up-2.jpg') center center / cover;"></div>
						</li>
						<li data-link="cleanup_detail1.php">
							<div class="num-area">
								<div class="num">03</div>
								<div class="line"></div>
							</div>
							<div class="title-area">
								<div class="more"><span>＋</span> reading more</div>
								<div class="title">阿罵ㄟ厝</div>
							</div>
							<div class="pic" style="background: url('images/bs-up-1.jpg') center center / cover;"></div>
						</li>
						<li data-link="cleanup_detail2.php">
							<div class="num-area">
								<div class="num">04</div>
								<div class="line"></div>
							</div>
							<div class="title-area">
								<div class="more"><span>＋</span> reading more</div>
								<div class="title">大寮張公館</div>
							</div>
							<div class="pic" style="background: url('images/bs-up-2.jpg') center center / cover;"></div>
						</li> -->
					</ul>

					<div class="arrow flex-container hide-for-large">
						<div class="bc-prev"><img src="images/bc-prev.svg" width="45"></div>
						<div class="bc-next"><img src="images/bc-next.svg" width="45"></div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="project-back cleanup">
		<div class="backWrap" onclick="history.back()">
			<div class="bg"></div>
			<div class="back-area flex-container align-center-middle">
				<div class="pic"><img src="images/pp-back.svg"></div>
				<div class="text">back</div>
			</div>
		</div>
	</div>

	<?php include 'footer-black.php'; ?>
</body>

<?php include 'script.php'; ?>

</html>

<script>

	$(function () {

		var $sssSlider = $('.sssSlider').flickity({
			"prevNextButtons": false,
			"pageDots": true,
			"wrapAround": true,
			"autoPlay": false,
			"cellAlign": "center",
			"imagesLoaded": true,
			"lazyLoad": 3,
			"arrowShape": "",
			"selectedAttraction": 0.018
		})

		var cellElements_sss = $sssSlider.flickity('getCellElements');

		$sssSlider.on( 'change.flickity', function( event, index ) {

		});

		$(".pd-otherSlider .fabric-fancy-prev").on("click", function () {
			$sssSlider.flickity('previous');
		})

		$(".pd-otherSlider .fabric-fancy-next").on("click", function () {
			$sssSlider.flickity('next');
		})


		var dragging = false;
		var $rndlider = $('.ryder-nd-slider-list').flickity({
			"prevNextButtons": false,
			"pageDots": false,
			"wrapAround": true,
			"autoPlay": false,
			"cellAlign": "left",
			"imagesLoaded": true,
			"lazyLoad": 3,
			"arrowShape": ""
		}).on( 'dragStart.flickity', function( event, pointer ) {
			dragging = true
		}).on( 'dragEnd.flickity', function( event, pointer ) {
			gsap.delayedCall(0.2, function () {
				dragging = false
			});
		}).on( 'pointerUp.flickity', function( event, pointer ) {
			if (dragging) {
				return false
			}

			var _src = $(event.target).parents("li").data("link")

			if(_src == undefined) {
				
			} else {
				location.href = _src;
			}
		});

		$(".arrow .bc-prev").on("click", function () {
			$rndlider.flickity('previous');
		})

		$(".arrow .bc-next").on("click", function () {
			$rndlider.flickity('next');
		})
	
	})

	
</script>