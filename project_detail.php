<?php
require_once 'Connections/connect2data.php';

$work = $DB->row("SELECT * FROM data_set, file_set WHERE d_class1='leicht' AND d_id=? AND d_id=file_d_id AND file_type='leichtCover'", [$_GET['id']]);

$CoverOne = $DB->row("SELECT * FROM data_set, file_set WHERE d_class1='leicht' AND d_id=? AND d_id=file_d_id AND file_type='leichtCoverOne'", [$_GET['id']]);
$CoverTwo = $DB->row("SELECT * FROM data_set, file_set WHERE d_class1='leicht' AND d_id=? AND d_id=file_d_id AND file_type='leichtCoverTwo'", [$_GET['id']]);
$CoverThree = $DB->row("SELECT * FROM data_set, file_set WHERE d_class1='leicht' AND d_id=? AND d_id=file_d_id AND file_type='leichtCoverThree'", [$_GET['id']]);

$image = $DB->query("SELECT * FROM data_set, file_set WHERE d_class1='leicht' AND d_id=? AND d_id=file_d_id AND file_type='image' ORDER BY file_sort ASC", [$_GET['id']]);
$image_total = count($image);

// $other = $DB->query("SELECT * FROM data_set, file_set WHERE d_class1='leicht' AND d_id=file_d_id AND file_type='leichtCover' AND d_active=1 ORDER BY rand() LIMIT 10");
$other = $DB->query("SELECT * FROM data_set, file_set WHERE d_class1='leicht' AND d_id=file_d_id AND file_type='leichtCover' AND d_active=1 ORDER BY d_sort ASC");

?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>

	<style>
	body {
		background: #0b0b0d;
	}
	</style>
</head>

