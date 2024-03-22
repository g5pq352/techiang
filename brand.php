<?php
require_once 'Connections/connect2data.php';

$leicht = $DB->query("SELECT * FROM data_set, file_set WHERE d_class1='leicht' AND d_id=file_d_id AND file_type='leichtCover' AND d_active=1 ORDER BY d_sort ASC");

$download = $DB->query("SELECT * FROM data_set WHERE d_class1='ldownload' AND d_active=1 ORDER BY d_sort ASC");
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

	<div class="brand-bannerWrap">
		<div class="head-area loader">
			<div class="slogan">
				<span>給追求卓越廚具美學的你</span><br>
				<span>我們挑選了,來自德國的精湛廚具。</span>
			</div>

			<div class="title">
				<span>modern style</span>
			</div>
		</div>

		<div class="bg">
			<img src="images/brand-leicht-bg.svg" class="show-for-large">
			<img src="images/brand-leicht-bg-m.svg" class="hide-for-large">
		</div>

		<!-- <div class="scroll-down scrolldown"><img src="images/brand-scroll.svg"></div> -->
	</div>

	<section class="brand-section-1">
		<div class="timeless">
			<div class="head-area loader">
				<div class="title">
					<span>timeless</span>
				</div>

				<div class="slogan">
					<span>不斷的永恆</span>
				</div>
			</div>
			<div class="pic-area">
				<!-- <img src="images/brand-1.jpg"> -->
			</div>
		</div>

		<div class="item-offset-1"><img src="images/brand-deco-1.svg"></div>

		<div class="introduction grid-x">
			<div class="content-area cell auto">
				<div class="head-area">
					<div class="slogan">
						<span>品牌簡介</span>
					</div>

					<div class="title">
						<span>introduction</span>
					</div>
				</div>

				<div class="content">
					<div class="line-rl"></div>

					LEICHT來自德國南部施瓦本地區，迄今已有93年的歷史，始終堅持德國製造並專注於創新。<br>
					<br>
					2020年投資超過2000萬歐元設立新的自動化工廠，採用最先進的機器與設備，並取得KLIMAPAKT減碳標章，產品所採用的樹種全部經過PEFC的認證。<br>
					<br>
					以廚房為出發點，延伸至生活空間的整體設計，LEICHT持續研發新的商品，並獲得多項德國 IF 及 紅點設計的肯定，且於2015~2017年連續三年獲得”年度最具創新品牌”的獎項，透過高品質的產品及具競爭力的價格，連續多年榮獲德國最暢銷的高檔廚具品牌。<br>
					<br>
					2021年，LEICHT著重功能與建築結構相互結合的意象，延續過去將建築元素融入廚具的設計理念，今年的產品藉由使用高品質的材料，例如實木和陶瓷，為居住空間帶來了更多的可能性。LEICHT始終向客戶承諾，提供經典、永恆、高品質、獨特性的廚房以滿足各種不同的需求。
				</div>
			</div>
			
			<div class="pic-area cell shrink">
				<img src="images/brand-2.jpg">
			</div>
		</div>

		<div class="item-offset-2"><img src="images/brand-deco-2.svg"></div>

		<div class="brandSliderWrap">

			<!-- <ul class="testSlider">
				<li><img src="images/brand-3-1.jpg" alt=""></li>
				<li><img src="images/brand-3-2.jpg" alt=""></li>
				<li><img src="images/brand-3-3.jpg" alt=""></li>
			</ul> -->

			<ul class="brandSlider">
				<li>
					<div class="pic-area" style="background: url('images/brand-3-4.jpg') center center / cover no-repeat;"></div>
					<div class="item">
						<div class="head-area">
							<div class="title">
								<span>excellence</span>
							</div>

							<div class="slogan">
								<span>卓越的廚具，造出永恆的優雅</span>
							</div>
						</div>
						<div class="content-area">
							<div class="num">01</div>
							<div class="line-rl"></div>
							<div class="title">BOSSA<br>幹練，現代，大膽–高級廚具市場的實木表面門板</div>
							<div class="content">
								LEICHT在高級廚房市場上，發表了令人眼睛一亮，全新的實木門板--BOSSA。
								表面可以選擇橡木或是胡桃木，垂直的結構顯得特別有張力。凸出的線條寬7.5 mm，每個線條之間的間隙為5 mm，為門板提供了精緻的3D立體外貌。基本紋理的總寬度為12.5mm，在視覺上可以做到無接縫的垂直對紋，對紋的效果可以在視覺上將廚具與牆面融合在一起， BOSSA為新的傢俱美學奠定了基礎，並型塑未來的規劃風格。藉由真正的實木門板，LEICHT提供廚房以及直接相鄰的起居區一致性的產品，並再次將自己定位於全方位的室內設計中。
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="pic-area" style="background: url('images/brand-3-1.jpg') center center / cover no-repeat;"></div>
					<div class="item">
						<div class="head-area">
							<div class="title">
								<span>excellence</span>
							</div>

							<div class="slogan">
								<span>卓越的廚具，造出永恆的優雅</span>
							</div>
						</div>
						<div class="content-area">
							<div class="num">02</div>
							<div class="line-rl"></div>
							<div class="title">VC收納櫃</div>
							<div class="content">
								對於廚房空間來說，收納相對重要。尤其更需思考家中大量購買之瓶罐、乾貨或零食之放置，更是讓家庭主婦們為之困擾。VC收納櫃使用特殊五金結構，將大量食品分門別類放置收納，且在打開櫃體拿取物件時，能清楚明瞭所需食品位置，有效利用空間並減少食品之雜亂囤積。
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="pic-area" style="background: url('images/brand-3-3.jpg') center center / cover no-repeat;"></div>
					<div class="item">
						<div class="head-area">
							<div class="title">
								<span>excellence</span>
							</div>

							<div class="slogan">
								<span>卓越的廚具，造出永恆的優雅</span>
							</div>
						</div>
						<div class="content-area">
							<div class="num">03</div>
							<div class="line-rl"></div>
							<div class="title">深色桶身</div>
							<div class="content">
								內外兼具 / LEICHT擁有各式各樣的門片顏色及材質。因應各種居家風格，2021年增加深色內裝做搭配；沉穩的深色桶身，提供更多樣化的設計選擇。<br>
								客製規劃 / LEICHT對於視覺、線條極其講究，能用各式尺寸的單元，滿足所有規劃需求，達到完美廚房的理念。
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="pic-area" style="background: url('images/brand-3-2.jpg') center center / cover no-repeat;"></div>
					<div class="item">
						<div class="head-area">
							<div class="title">
								<span>excellence</span>
							</div>

							<div class="slogan">
								<span>卓越的廚具，造出永恆的優雅</span>
							</div>
						</div>
						<div class="content-area">
							<div class="num">04</div>
							<div class="line-rl"></div>
							<div class="title">碳灰色內裝</div>
							<div class="content">
								櫃身內部的顏色，除了淺灰色外，LEICHT新增碳灰色的選項，櫃內所有配件，包括刀叉分類盤、垃圾桶、內抽、抽屜側邊的玻璃等，也都換上深灰色系的基調，呈現一致性的和諧與俐落，讓每一次的日常開合都是優雅極致的展現。
							</div>
						</div>
					</div>
				</li>
			</ul>

			<ul class="automatic-nav flex-container align-center">
				<li>
					<svg x="0px" y="0px" width="81px" height="81px" viewBox="0 0 81 81">
						<defs>
							<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="40.2355" x2="80.4711" y2="40.2355">
							    <stop offset="0" />
							    <stop offset="0.2198" />
							    <stop offset="0.3729" />
							    <stop offset="0.5057" />
							    <stop offset="0.627" />
							    <stop offset="0.7404" />
							    <stop offset="0.8481" />
							    <stop offset="0.9493" />
							    <stop offset="1" />
							</linearGradient>
						</defs>

					    <path class="st0" d="M80,40.2C80,18.3,62.2,0.5,40.2,0.5S0.5,18.3,0.5,40.2S18.3,80,40.2,80S80,62.2,80,40.2z"/>
					</svg>
				</li>
				<li>
					<svg x="0px" y="0px" width="80.5px" height="80.5px" viewBox="0 0 80.5 80.5">
					    <path class="st0" d="M80,40.2C80,18.3,62.2,0.5,40.2,0.5S0.5,18.3,0.5,40.2S18.3,80,40.2,80S80,62.2,80,40.2z"/>
					</svg>
				</li>
				<li>
					<svg x="0px" y="0px" width="80.5px" height="80.5px" viewBox="0 0 80.5 80.5">
					    <path class="st0" d="M80,40.2C80,18.3,62.2,0.5,40.2,0.5S0.5,18.3,0.5,40.2S18.3,80,40.2,80S80,62.2,80,40.2z"/>
					</svg>
				</li>
				<li>
					<svg x="0px" y="0px" width="80.5px" height="80.5px" viewBox="0 0 80.5 80.5">
					    <path class="st0" d="M80,40.2C80,18.3,62.2,0.5,40.2,0.5S0.5,18.3,0.5,40.2S18.3,80,40.2,80S80,62.2,80,40.2z"/>
					</svg>
				</li>
			</ul>

		</div>

		<div class="item-offset-3"><img src="images/brand-deco-3.svg"></div>

		<div class="brandColorWrap">

			<ul class="brandColorBanner">
				<li>
					<div class="bg" style="background: url(images/brand-4-1.jpg) center center / cover no-repeat;"></div>
					<div class="head-area">
						<div class="en">colour variety</div>
						<div class="ch">和諧的空間美學</div>
					</div>
					<div class="color">
						<!-- <div class="title">renaissance</div> -->
						<nav class="choice grid-x">
							<div style="background: url(images/choice-bg-1.jpg) center center / cover"></div>
							<div style="background: url(images/choice-bg-2.jpg) center center / cover"></div>

							<!-- <div style="background: #ddd4c0;"></div>
							<div style="background: url(images/choice-bg-1.jpg) center center / cover"></div>
							<div style="background: #234657;"></div>
							<div style="background: #433f3b;"></div>
							<div style="background: #c59d97;"></div>
							<div style="background: #91874d;"></div> -->
						</nav>
					</div>
				</li>
			</ul>
		</div>
	</section>

	<section class="projectSliderWrap">
		<div class="head-area">
			<div class="ch">經典案例</div>
			<div class="en">project</div>
		</div>

		<ul class="projectSlider">

			<?php foreach($leicht as $row) : ?>
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
				<div class="pic" style="background: url('images/brand-s-1.jpg') center center / cover;">></div>
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
				<div class="pic" style="background: url('images/brand-s-1.jpg') center center / cover;">></div>
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
				<div class="pic" style="background: url('images/brand-s-1.jpg') center center / cover;">></div>
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
				<div class="pic" style="background: url('images/brand-s-1.jpg') center center / cover;">></div>
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

				<?php foreach($leicht as $row) : ?>
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

	<section class="downloadWrap">
		<div class="head-area">
			<div class="ch">型錄下載</div>
			<div class="en">download</div>
		</div>

		<ul class="downloadList">

			<?php foreach($download as $row) : ?>
				<li class="grid-x align-middle">
					<div class="date cell auto"><?= date("Y. m", strtotime($row['d_date'])) ?></div>
					<div class="title cell auto"><?=$row['d_title']?></div>
					<div class="more cell auto">
						<div class="before">reading more</div>
						<div class="after">
							<a href="<?=$row['d_data1']?>" target="_blank"><img src="images/download.svg"></a>
						</div>
					</div>
				</li>
			<?php endforeach ?>

			<!-- <li class="grid-x align-middle">
				<div class="date cell auto">2020.2</div>
				<div class="title cell auto">LEICHT_2019</div>
				<div class="more cell auto">
					<div class="before">reading more</div>
					<div class="after">
						<a href="javascript:;"><img src="images/download.svg"></a>
					</div>
				</div>
			</li>
			<li class="grid-x align-middle">
				<div class="date cell auto">2020.2</div>
				<div class="title cell auto">LEICHT_2019</div>
				<div class="more cell auto">
					<div class="before">reading more</div>
					<div class="after">
						<a href="javascript:;"><img src="images/download.svg"></a>
					</div>
				</div>
			</li>
			<li class="grid-x align-middle">
				<div class="date cell auto">2020.2</div>
				<div class="title cell auto">LEICHT_2019</div>
				<div class="more cell auto">
					<div class="before">reading more</div>
					<div class="after">
						<a href="javascript:;"><img src="images/download.svg"></a>
					</div>
				</div>
			</li>
			<li class="grid-x align-middle">
				<div class="date cell auto">2020.2</div>
				<div class="title cell auto">LEICHT_2019</div>
				<div class="more cell auto">
					<div class="before">reading more</div>
					<div class="after">
						<a href="javascript:;"><img src="images/download.svg"></a>
					</div>
				</div>
			</li> -->
		</ul>
	</section>

	<section class="entranceWrap">
		<ul class="entrance text-center grid-x">
			<li><a href="contact.php" target="_blank">
				<div class="title">
					<div class="en">contact</div>
					<span>聯絡我們</span>
				</div>
				<div class="slogan">meet your better life</div>
			</a></li>

			<li><a href="https://leicht.com/" target="_blank">
				<div class="title no-en">
					<div class="en">LEICHT</div>
					<span>德匠名㕑</span>
				</div>
				<div class="slogan">official website.</div>
			</a></li>
		</ul>
	</section>

	<?php include 'footer-black.php'; ?>
