<?php
require_once 'Connections/connect2data.php';

//news
$news = $DB->query("SELECT * FROM data_set, file_set WHERE d_class1='news' AND d_id=file_d_id AND file_type='newsCover' AND d_active=1 ORDER BY d_sort ASC, d_date DESC LIMIT 5");

// shop
$shopC = $DB->query("SELECT * FROM class_set WHERE c_parent='shopC' AND c_active=1 ORDER BY c_sort ASC");
?>

<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>

	<style>
	body {
		background: #fff;
	}
	.footerWrap {
		margin-top: 0;
	}
	.topmenuWrap {
		opacity: 0;
	}
	.topmenuWrap .biu {
		bottom: 0;
	}
	.topmenuWrap-mobile {
		display: none;
	}
	canvas{
		position: fixed;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		pointer-events: none;
	}
	</style>
</head>

<body>
	<?php include 'topmenu.php'; ?>

	<div class="inner"></div>

	<div class="indexWrap">

		<div class="index-bannerWrap">
			<!-- <div class="zone"></div> -->

			<div class="banner"></div>

			<svg class="ryder-magic" width="622" height="134" viewBox="0 0 622 134">
				<defs>
					<filter id="goo-1">
						<feGaussianBlur in="SourceGraphic" stdDeviation="1" result="blur"></feGaussianBlur>
						<feColorMatrix in="blur" mode="matrix" values="
						1 0 0 0 0
						0 1 0 0 0
						1 1 1 0 0
						0 0 0 15 -12" result="goo"></feColorMatrix>
						<feComposite in="SourceGraphic" in2="goo" operator="atop"></feComposite>
					</filter>
				</defs>

				<mask id="news_mask">
					<path d="M0,108.2V1.5h25.4v85.9h42.3v20.8H0z M165.8,108.2h-62.3V1.5h62.3v20.6h-36.9v20.5h34.2v20.6h-34.2v24.1h36.9V108.2z M248.6,108.2h-51.8V93.7l13.1-5.5V21.5L196.8,16V1.5h51.8V16l-13.1,5.5v66.6l13.1,5.5V108.2z M327.8,108.2h-25.4V22.6h-27.6V1.5 h80.7v21.1h-27.6V108.2z M432.7,21.1c-7.9,0-13.9,3-18.2,9c-4.2,6-6.3,14.4-6.3,25c0,10.9,2,19.1,6.1,24.9 c4.1,5.7,10.5,8.6,19.1,8.6c4.5,0,8.9-0.6,13.3-1.7c4.4-1.1,9-2.6,13.9-4.4V104c-4.7,2-9.4,3.4-14.2,4.3s-10,1.3-15.5,1.3 c-11.4,0-20.6-2.3-27.8-6.9c-7.2-4.6-12.5-11-15.9-19.1c-3.4-8.2-5.2-17.7-5.2-28.7c0-10.8,2-20.3,5.9-28.5 c3.9-8.3,9.7-14.7,17.3-19.4c7.6-4.7,16.8-7,27.6-7c5.3,0,10.7,0.6,16.1,1.9c5.5,1.2,10.8,3.1,15.8,5.6l-7.9,20.3 c-4-1.9-8-3.5-12-4.8C441,21.7,436.9,21.1,432.7,21.1z M589.6,108.2h-25.4V63.3h-38.2v44.8h-25.5V1.5h25.5v40.8h38.2V1.5h25.4V108.2 z" fill="#fff" />
				</mask>

				<g class="filter-area" style='filter: url("#goo-1");'>
					<g class="picList" mask="url(#news_mask)">
						<image href="images/index-banner-1.jpg" x="0" y="0" width="100%" height="100%" preserveAspectRatio="xMidYMid slice"></image>
						<image href="images/index-banner-2.jpg" x="0" y="0" width="100%" height="100%" preserveAspectRatio="xMidYMid slice"></image>
					</g>
				</g>
			</svg>

			<div class="handwriting-arae"></div>

			<div class="scroll-down hide-for-large"><img src="images/scroll-down.jpg"></div>
		</div>

		<section class="index-storyWrap grid-x align-center-middle">
			<div class="title-area cell large-auto flex-container align-center">
				<div class="item1">
					<div class="title">our story</div>
					<div class="content">
						德匠名㕑成立於1985年，秉持『 智慧專業、共創價值 』的經營理念，提供專業廚房空間規畫及完整售後服務，以廚房為軸心，致力於提供顧客完善且美好的家居生活。
					</div>
				</div>
				<div class="item2">
					<div class="title">our story</div>
					<div class="content">
						德匠名㕑成立於1985年，秉持『 智慧專業、共創價值 』的經營理念，提供專業廚房空間規畫及完整售後服務，以廚房為軸心，致力於提供顧客完善且美好的家居生活。
					</div>
				</div>
			</div>

			<div class="marquee-container cell large-auto">
				<div class="deco-1"><img src="images/story-4.svg"></div>
				<div class="deco-2"><img src="images/story-2.svg"></div>

				<div class="marquee-area grid-x align-top">
					<ul class="marqueeList cell auto">
						<li><img src="images/s3.jpg"></li>
						<li><img src="images/s1.jpg"></li>
						<li><img src="images/s3.jpg"></li>
					</ul>

					<ul class="marqueeList cell auto">
						<li><img src="images/s4.jpg"></li>
						<li><img src="images/s2.jpg"></li>
						<li><img src="images/s4.jpg"></li>
					</ul>
				</div>
			</div>
		</section>

		<section class="index-choicesWrap">
			<div class="title-area">
				<div class="en">variety of choices</div>
				<div class="ch">為了獨一無二的您，我們準備了與眾不同的選擇</div>
			</div>
			<div class="pic">
				<video playsinline muted loop id="myVideo">
					<source src="images/index-fixed.mp4" type="video/mp4">
				</video>
				<!-- <video playsinline autoplay muted loop id="myVideo">
					<source src="images/index-fixed.mp4" type="video/mp4">
				</video> -->
			</div>
		</section>

		<div class="brand-enterWrap index show-for-large">
			<div class="enter grid-x">
				<div class="bg"><img src="images/enter-bg.svg"></div>

				<div class="item cell auto">
					<div class="title"><img src="images/story-4.svg" width="220"></div>
				</div>
				<div class="item cell auto">
					<div class="title"><img src="images/story-1.svg"></div>
				</div>
			</div>

			<div class="index-leichtWrap show-for-large">
				<!-- <div class="bg-one"><img src="images/ll-bg.svg"></div> -->
				<!-- <div class="bg-two"><img src="images/ll-bg-1.svg"></div> -->

				<div class="bgc"></div>

				<div class="trigger-one"></div>
				<div class="trigger-two"></div>

				<div class="index-plusWrap grid-x align-center-middle">
					<!-- <div class="bg"></div> -->

					<div class="article-area cell large-shrink">
						<div class="title"><img src="images/story-4.svg"></div>
						<div class="line-rl"></div>
						<div class="content">
							Clean up認為廚房才是創造一個家庭的核心，因此基於「創造充滿歡樂與笑容的家庭」之理念，不斷致力於提供更好的服務與價值。
						</div>

						<!-- <div class="more text-center">
							<img src="images/download-red.svg">
						</div> -->
					</div>

					<div class="artplus-area cell large-shrink">
						<!-- <div class="pic"><img src="images/index-2.jpg"></div> -->
						<div class="pic">
							<div class="ani" style="background: url('images/index-2.jpg') center center / cover no-repeat;"></div>
						</div>
					</div>
				</div>

				<div class="index-plusWrap2 grid-x align-center-middle">
					<!-- <div class="bg"></div> -->

					<div class="artplus-area cell large-shrink">
						<!-- <div class="pic"><img src="images/index-l.jpg"></div> -->
						<div class="pic">
							<div class="ani" style="background: url('images/index-l.jpg') center center / cover no-repeat;"></div>
						</div>
					</div>

					<div class="article-area cell large-shrink">
						<div class="title"><img src="images/story-1.svg"></div>
						<div class="line-rl"></div>
						<div class="content">
							LEICHT分別在德國境內與歐洲通過多項國際認證，以專業與頂級的品質贏得全球消費找的青睞。人性化的優質設計，更成為室內設計師在打造廚房空間的最佳首選。
						</div>

						<!-- <div class="more text-center">
							<img src="images/download.svg">
						</div> -->
					</div>
				</div>
			</div>
		</div>

		<!-- <div class="index-leichtWrap-mobile hide-for-large">
			<ul class="leichtSlider">
				<li>
					<div class="pic"><img src="images/index-2.png"></div>
					<div class="content-area">
						<div class="logo text-center"><img src="images/story-1.svg"></div>
						<div class="line-rl"></div>
						<div class="content">LEICHT分別在德國境內與歐洲通過多項國際認證，以專業與頂級的品質贏得全球消費找的青睞。人性化的優質設計，更成為室內設計師在打造廚房空間的最佳首選。</div>
					</div>
				</li>
				<li>
					<div class="pic"><img src="images/index-l.png"></div>
					<div class="content-area">
						<div class="logo text-center"><img src="images/story-4.svg"></div>
						<div class="line-lr"></div>
						<div class="content">Cleanup認為廚房才是創造一個家庭的核心，因此基於「創造充滿歡樂與笑容的家庭」之理念，不斷致力於提供更好的服務與價值。</div>
					</div>
				</li>
				<li>
					<div class="pic"><img src="images/index-2.png"></div>
					<div class="content-area">
						<div class="logo text-center"><img src="images/story-1.svg"></div>
						<div class="line-rl"></div>
						<div class="content">LEICHT分別在德國境內與歐洲通過多項國際認證，以專業與頂級的品質贏得全球消費找的青睞。人性化的優質設計，更成為室內設計師在打造廚房空間的最佳首選。</div>
					</div>
				</li>
				<li>
					<div class="pic"><img src="images/index-l.png"></div>
					<div class="content-area">
						<div class="logo text-center"><img src="images/story-4.svg"></div>
						<div class="line-lr"></div>
						<div class="content">Cleanup認為廚房才是創造一個家庭的核心，因此基於「創造充滿歡樂與笑容的家庭」之理念，不斷致力於提供更好的服務與價值。</div>
					</div>
				</li>
			</ul>

			<div class="prev">
				<svg width="31.4" height="37.7" viewBox="0 0 31.4 37.7">
				  <g>
				    <polyline points="31.3 0.1 10 18.9 31.3 37.6"/>
				    <circle cx="11.4" cy="18.8" r="11.2"/>
				  </g>
				</svg>
			</div>
			<div class="next">
				<svg width="31.4" height="37.7" viewBox="0 0 31.4 37.7">
				  <g>
				    <polyline points="0.1 37.6 21.4 18.9 0.1 0.1" style=""/>
				    <circle cx="20" cy="18.8" r="11.2"/>
				  </g>
				</svg>
			</div>
		</div> -->

		<div class="index-leichtWrap-mobile hide-for-large">
			<ul class="leichtSlider">
				<li>
					<div class="pic"><img src="images/index-l.jpg"></div>
					<div class="content-area">
						<div class="logo text-center"><img src="images/story-1.svg"></div>
						<div class="line-rl"></div>
						<div class="content">LEICHT分別在德國境內與歐洲通過多項國際認證，以專業與頂級的品質贏得全球消費找的青睞。人性化的優質設計，更成為室內設計師在打造廚房空間的最佳首選。</div>
					</div>
				</li>
				<li>
					<div class="pic"><img src="images/index-2.jpg"></div>
					<div class="content-area">
						<div class="logo text-center"><img src="images/story-4.svg"></div>
						<div class="line-lr"></div>
						<div class="content">Clean up認為廚房才是創造一個家庭的核心，因此基於「創造充滿歡樂與笑容的家庭」之理念，不斷致力於提供更好的服務與價值。</div>
					</div>
				</li>
			</ul>
		</div>

		<section class="index-serviceWrap">

			<div class="item">
				<div class="bg"><img src="images/index-service.jpg"></div>

				<div class="title-area">
					<div class="en">
						We look forward to<br>
						hearing from you
					</div>
					<div class="ch">期待有一天為您服務</div>
				</div>

				<ul class="entrance text-center grid-x">
					<li><a href="https://www.facebook.com/leichttaiwan/" target="_blank">
						<div class="title">
							<div class="en">service</div>
							<span>德匠服務</span>
						</div>
						<div class="slogan">meet your better life</div>
					</a></li>

					<li><a href="https://www.facebook.com/leichttaiwan/" target="_blank">
						<div class="title">
							<div class="en">contact</div>
							<span>聯絡我們</span>
						</div>
						<div class="slogan">Please feel free to contact us here.</div>
					</a></li>
				</ul>
			</div>

			<div class="deco"><img src="images/service-deco.svg"></div>
		</section>

		<section class="index-shopWrap">

			<div class="head-area">
				<div class="title">store accessmap</div>
				<div class="content">meet your better life</div>

				<div class="dash">-</div>

				<div class="head">門市據點</div>
			</div>

			<div class="shopWrap">

				<?php foreach($shopC as $c) : ?>
				<?php $shop = $DB->query("SELECT * FROM data_set, file_set WHERE d_class1='shop' AND d_class2=? AND d_id=file_d_id AND file_type='shopCover' AND d_active=1 ORDER BY d_sort ASC", [$c['c_id']]); ?>
					<section>
						<div class="city">
							<span class="ch"><?=$c['c_title']?></span>
							<span class="en"><?=$c['c_title_en']?></span>
						</div>

						<div class="line-rl"></div>

						<ul class="shopList">

							<?php foreach($shop as $row) : ?>
							<?php
							if($row['d_data5'] == 0) {
								$company = "images/story-1.svg";
							} elseif($row['d_data5'] == 1) {
								$company = "images/story-4.svg";
							}
							?>
								<li class="grid-x align-middle">
									<div class="pic-area cell large-shrink">
										<div class="pic"><a href="<?=$row['d_data2']?>" target="_blank"><img src="<?=$row['file_link1']?>"></a></div>
										<div class="icon"><img src="<?=$company?>"></div>
										<div class="block"></div>
									</div>
									<div class="content-area cell large-shrink">
										<div class="title"><?=$row['d_title']?></div>
										<div class="line-rl"></div>
										<div class="address"><b>A</b><a href="<?=$row['d_data2']?>" target="_blank"><?=$row['d_data1']?></a></div>
										<div class="week"><b>T</b><?=$row['d_data3']?></div>
										<div class="phone"><b>P</b><a href="tel:+886-<?=$row['d_data4']?>"><?=$row['d_data4']?></a></div>
									</div>
								</li>
							<?php endforeach ?>

							<!-- <li class="grid-x align-middle">
								<div class="pic-area cell large-shrink">
									<div class="pic"><a href="https://goo.gl/maps/1C3FG2HhAYB5u3ts6" target="_blank"><img src="images/shop-3.jpg"></a></div>
									<div class="icon"><img src="images/story-1.svg"></div>
									<div class="block"></div>
								</div>
								<div class="content-area cell large-shrink">
									<div class="title">LEICHT 台南展示中心</div>
									<div class="line-rl"></div>
									<div class="address"><b>A</b><a href="https://goo.gl/maps/1C3FG2HhAYB5u3ts6" target="_blank">台南市安平區永華路二段768號</a></div>
									<div class="week"><b>T</b>星期一～ 六  09:00–20:00</div>
									<div class="phone"><b>P</b><a href="tel:+886-6-2976262">06-2976262</a></div>
								</div>
							</li>
							<li class="grid-x align-middle">
								<div class="pic-area cell large-shrink">
									<div class="pic"><a href="https://goo.gl/maps/nxC7CQqEJo2rkjz58" target="_blank"><img src="images/shop-4.jpg"></a></div>
									<div class="icon"><img src="images/story-4.svg"></div>
									<div class="block"></div>
								</div>
								<div class="content-area cell large-shrink">
									<div class="title">Cleanup 台南展示中心</div>
									<div class="line-rl"></div>
									<div class="address"><b>A</b><a href="https://goo.gl/maps/nxC7CQqEJo2rkjz58" target="_blank">台南東區東興路138號1樓</a></div>
									<div class="week"><b>T</b>星期一～ 六  09:00–20:00</div>
									<div class="phone"><b>P</b><a href="tel:+886-6-2085268">06-2085268</a></div>
								</div>
							</li> -->
						</ul>
					</section>
				<?php endforeach ?>

				<!-- <section>
					<div class="city">
						<span class="ch">台南</span>
						<span class="en">Tainan</span>
					</div>

					<div class="line-rl"></div>

					<ul class="shopList">
						<li class="grid-x align-middle">
							<div class="pic-area cell large-shrink">
								<div class="pic"><a href="https://goo.gl/maps/1C3FG2HhAYB5u3ts6" target="_blank"><img src="images/shop-3.jpg"></a></div>
								<div class="icon"><img src="images/story-1.svg"></div>
								<div class="block"></div>
							</div>
							<div class="content-area cell large-shrink">
								<div class="title">LEICHT 台南展示中心</div>
								<div class="line-rl"></div>
								<div class="address"><b>A</b><a href="https://goo.gl/maps/1C3FG2HhAYB5u3ts6" target="_blank">台南市安平區永華路二段768號</a></div>
								<div class="week"><b>T</b>星期一～ 六  09:00–20:00</div>
								<div class="phone"><b>P</b><a href="tel:+886-6-2976262">06-2976262</a></div>
							</div>
						</li>
						<li class="grid-x align-middle">
							<div class="pic-area cell large-shrink">
								<div class="pic"><a href="https://goo.gl/maps/nxC7CQqEJo2rkjz58" target="_blank"><img src="images/shop-4.jpg"></a></div>
								<div class="icon"><img src="images/story-4.svg"></div>
								<div class="block"></div>
							</div>
							<div class="content-area cell large-shrink">
								<div class="title">Cleanup 台南展示中心</div>
								<div class="line-rl"></div>
								<div class="address"><b>A</b><a href="https://goo.gl/maps/nxC7CQqEJo2rkjz58" target="_blank">台南東區東興路138號1樓</a></div>
								<div class="week"><b>T</b>星期一～ 六  09:00–20:00</div>
								<div class="phone"><b>P</b><a href="tel:+886-6-2085268">06-2085268</a></div>
							</div>
						</li>
					</ul>
				</section>

				<section>
					<div class="city">
						<span class="ch">高雄</span>
						<span class="en">Kaohsiung</span>
					</div>

					<div class="line-rl"></div>

					<ul class="shopList">
						<li class="grid-x align-middle">
							<div class="pic-area cell large-shrink">
								<div class="pic"><a href="https://goo.gl/maps/BfvZTy3QEoUVmfjR9" target="_blank"><img src="images/shop-1.jpg"></a></div>
								<div class="icon"><img src="images/story-1.svg"></div>
								<div class="block"></div>
							</div>
							<div class="content-area cell large-shrink">
								<div class="title">LEICHT 高雄展示中心</div>
								<div class="line-rl"></div>
								<div class="address"><b>A</b><a href="https://goo.gl/maps/BfvZTy3QEoUVmfjR9" target="_blank">高雄市鼓山區明誠四路218號</a></div>
								<div class="week"><b>T</b>星期一～ 六  09:00–20:00</div>
								<div class="phone"><b>P</b><a href="tel:+886-7-5226888">07-5226888</a></div>
							</div>
						</li>
						<li class="grid-x align-middle">
							<div class="pic-area cell large-shrink">
								<div class="pic"><a href="https://goo.gl/maps/SuxnJKZT3BJH59TQ6" target="_blank"><img src="images/shop-6.jpg"></a></div>
								<div class="icon"><img src="images/story-4.svg"></div>
								<div class="block"></div>
							</div>
							<div class="content-area cell large-shrink">
								<div class="title">Cleanup 北高雄展示中心</div>
								<div class="line-rl"></div>
								<div class="address"><b>A</b><a href="https://goo.gl/maps/SuxnJKZT3BJH59TQ6" target="_blank">高雄市鼓山區美術東三路108號</a></div>
								<div class="week"><b>T</b>星期一～ 六  09:00–20:00</div>
								<div class="phone"><b>P</b><a href="tel:+886-7-5500177">07-5500177</a></div>
							</div>
						</li>
						<li class="grid-x align-middle">
							<div class="pic-area cell large-shrink">
								<div class="pic"><a href="https://goo.gl/maps/cjCX6CoK5157sRhQ7" target="_blank"><img src="images/shop-2.jpg"></a></div>
								<div class="icon"><img src="images/story-4.svg"></div>
								<div class="block"></div>
							</div>
							<div class="content-area cell large-shrink">
								<div class="title">Cleanup 南高雄展示中心</div>
								<div class="line-rl"></div>
								<div class="address"><b>A</b><a href="https://goo.gl/maps/cjCX6CoK5157sRhQ7" target="_blank">高雄市苓雅區中正一路366號1樓</a></div>
								<div class="week"><b>T</b>星期一～ 六  09:00–20:00</div>
								<div class="phone"><b>P</b><a href="tel:+886-7-7252233">07-7252233</a></div>
							</div>
						</li>
					</ul>
				</section> -->

			</div>
		</section>

		<section class="index-newsWrap">

			<div class="item">

				<div class="head-area">
					<div class="title">news</div>
					<div class="content">活動\新品推出\合作新夥伴</div>
				</div>

				<div class="dash">-</div>

				<div class="head">最新消息</div>

				<ul class="index-newsList">

					<?php foreach($news as $row) : ?>
						<li><a href="news_detail.php?id=<?=$row['d_id']?>" class="grid-x align-middle">
							<div class="date"><?= date("Y.m.d", strtotime($row['d_date'])) ?></div>
							<div class="title"><?=$row['d_title']?></div>
							<div class="more show-for-large"><img src="images/more.svg" width="87"></div>
						</a></li>
					<?php endforeach ?>

					<!-- <li><a href="news_detail.php" class="grid-x align-middle">
						<div class="date">2021.07.16</div>
						<div class="title">歡迎來到LEICHT全新工廠</div>
						<div class="more show-for-large"><img src="images/more.svg" width="87"></div>
					</a></li>
					<li><a href="news_detail1.php" class="grid-x align-middle">
						<div class="date">2021.05.19</div>
						<div class="title">防疫升級公告及措施</div>
						<div class="more show-for-large"><img src="images/more.svg" width="87"></div>
					</a></li>
					<li><a href="news_detail2.php" class="grid-x align-middle">
						<div class="date">2021.04.28</div>
						<div class="title">水槽，廚房的心臟，必須完美</div>
						<div class="more show-for-large"><img src="images/more.svg" width="87"></div>
					</a></li>
					<li><a href="news_detail3.php" class="grid-x align-middle">
						<div class="date">2021.01.27</div>
						<div class="title">Leicht 「居家辦公室」設計</div>
						<div class="more show-for-large"><img src="images/more.svg" width="87"></div>
					</a></li> -->
				</ul>

				<!-- <div class="seemore text-center"><a href="news.php"><img src="images/seemore.svg"></a></div> -->

			</div>

		</section>
	</div>

	<?php include 'footer.php'; ?>