<body>
	<?php include 'topmenu.php'; ?>

	<div class="projectWrap">
		<div class="project">
			
			<div class="head-area grid-x align-justify">
				<div class="en cell shrink">project</div>
				<div class="num cell shrink"><?=str_pad($work['d_sort'], 2, "0", STR_PAD_LEFT)?></div>
			</div>

			<article class="project-container grid-x">

				<div class="content-area cell large-auto large-order-1 small-order-2">
					<div class="title ch"><?=$work['d_title']?></div>
					<div class="content"><?=nl2br($work['d_data1'])?></div>
				</div>
				<div class="pic-area cell large-shrink large-order-2 small-order-1">
					<div class="pic"><img src="<?=$work['file_link1']?>"></div>
				</div>

			</article>

			<article class="project-container grid-x">

				<div class="content-area cell large-auto large-order-1 small-order-2">
					<div class="title en">feature 01</div>
					<div class="content"><?=nl2br($work['d_data2'])?></div>
				</div>
				<div class="pic-area cell large-shrink large-order-2 small-order-1">
					<div class="pic"><img src="<?=$CoverOne['file_link1']?>"></div>
				</div>
				
			</article>

			<article class="project-container bottom grid-x align-bottom">

				<div class="pic-area cell large-shrink">
					<!-- <div class="title show-for-large">feature</div> -->
					<div class="pic"><img src="<?=$CoverTwo['file_link1']?>"></div>
				</div>
				<div class="content-area cell large-auto">
					<div class="title en">feature 02</div>
					<div class="content"><?=nl2br($work['d_data3'])?></div>
				</div>
				
			</article>

			<article class="project-container grid-x">

				<div class="content-area cell large-auto large-order-1 small-order-2">
					<div class="title en">feature 03</div>
					<div class="content"><?=nl2br($work['d_data4'])?></div>
				</div>
				<div class="pic-area cell large-shrink large-order-2 small-order-1">
					<div class="pic"><img src="<?=$CoverThree['file_link1']?>"></div>
				</div>
				
			</article>

		</div>
	</div>

	<?php if($image_total > 0) : ?>

		<div class="pd-otherSlider">
			<ul class="text-center sssSlider">

				<?php foreach($image as $row) : ?>
					<li class="pic" style="background: url(<?=$row['file_link1']?>) center center / cover;"></li>
				<?php endforeach ?>

				<!-- <li class="pic" style="background: url(images/pd-1-4.jpg) center center / cover;"></li>
				<li class="pic" style="background: url(images/pd-1-4.jpg) center center / cover;"></li>
				<li class="pic" style="background: url(images/pd-1-4.jpg) center center / cover;"></li>
				<li class="pic" style="background: url(images/pd-1-4.jpg) center center / cover;"></li> -->
			</ul>

			<div class="bar-area">
				<div class="bar cell auto">
					<div class="progress"></div>
				</div>
			</div>

			<div class="fabric-fancy-prev"><img src="images/fabric-prev-w.svg" width="45"></div>
			<div class="fabric-fancy-next"><img src="images/fabric-next-w.svg" width="45"></div>
		</div>

	<?php endif ?>

	<section class="projectSliderWrap">
		<div class="head-area">
			<div class="ch">經典案例</div>
			<div class="en">project</div>
		</div>

		<ul class="projectSlider">

			<?php foreach($other as $row) : ?>
				<li data-link="project_detail.php?id=<?=$row['d_id']?>">
					<div class="pic" style="background: url('<?=$row['file_link1']?>') center center / cover;">
						<div class="block"></div>
					</div>
					<div class="item-area show-for-large">
						<div class="num"><?=str_pad($row['d_sort'], 2, "0", STR_PAD_LEFT)?></div>
						<div class="content-area">
							<div class="title"><?=$row['d_title']?></div>
							<div class="more">
								reading<br>
								more
							</div>
						</div>
					</div>
				</li>
			<?php endforeach ?>

			<!-- <li data-link="project_detail1.php">
				<div class="pic" style="background: url('images/brand-s-1.jpg') center center / cover;"></div>
				<div class="item-area show-for-large">
					<div class="num">01</div>
					<div class="content-area">
						<div class="title">台南沈宅</div>
						<div class="more">
							reading<br>
							more
						</div>
					</div>
				</div>
			</li>
			<li data-link="project_detail2.php">
				<div class="pic" style="background: url('images/brand-s-1.jpg') center center / cover;"></div>
				<div class="item-area show-for-large">
					<div class="num">02</div>
					<div class="content-area">
						<div class="title">台南_蘇小姐</div>
						<div class="more">
							reading<br>
							more
						</div>
					</div>
				</div>
			</li>
			<li data-link="project_detail1.php">
				<div class="pic" style="background: url('images/brand-s-1.jpg') center center / cover;"></div>
				<div class="item-area show-for-large">
					<div class="num">03</div>
					<div class="content-area">
						<div class="title">台南沈宅</div>
						<div class="more">
							reading<br>
							more
						</div>
					</div>
				</div>
			</li>
			<li data-link="project_detail2.php">
				<div class="pic" style="background: url('images/brand-s-1.jpg') center center / cover;"></div>
				<div class="item-area show-for-large">
					<div class="num">04</div>
					<div class="content-area">
						<div class="title">台南_蘇小姐</div>
						<div class="more">
							reading<br>
							more
						</div>
					</div>
				</div>
			</li> -->
		</ul>

		<div class="bar-area hide-for-large">
			<div class="bar cell auto">
				<div class="progress"></div>
			</div>
		</div>

		<div class="pbm hide-for-large">
			<ul class="projectSlider-mobile">

				<?php foreach($other as $row) : ?>
					<li>
						<div class="num"><?=str_pad($row['d_sort'], 2, "0", STR_PAD_LEFT)?></div>
						<div class="title"><?=$row['d_title']?></div>
					</li>
				<?php endforeach ?>

				<!-- <li>
					<div class="num">01</div>
					<div class="title">台南沈宅</div>
				</li>
				<li>
					<div class="num">02</div>
					<div class="title">台南_蘇小姐</div>
				</li>
				<li>
					<div class="num">03</div>
					<div class="title">台南沈宅</div>
				</li>
				<li>
					<div class="num">04</div>
					<div class="title">台南_蘇小姐</div>
				</li> -->
			</ul>

			<div class="pbm-next"><img src="images/pjs-next.svg"></div>
		</div>
	</section>

	<div class="project-back">
		<div class="backWrap" onclick="history.back()">
			<div class="bg"></div>
			<div class="back-area flex-container align-center-middle">
				<div class="pic"><img src="images/p-back.svg"></div>
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
			"pageDots": false,
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

			$(".pd-otherSlider .bar-area .progress").css({
				width: (index + 1) / cellElements_sss.length * 100 + "%"
			})

		});

		$(".pd-otherSlider .fabric-fancy-prev").on("click", function () {
			$sssSlider.flickity('previous');
		})

		$(".pd-otherSlider .fabric-fancy-next").on("click", function () {
			$sssSlider.flickity('next');
		})

		var dragging = false;
		var $pjSlider = $('.projectSlider').flickity({
			"prevNextButtons": false,
			"pageDots": false,
			"wrapAround": true,
			"autoPlay": false,
			"cellAlign": "center",
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

		var $pbmSlider = $('.projectSlider-mobile').flickity({
			"prevNextButtons": false,
			"pageDots": false,
			"wrapAround": true,
			"cellAlign": "left",
			"imagesLoaded": true,
			"fade": true,
			"lazyLoad": 3,
			"arrowShape": ""
		});



		var cellElements = $pjSlider.flickity('getCellElements');

		$pjSlider.on( 'change.flickity', function( event, index ) {

			$(".projectSliderWrap .bar-area .progress").css({
				width: (index + 1) / cellElements.length * 100 + "%"
			})

			$pbmSlider.flickity( 'select', index );

		});

		// ---------------------------------------------------------

		$pbmSlider.on( 'change.flickity', function( event, index ) {

			$(".projectSliderWrap .bar-area .progress").css({
				width: (index + 1) / cellElements.length * 100 + "%"
			})

			$pjSlider.flickity( 'select', index );

		});

		$(".projectSliderWrap .bar-area .progress").css({
			width: 1 / cellElements.length * 100 + "%"
		})

		$(".pbm-next").on("click", function () {
			$pjSlider.flickity('next');
		})






		$(".projectSlider li").on("mouseenter", function () {
			$(this).find(".item-area .content-area").slideDown(500)
			$(this).addClass("is-open").siblings().removeClass("is-open")
		}).on("mouseleave", function () {
			$(this).find(".item-area .content-area").slideUp(500).stop(true).slideUp(500)
			$(this).removeClass("is-open")
		})


	})
	
</script>