</body>

<?php include 'script.php'; ?>

</html>

<script>

	$(function () {

		setTimeout(function() {
			$(".brand-bannerWrap .loader").addClass("is-show")
		}, 1000)
		setTimeout(function() {
			$(".brand-bannerWrap .loader").removeClass("is-show")
		}, 4000)
		setTimeout(function() {
			$(".brand-bannerWrap").fadeOut(1000)
		}, 5000)
		setTimeout(function() {
			$(".timeless .loader").addClass("is-show")
		}, 5500)


		gsap.to(".item-offset-1", {
		      x: -200,
		      ease: "none",
		      scrollTrigger: {
		        trigger: ".item-offset-1",
		        start: "top bottom",
		        end: "bottom top",
		        scrub: true
		      }
		});

		gsap.to(".item-offset-2", {
		      x: 300,
		      ease: "none",
		      scrollTrigger: {
		        trigger: ".item-offset-2",
		        start: "top bottom",
		        end: "bottom top",
		        scrub: true
		      }
		});

		gsap.to(".item-offset-3", {
		      x: -100,
		      ease: "none",
		      scrollTrigger: {
		        trigger: ".item-offset-3",
		        start: "top bottom",
		        end: "bottom top",
		        scrub: true
		      }
		});



		$(".downloadList li .more").on("click", function() {
			$(this).closest("li").addClass("current").siblings().removeClass("current")
		})




		$(".automatic-nav li").each(function (i, el) {
			var _tl = gsap.timeline({
				paused: true
			})

			_tl.to($(".st0", el), {
				duration: 8,
				drawSVG: 0,
				ease: "none"
			});

			$(el).data("tl", _tl)
		})

		$('.brandSlider').on('init reInit beforeChange', function(event, slick, currentSlide, nextSlide) {

			if (nextSlide != undefined) {
				$(".automatic-nav li").eq(currentSlide).data("tl").progress(0).pause()
				$(".automatic-nav li").eq(nextSlide).data("tl").play()

				$(".automatic-nav li").eq(nextSlide).addClass("is-show").siblings().removeClass("is-show")
			}else{
				$(".automatic-nav li").eq(0).addClass("is-show")
				$(".automatic-nav li").eq(0).data("tl").play()
			}

		}).slick({
			fade: true,
			autoplay: true,
			autoplaySpeed: 8000,
			pauseOnFocus: false,
			pauseOnHover: false,
			dots: false,
			infinite: true,
			speed: 0,
			arrows: false,
			focusOnSelect: false,
			swipeToSlide: true,
			touchThreshold: 10,
			easing: 'easeInOutCubic'
		});

		// var $brandSlider = $('.brandSlider').flickity({
		// 	"prevNextButtons": false,
		// 	"pageDots": false,
		// 	"wrapAround": true,
		// 	"autoPlay": 8000,
		// 	"pauseAutoPlayOnHover": false,
		// 	"imagesLoaded": false,
		// 	"fade": true
		// });

		// var cellElements = $('.brandSlider').flickity('getCellElements');


		

		// $(".automatic-nav li").eq(0).data("tl").play()
		// $(".automatic-nav li").eq(0).addClass("is-show")

		// $brandSlider.on( 'change.flickity', function( event, index ) {

		// 	var currentSlide = index - 1
		// 	var nextSlide = index


		// 	$(".automatic-nav li").eq(currentSlide).data("tl").progress(0).pause()
		// 	$(".automatic-nav li").eq(nextSlide).data("tl").play()

		// 	$(".automatic-nav li").eq(nextSlide).addClass("is-show").siblings().removeClass("is-show")


		// 	$brandSlider.flickity('playPlayer')

		// });


		





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

			$(".bar-area .progress").css({
				width: (index + 1) / cellElements.length * 100 + "%"
			})

			$pbmSlider.flickity( 'select', index );

		});

		// ---------------------------------------------------------

		$pbmSlider.on( 'change.flickity', function( event, index ) {

			$(".bar-area .progress").css({
				width: (index + 1) / cellElements.length * 100 + "%"
			})

			$pjSlider.flickity( 'select', index );

		});

		$(".bar-area .progress").css({
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