</body>

<?php include 'script.php'; ?>

</html>

<script>
	$(function() {
	    var dur = 1

	    // functions
	    function innerDivTracking() {
	        if ($('.inner').hasClass('clicked')) {
	            $('.inner').removeClass('clicked')
	            TweenMax.to('.inner', 0.5, {
	                borderWidth: 15
	            })
	        } else {
	            $('.inner').addClass('clicked')
	            TweenMax.to('.inner', 0.7, {
	                borderWidth: 0
	            })
	        }
	    }

	    function getMousePos(event) {
	            return [event.clientX, event.clientY]
	        }
	        // end:functions

	    // events
	    // $(document).click(function(e) {
	    //     if ($('.inner').length <= 0) {
	    //         $('body').prepend('<div class="inner"></div>')
	    //         innerDivTracking()
	    //     } else {
	    //         $(document).unbind('click')
	    //         innerDivTracking()

	    //         $(document).click(function() {
	    //             innerDivTracking()
	    //         })
	    //     }
	    // })
	    innerDivTracking()

	    $(document).mousemove(function(e) {
	            if ($('.inner').hasClass('clicked')) {
	                var mousePos = getMousePos(e)
	                TweenMax.to($('.inner'), dur, {
	                    left: mousePos[0],
	                    top: mousePos[1]
	                })
	            }
	        })
	        // end:events
	})


	function RyderPixi() {
	    this.initScene = () => {
	        this.renderer = new PIXI.autoDetectRenderer({
	            transparent: true,
	            width: $(window).width(),
	            height: $(window).height(),
	            antialias : true,
	        });

	        this.renderer.autoResize = true;
	        this.renderer.view.classList.add("ryder-canvas")

	        $("body").append(this.renderer.view)
	    }

	    this.initStage = () => {
	        this.stage = new PIXI.Container();
	        this.container = new PIXI.Container();
	        this.stage.addChild(this.container);
	    }

	    this.initProperty = () => {
	        this.sprites = [];
	        this.$pic = [...document.getElementsByClassName('ryder-pic')];
	        this.imgs = [];
	        this.dimensions = [];
	        this.view_width = $(window).width();
	        this.view_height = $(window).height();
	        this.count = 0;
	        this.scrolltop = window.pageYOffset;
	        this.points = [];
	        this.ropeLength = this.view_width / 18;
	        this.gs = [];
	        this.strips = [];
	    }

	    this.initObject = () => {
	        this.$pic.forEach((item, index) => {
	            var $img = item.getElementsByTagName('img')[0]
	            $img.style.visibility = 'hidden';
	            this.imgs.push($img)
	            this.dimensions.push(item.getBoundingClientRect())

	            // var sprite = new PIXI.Sprite(PIXI.Texture.fromImage($img));
	            // this.sprites.push(sprite)
	            // this.container.addChild(sprite);


	            for (var i = 0; i < 18; i++) {
	                this.points.push(new PIXI.Point(i * this.ropeLength, 0));
	            }

	            var strip = new PIXI.mesh.Rope(PIXI.Texture.fromImage($img), this.points);

	            this.strips.push(strip)
	            this.container.addChild(strip);


	            var g = new PIXI.Graphics();
	            g.x = strip.x;
	            g.y = strip.y;

	            this.gs.push(g)
	            this.container.addChild(g);
	        });
	    }

	    this.setSize = () => {
	        this.$pic.forEach((item, index) => {

	            this.dimensions[index] = item.getBoundingClientRect()

	            this.strips[index].width = this.dimensions[index].width
	            this.strips[index].height = this.dimensions[index].height
	            this.strips[index].position.x = this.dimensions[index].x
	            this.strips[index].position.y = this.dimensions[index].y + this.dimensions[index].height / 2
	        });
	    }

	    this.initFilter = () => {}

	    this.render = () => {
	        this.count += 0.01;


	        for (var i = 0; i < this.points.length; i++) {
	            this.points[i].y = Math.sin((i * 0.5) + this.count) * 4;
	            this.points[i].x = i * this.ropeLength + Math.sin((i * 0.5) + this.count) * 10;
	        }


	        this.scrolltop = window.pageYOffset;
	        this.setSize()

	        this.renderer.render(this.stage);
	        requestAnimationFrame(this.render);
	    }

	    this.init = () => {
	        this.initProperty()
	        this.initScene()
	        this.initStage()
	        this.initObject()
	        this.initFilter()
	        this.render()

	        return this;
	    }
	}

	$(window).on("load", function () {
	    window.ryderPixi = new RyderPixi().init()
	})

	// 拉雞
	// $(".index-leichtWrap, .index-plusWrap, .trigger-two, .bg-two").addClass("is-show")
	$(".index-leichtWrap .bgc").fadeOut(100)
	// mouseenter
	$(".trigger-one").on("mouseenter", function () {
		$(".index-plusWrap, .trigger-two, .bg-two").addClass("is-show")
		$(".index-plusWrap2, .trigger-one, .bg-one").removeClass("is-show")

		$(".index-plusWrap .pic").addClass("is-appearCustom")
		$(".index-plusWrap2 .pic").removeClass("is-appearCustom")

		setTimeout(function() {
			$(".index-plusWrap .pic").addClass("in-enter")
		}, 3000)

		$(".index-leichtWrap .bg-two").addClass("is-show")
		$(".index-leichtWrap .bg-one").removeClass("is-show")

		$(".index-leichtWrap .bgc").fadeOut(100)

		$(".index-leichtWrap").addClass("is-show")

		$(".enter").addClass("is-close")
	})

	$(".trigger-two").on("mouseenter", function () {
		$(".index-plusWrap, .trigger-two, bg-two").removeClass("is-show")
		$(".index-plusWrap2, .trigger-one, bg-one").addClass("is-show")

		$(".index-plusWrap .pic").removeClass("is-appearCustom")
		$(".index-plusWrap2 .pic").addClass("is-appearCustom")

		setTimeout(function() {
			$(".index-plusWrap2 .pic").addClass("in-enter")
		}, 3000)

		$(".index-leichtWrap .bg-two").removeClass("is-show")
		$(".index-leichtWrap .bg-one").addClass("is-show")

		$(".index-leichtWrap .bgc").fadeIn(100)

		$(".index-leichtWrap").removeClass("is-show")

		$(".enter").addClass("is-close")
	})

	// var $lcSlider = $('.leichtSlider').flickity({
	// 	"prevNextButtons": false,
	// 	"pageDots": false,
	// 	"wrapAround": true,
	// 	"autoPlay": 4000,
	// 	"imagesLoaded": false,
	// 	"fade": true
	// });

	// var cellElements = $('.leichtSlider').flickity('getCellElements');

	// $lcSlider.on( 'change.flickity', function( event, index ) {
	// 	if(index == 1 || index == 3) {
	// 		$(this).closest(".index-leichtWrap-mobile").addClass("is-white")
	// 	} else {
	// 		$(this).closest(".index-leichtWrap-mobile").removeClass("is-white")
	// 	}

	// 	console.log(index)
	// });

	// $(".index-leichtWrap-mobile .prev").on("click", function() {
	// 	$lcSlider.flickity('previous');
	// })

	// $(".index-leichtWrap-mobile .next").on("click", function() {
	// 	$lcSlider.flickity('next');
	// })



	$(".marqueeList").each(function (i, el) {

		if (i % 2 == 0) {
			var tl_1 = gsap.timeline({
				repeat: -1
			}).to(el, {
				y: "-33.33333%",
				duration: 3,
				delay: 4,
				ease: Power3.easeOut,
				onStart: () => {
					$(".index-storyWrap").addClass("is-black")
				}
			}).to(el, {
				y: "-66.66666%",
				duration: 3,
				delay: 3,
				ease: Power3.easeOut,
				onStart: () => {
					$(".index-storyWrap").removeClass("is-black")
				}
			})
		}else{
			var tl_2 = gsap.timeline({
				repeat: -1
			}).set(el, {
				y: "-66.66666%",
			}).to(el, {
				y: "-33.33333%",
				duration: 3,
				delay: 4,
				ease: Power3.easeOut
			}).to(el, {
				y: "0%",
				duration: 3,
				delay: 3,
				ease: Power3.easeOut
			})
		}

	})

	setTimeout(function() {

		$(".white-in .white").addClass("is-go")

		$(".banner-mask").addClass("is-show")
	}, 1000)

	setTimeout(function() {

		$(".white-in").addClass("is-out")

		if ($(this).width() <= 1280) {

				gsap.fromTo($(".topmenuWrap .logo"), {
					opacity: 0,
				}, {
					delay: 1.5,
					duration: 1,
					opacity: 1,
					onComplete: function () {

						gsap.fromTo($(".biu"), {
							y: 0,
						}, {
							y: 12,
							duration: 1
						});

					}
				});

			} else {

				gsap.fromTo($(".topmenuWrap .logo"), {
					opacity: 0,
				}, {
					delay: 1.5,
					duration: 1,
					opacity: 1,
					onComplete: function () {

						gsap.fromTo($(".biu"), {
							y: 0,
						}, {
							y: 15,
							duration: 1
						});

					}
				});

			}

		setTimeout(function() {
			gsap.fromTo($(".topmenuWrap"), {
				y: -120,
			}, {
				opacity: 1,
				y: 0,
				duration: 1.5,
			});

			$(".topmenuList").each(function (i, el) {

				gsap.fromTo($(">div a", el), {
					x: -30,
					opacity: 0,
				}, {
					delay: 1.5,
					x: 0,
					duration: 2,
					stagger: 0.3,
					opacity: 1,
					onComplete: function () {
						$(".inner").fadeIn(500)

						$(".index-bannerWrap").mousemove(function(e){
							// console.log(e.pageX)
							// $(".biu").css("left", e.pageX);

							TweenMax.to($('.biu'), 2, {
			                    left: e.pageX,
			                    ease: Power1.easeOut,
			                    delay: .2
			                })
						})

						$(".index-storyWrap").mouseenter(function(e){
							// $(".biu").css("left", "50%");
							TweenMax.to($('.biu'), 2, {
			                    left: "50%",
			                    delay: .5
			                })
						})

					}
				});

			})
		}, 1500)
	}, 3500)




	var lot = lottie.loadAnimation({
		container: $(".handwriting-arae").get(0), // the dom element that will contain the animation
		renderer: 'svg',
		loop: false,
		autoplay: false,
		path: 'images/ae/data.json' // the path to the animation json
	});

	var primitiveValues = {
		stdDeviation: 0
	};

	var _tl = gsap.timeline({
		paused: true,
		onStart: () => {
			$(".picList image").eq(0).addClass("is-show")

			gsap.delayedCall(2, function () {
				lot.play()
			});
		},
		onComplete: () => {
			$(".filter-area").get(0).style.filter = 'none';
			$(".index-bannerWrap .banner").addClass("is-show")
		},
	}).to(primitiveValues, {
		duration: 2.5,
		startAt: {
			stdDeviation: 12
		},
		stdDeviation: 0,
		ease: 'power1.out',
		onUpdate: () => {
			$("#goo-1 >feGaussianBlur").get(0).setAttribute('stdDeviation', primitiveValues.stdDeviation)
		}
	})

	_tl.play()


	$(".index-bannerWrap .banner").vegas({
	    timer: true,
	    // autoplay: false,
	    delay: 5500,
	    transitionDuration: 2400,
	    slides: [{
	        src: "images/index-banner-1.jpg"
	    }, {
	        src: "images/index-banner-2.jpg"
	    }, ],
	    walk: function (i, slideSettings) {

	    	var $img = $(".picList image").eq(i)
	    	$img.addClass("is-show").siblings().removeClass("is-show")

	    	gsap.set($img, {
	    		scale: 1,
	    		transformOrigin: 'center',
	    	})

	    	gsap.to($img, {
	    		duration: 9,
	    		scale: 1.4,
	    		transformOrigin: 'center',
	    		overwrite: true,
	    		ease: 'none',
	    	})


	        var objs = $(".vegas-slide-inner");
	        var lw = $(window).width() / 30;
	        var lh = $(window).height() / 20;

	        if (objs.length > 1) {
	            var obj = objs[1]
	        }else{
	            var obj = objs
	        }

	        gsap.to(obj, {
	        	duration: 7.5,
	            scale: 1.12,
	            ease: 'none',
	        })
	    }
	});

	$(window).on("scroll", function () {
		if ($(this).scrollTop() > 99) {
			$(".topmenuWrap-mobile").fadeIn(500)
		} else {
			$(".topmenuWrap-mobile").fadeOut(500)
		}
	})

	$(window).mouseup(function() {
		$(".inner").removeClass("is-active")
	}).mousedown(function() {
		$(".inner").addClass("is-active")
	});

	$(".topmenuList").mouseenter(function(e){
		$(".inner").fadeOut(500)
	}).mouseleave(function(e){
		$(".inner").fadeIn(500).stop(true).fadeIn(500)
	})
</script>