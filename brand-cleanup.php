<?php
require_once 'Connections/connect2data.php';

$cleanup = $DB->query("SELECT * FROM data_set, file_set WHERE d_class1='cleanup' AND d_id=file_d_id AND file_type='cleanupCover' AND d_active=1 ORDER BY rand() LIMIT 4");

$download = $DB->query("SELECT * FROM data_set WHERE d_class1='cdownload' AND d_active=1 ORDER BY d_sort ASC");
?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>

	<style>
	body {
		background: #fff;
	}
	</style>
</head>

<body>
	<?php include 'topmenu.php'; ?>

	<div class="cleanupBannerWrap loader-c">
		<div class="content">
			<i>
				<span>追求精湛工藝</span>
			</i>
			<i>
				<span>又兼具機能的你，</span>
			</i>
			<i>
				<span>我們挑選了，</span>
			</i>
			<i>
				<span>來自日本的</span>
			</i>
			<i>
				<span>格調廚具。</span>
			</i>
		</div>

		<div class="logo">
			<div class="deco"><img src="images/cup-deco-1.png"></div>
			<div class="pic"><img src="images/cleanup-logo.svg"></div>
		</div>
	</div>

	<section class="cleanup-section-1">
		<div class="item loader-c">
			<div class="content">
				<div class="title">function style</div>
				<i>
					<span>追求精湛工藝</span>
				</i>
				<i>
					<span>又兼具機能的你，</span>
				</i>
				<i>
					<span>我們挑選了，</span>
				</i>
				<i>
					<span>來自日本的</span>
				</i>
				<i>
					<span>格調廚具。</span>
				</i>
			</div>
		</div>

		<!-- <div class="deco"><img src="images/cup-deco-2.png"></div> -->

		<div class="scroll-down scrolldown"><img src="images/cleanup-scroll.svg"></div>
	</section>

	<section class="cleanup-section-2 grid-x">
		<div class="pic-area cell large-shrink">
			<div class="head-area hide-for-large">
				<div class="en">introduction</div>
				<div class="ch">品牌簡介</div>
			</div>
			<div class="pic"><img src="images/cleanup-sc-2.jpg"></div>
		</div>
		<div class="item-area cell large-auto">
			<div class="deco-1"><img src="images/cup-deco-2.png"></div>
			<div class="deco-2"><img src="images/cup-deco-3.png"></div>

			<div class="content-area">
				<div class="title">
					烹調、盛盤或收拾都變得<br>
					更有效率。
				</div>
				<div class="content">
					從新審視廚房的所有機能，專注於創新的可能，一步一步反覆進行提升機能的作業，2018年Cleanup不鏽鋼系統廚具，全新系列CENTRO隆重登場，跨越世代與國界，擁有持續受到喜愛的價值，適合用來款待全世界，我們的目標是“成就如是高尚格調的日本廚具”。
				</div>
			</div>
		</div>
	</section>

	<div class="brand-cleanup-calendar">
		<ul class="fabric-sliderList">

			<li class="index-calendar-1 m-full" data-i="0">
				<div class="calendar grid-x align-middle show-for-large">
					<div class="pic">
						<!-- <img src="images/more-brand.png" class="show-for-large" width="41"> -->
						<div class="pic-area">
							<div class="sunny"></div>
							<div class="circle"></div>
							<div class="plus"></div>
						</div>
					</div>
					<div class="title">查看更多款式吊櫃</div>
				</div>

				<div class="title-area flex-container align-top">
					<div class="calendar grid-x align-middle hide-for-large">
						<div class="pic">
							<!-- <img src="images/more-brand-mobile.png" class="hide-for-large" width="28"> -->
							<div class="pic-area">
								<div class="sunny"></div>
								<div class="circle"></div>
								<div class="plus"></div>
							</div>
						</div>
						<div class="title">查看更多款式吊櫃</div>
					</div>

					<ul class="list">
						<li>
							<span>+</span>
							升降高度45公分
						</li>
						<li>
							<span>+</span>
							開口尺寸38公分
						</li>
						<li>
							<span>+</span>
							最大承載重量8公斤
						</li>
					</ul>

					<div class="content">
						(下拉五金層板吊櫃/全隱藏手動升降收納吊櫃/電動升降櫃)<br>
						為了讓吊櫃更方便使用，輕鬆一個手拉動作就能讓收納在上方的餐具、料理器具、調味品罐等降至眼前。備有收納型和瀝水型，適合收納料理時使用率高的物品。
					</div>

					<!-- <div class="intro">烹調、盛盤或收拾都變得更有效率。</div> -->
					<div class="ch">
						多功能收納吊櫃
					</div>

					<div class="deco"><img src="images/cup-deco-4.png"></div>
				</div>

				<div class="animate-area">
					<div class="pic"></div>
				</div>
			</li>

			<li class="index-calendar-2 m-full" data-i="1">
				<!-- <div class="calendar grid-x align-middle">
					<div class="pic"><img src="images/more-brand.png" width="41"></div>
					<div class="title">查看更多款式吊櫃</div>
				</div> -->

				<div class="title-area flex-container align-top">
					<!-- <ul class="list">
						<li>
							<span>+</span>
							新發想的下拉系統。
						</li>
						<li>
							<span>+</span>
							方便收納,同時方便取得。
						</li>
						<li>
							<span>+</span>
							櫃體收起時呈現一體成型的美感。
						</li>
						<li>
							<span>+</span>
							易保養、防刮傷。
						</li>
					</ul> -->

					<div class="content">
						轉角推車搭配側邊雙層收納櫃讓轉角空間充分利用，從高身瓶到小物品，發揮驚人的收納力。<br>
						轉角推車可移至需要的地方，使料理更省力；側邊收納物品，只需拉出即可輕鬆拿取深處的物品，活動式的設計讓轉角清潔無死角。
					</div>

					<!-- <div class="intro">烹調、盛盤或收拾都變得更有效率。</div> -->
					<div class="ch">
						轉角推車收納櫃
					</div>
				</div>

				<div class="animate-area">
					<div class="pic"></div>

					<div class="deco-1"><img src="images/cup-deco-12.png"></div>
					<div class="deco-2"><img src="images/cup-deco-13.png"></div>
				</div>
			</li>

			<li class="index-calendar-3 m-full" data-i="2">
				<!-- <div class="calendar grid-x align-middle show-for-large">
					<div class="pic">
						<img src="images/more-brand.png" class="show-for-large" width="41">
					</div>
					<div class="title">查看更多款式流水槽</div>
				</div> -->

				<div class="title-area flex-container align-top">
					<!-- <div class="calendar grid-x align-middle hide-for-large">
						<div class="pic">
							<img src="images/more-brand-mobile.png" class="hide-for-large" width="28">
						</div>
						<div class="title">查看更多款式流水槽</div>
					</div> -->

					<!-- <ul class="list">
						<li>
							<span>+</span>
							新發想的下拉系統。
						</li>
						<li>
							<span>+</span>
							方便收納,同時方便取得。
						</li>
						<li>
							<span>+</span>
							櫃體收起時呈現一體成型的美感。
						</li>
						<li>
							<span>+</span>
							易保養、防刮傷。
						</li>
					</ul> -->

					<div class="content">
						利用坡度設計而成的導流水槽，透過水流可將殘渣或髒汙匯集至排水口，時刻保持水槽內部清爽潔淨。<br>
						水槽表面獨特的e-coat(親水性陶瓷特殊塗料)，讓水能滲入汙垢下方使汙垢浮起，就連難以清除的髒污也能輕鬆去除。<br>
						不易留下刮痕的浮凸設計，減少餐具、器具接觸的面積，讓使用上不易產生刮痕，即使有刮痕也不明顯。
					</div>

					<!-- <div class="intro">烹調、盛盤或收拾都變得更有效率。</div> -->
					<div class="ch">
						超進化導流水槽
					</div>

					<div class="deco"><img src="images/cup-deco-16.png"></div>
				</div>

				<div class="animate-area">
					<div class="pic">
						<div class="video-container">
							<video playsinline autoplay muted loop src="images/backflow.mp4" id="myVideo"></video>
						</div>
					</div>

					<div class="deco-1"><img src="images/cup-deco-14.png"></div>
					<div class="deco-2"><img src="images/cup-deco-15.png"></div>
				</div>
			</li>

			<li class="index-calendar-4 m-full" data-i="3">
				<!-- <div class="calendar grid-x align-middle show-for-large">
					<div class="pic">
						<img src="images/more-brand.png" class="show-for-large" width="41">
					</div>
					<div class="title">查看更多款式桶身/div>
				</div> -->

				<div class="title-area flex-container align-top">
					<!-- <div class="calendar grid-x align-middle hide-for-large">
						<div class="pic">
							<img src="images/more-brand-mobile.png" class="hide-for-large" width="28">
						</div>
						<div class="title">查看更多款式桶身/div>
					</div> -->

					<ul class="list">
						<li>
							<span>+</span>
							不易生鏽、耐熱、耐腐蝕
						</li>
						<li>
							<span>+</span>
							不易殘留水漬與油漬
						</li>
						<li>
							<span>+</span>
							髒污輕輕一擦即可保持清潔
						</li>
						<li>
							<span>+</span>
							不易發霉與附著異味
						</li>
						<li>
							<span>+</span>
							使用年限長，較為環保
						</li>
					</ul>

					<div class="content">
						環保不鏽鋼櫃體NSSC® FW1，在高溫潮濕的環境也能發揮良好的耐久性，Cleanup連看不見的地方皆採用頂級不鏽鋼材質。不僅耐熱、耐腐蝕，也不容易發霉與附著異味，使用年限長，且80%以上可回收再利用，極為環保。
					</div>

					<!-- <div class="intro">烹調、盛盤或收拾都變得更有效率。</div> -->
					<div class="ch">
						不鏽鋼桶身
					</div>

					<div class="deco"><img src="images/cup-deco-11.png"></div>
				</div>

				<div class="animate-area">
					<div class="pic"></div>
				</div>
			</li>

			<li class="index-calendar-5 m-full" data-i="3">
				<!-- <div class="calendar grid-x align-middle show-for-large">
					<div class="pic">
						<img src="images/more-brand.png" class="show-for-large" width="41">
					</div>
					<div class="title">查看更多款式桶身/div>
				</div> -->

				<div class="title-area flex-container align-top">
					<!-- <div class="calendar grid-x align-middle hide-for-large">
						<div class="pic">
							<img src="images/more-brand-mobile.png" class="hide-for-large" width="28">
						</div>
						<div class="title">查看更多款式桶身/div>
					</div> -->

					<!-- <ul class="list">
						<li>
							<span>+</span>
							新發想的下拉系統。
						</li>
						<li>
							<span>+</span>
							方便收納,同時方便取得。
						</li>
						<li>
							<span>+</span>
							櫃體收起時呈現一體成型的美感。
						</li>
						<li>
							<span>+</span>
							易保養、防刮傷。
						</li>
					</ul> -->

					<div class="content">
						足元抽由Cleanup於1999年首創開發，轟動日本廚具界，獨特的足元抽設計將空間利用極致，增加18%-25%的收納力，適合收納鍋具、小家電與備用品。
					</div>

					<!-- <div class="intro">烹調、盛盤或收拾都變得更有效率。</div> -->
					<div class="ch">
						業界獨創足元抽設計
					</div>

					<div class="deco"><img src="images/cup-deco-17.png"></div>
				</div>

				<div class="animate-area">
					<div class="pic"></div>
				</div>
			</li>
		</ul>
	</div>

	<div class="cleanup-section-3 grid-x">
		<div class="pic-area cell shrink">

			<!-- <div class="spaceSliderDotWrap">
				<ul class="spaceSliderDot grid-x">
					<li class="cell shrink current">
						<div class="item-area align-center-middle">
							<div class="pic"><img src="images/bs-1.png"></div>
							<div class="circle"><img src="images/bs-circle.svg"></div>
						</div>
						<div class="num">01</div>
					</li>
					<li class="cell shrink">
						<div class="item-area align-center-middle">
							<div class="pic"><img src="images/bs-1.png"></div>
							<div class="circle"><img src="images/bs-circle.svg"></div>
						</div>
						<div class="num">02</div>
					</li>
					<li class="cell shrink">
						<div class="item-area align-center-middle">
							<div class="pic"><img src="images/bs-1.png"></div>
							<div class="circle"><img src="images/bs-circle.svg"></div>
						</div>
						<div class="num">03</div>
					</li>
				</ul>

				<div class="preview"><img src="images/bs-next.svg"></div>
			</div> -->

			<ul class="spaceSliderImg">
				<li>
					<div class="pic" style="background: url(images/bs-slider-1.jpg) center center / cover no-repeat;"></div>
				</li>
				<!-- <li><img src="images/bs-slider-1.jpg"></li> -->
				<!-- <li><img src="images/bs-slider-1.jpg"></li> -->
			</ul>
		</div>
		<div class="head-area cell auto">
			<div class="title">
				顏色與<br>
				空間美學
			</div>
			<!-- <div class="content">
				重新檢視廚性全面升級，打造出無壓力的料理環境，置中設計。重新檢視廚性全面環境，置中設計。視廚性全面環境，置中設計。
			</div> -->
			<div class="deco-1"><img src="images/cup-deco-5.png"></div>
			<div class="deco-2"><img src="images/cup-deco-6.png"></div>
		</div>
	</div>

	<div class="cleanup-section-4">

		<div class="Wrap">

			<div class="head-area grid-x align-middle align-justify">
				<div class="en cell large-shrink">project</div>
				<div class="ch cell large-shrink">經典案例</div>

				<div class="deco"><img src="images/cup-deco-7.png"></div>
			</div>

			<div class="item-area grid-x">
				<div class="content-area cell shrink show-for-large">
					<!-- <div class="content">重新檢視廚性全面升級,打造出無壓力的料理環境,置中設計。重新檢視廚性全面環境,置中設計。視廚性全面環境,置中設計。</div> -->
					<div class="deco"><img src="images/cup-deco-8.png"></div>
				</div>

				<div class="ryder-nd-slider-wrap cell large-auto">
					<ul class="ryder-nd-slider-list">

						<?php foreach($cleanup as $row) : ?>
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
							<div class="pic" style="background: url('images/bs-up-1.jpg') center center / cover"></div>
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
							<div class="pic" style="background: url('images/bs-up-2.jpg') center center / cover"></div>
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
							<div class="pic" style="background: url('images/bs-up-1.jpg') center center / cover"></div>
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
							<div class="pic" style="background: url('images/bs-up-2.jpg') center center / cover"></div>
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

	<section class="downloadWrap clean-up">
		<div class="head-area grid-x align-middle align-justify">
			<div class="en cell large-shrink">download</div>
			<div class="ch cell large-shrink">型錄下載</div>

			<div class="deco"><img src="images/cup-deco-9.png"></div>
		</div>

		<ul class="downloadList">

			<?php foreach($download as $row) : ?>
				<li class="grid-x align-middle">
					<div class="date cell auto"><?= date("Y. m", strtotime($row['d_date'])) ?></div>
					<div class="title cell auto"><?=$row['d_title']?></div>
					<div class="more cell auto">
						<div class="before">reading more</div>
						<div class="after">
							<a href="<?=$row['d_data1']?>" target="_blank"><img src="images/download-red.svg"></a>
						</div>
					</div>
				</li>
			<?php endforeach ?>

			<!-- <li class="grid-x align-middle">
				<div class="date cell auto">2020.2</div>
				<div class="title cell auto">CENTRO-中文目錄</div>
				<div class="more cell auto">
					<div class="before">reading more</div>
					<div class="after">
						<a href="javascript:;"><img src="images/download-red.svg"></a>
					</div>
				</div>
			</li>
			<li class="grid-x align-middle">
				<div class="date cell auto">2020.2</div>
				<div class="title cell auto">CENTRO-中文目錄</div>
				<div class="more cell auto">
					<div class="before">reading more</div>
					<div class="after">
						<a href="javascript:;"><img src="images/download-red.svg"></a>
					</div>
				</div>
			</li>
			<li class="grid-x align-middle">
				<div class="date cell auto">2020.2</div>
				<div class="title cell auto">CENTRO-中文目錄</div>
				<div class="more cell auto">
					<div class="before">reading more</div>
					<div class="after">
						<a href="javascript:;"><img src="images/download-red.svg"></a>
					</div>
				</div>
			</li>
			<li class="grid-x align-middle">
				<div class="date cell auto">2020.2</div>
				<div class="title cell auto">CENTRO-中文目錄</div>
				<div class="more cell auto">
					<div class="before">reading more</div>
					<div class="after">
						<a href="javascript:;"><img src="images/download-red.svg"></a>
					</div>
				</div>
			</li> -->
		</ul>
	</section>

	<section class="entranceWrap">
		<ul class="entrance clean-up text-center grid-x">
			<li><a href="contact.php" target="_blank">
				<div class="title">
					<div class="en">contact</div>
					<span>聯絡我們</span>
				</div>
				<div class="slogan">meet your better life</div>
			</a></li>

			<li><a href="http://cleanup.jp/" target="_blank">
				<div class="title no-en">
					<div class="en">Cleanup</div>
					<span>德匠名厨</span>
				</div>
				<div class="slogan">official website.</div>
			</a></li>
		</ul>

		<div class="deco"><img src="images/cup-deco-10.png"></div>
	</section>
	
	<div class="fabric-fancyWrap" data-i="0">
		<div class="closeBlock"></div>

		<div class="fabric-fancy-container">
			<div class="close"><img class="lazyload" src="images/fancy-close.svg"></div>

			<div class="fabric-fancy-sliderWrap">

				<ul class="fabric-fancy-sliderList">
					<li>
						<div class="pic s2"><video autoplay muted playsinline loop src="images/video/cleanup-1.mp4"></video></div>
						<div class="title">全隱藏下拉櫃</div>
					</li>
					<li>
						<div class="pic"><video autoplay muted playsinline loop src="images/video/cleanup-2.mp4"></video></div>
						<div class="title">全隱藏下拉櫃</div>
					</li>
					<li>
						<div class="pic"><video autoplay muted playsinline loop src="images/video/cleanup-3.mp4"></video></div>
						<div class="title">半隱藏下拉櫃</div>
					</li>
					<li>
						<div class="pic s1"><video autoplay muted playsinline loop src="images/video/cleanup-4.mp4"></video></div>
						<div class="title">手動升降櫃</div>
					</li>
				</ul>
				
				<div class="fabric-fancy-prev"><img src="images/fabric-prev.svg" width="45"></div>
				<div class="fabric-fancy-next"><img src="images/fabric-next.svg" width="45"></div>
				
				<ul class="fabric-fancy-dots grid-x align-center">
					<li class="cell shrink current">
						<div class="num">01</div>
					</li>
					<li class="cell shrink">
						<div class="num">02</div>
					</li>
					<li class="cell shrink">
						<div class="num">03</div>
					</li>
					<li class="cell shrink">
						<div class="num">04</div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="fabric-fancyWrap" data-i="1">
		<div class="closeBlock"></div>

		<div class="fabric-fancy-container">
			<div class="close"><img class="lazyload" src="images/fancy-close.svg"></div>

			<div class="fabric-fancy-sliderWrap">

				<ul class="fabric-fancy-sliderList">
					<li>
						<div class="pic"><video autoplay muted playsinline loop src="images/video/cleanup-1.mp4"></video></div>
						<div class="title">自動升降吊櫃</div>
					</li>
					<li>
						<div class="pic"><video autoplay muted playsinline loop src="images/video/cleanup-2.mp4"></video></div>
						<div class="title">自動升降吊櫃</div>
					</li>
				</ul>

				<div class="fabric-fancy-prev"><img src="images/fabric-prev.svg" width="45"></div>
				<div class="fabric-fancy-next"><img src="images/fabric-next.svg" width="45"></div>

				<ul class="fabric-fancy-dots grid-x align-center">
					<li class="cell shrink current">
						<div class="num">01</div>
					</li>
					<li class="cell shrink">
						<div class="num">02</div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="fabric-fancyWrap" data-i="2">
		<div class="closeBlock"></div>

		<div class="fabric-fancy-container">
			<div class="close"><img class="lazyload" src="images/fancy-close.svg"></div>

			<div class="fabric-fancy-sliderWrap">

				<ul class="fabric-fancy-sliderList">
					<li>
						<div class="pic"><video autoplay muted playsinline loop src="images/video/cleanup-1.mp4"></video></div>
						<div class="title">自動升降吊櫃</div>
					</li>
					<li>
						<div class="pic"><video autoplay muted playsinline loop src="images/video/cleanup-2.mp4"></video></div>
						<div class="title">自動升降吊櫃</div>
					</li>
					<li>
						<div class="pic"><video autoplay muted playsinline loop src="images/video/cleanup-3.mp4"></video></div>
						<div class="title">自動升降吊櫃</div>
					</li>
					<li>
						<div class="pic s1"><video autoplay muted playsinline loop src="images/video/cleanup-4.mp4"></video></div>
						<div class="title">自動升降吊櫃</div>
					</li>
				</ul>

				<div class="fabric-fancy-prev"><img src="images/fabric-prev.svg" width="45"></div>
				<div class="fabric-fancy-next"><img src="images/fabric-next.svg" width="45"></div>

				<ul class="fabric-fancy-dots grid-x align-center">
					<li class="cell shrink current">
						<div class="num">01</div>
					</li>
					<li class="cell shrink">
						<div class="num">02</div>
					</li>
					<li class="cell shrink">
						<div class="num">03</div>
					</li>
					<li class="cell shrink">
						<div class="num">04</div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="fabric-fancyWrap" data-i="3">
		<div class="closeBlock"></div>

		<div class="fabric-fancy-container">
			<div class="close"><img class="lazyload" src="images/fancy-close.svg"></div>

			<div class="fabric-fancy-sliderWrap">

				<ul class="fabric-fancy-sliderList">
					<li>
						<div class="pic"><video autoplay muted playsinline loop src="images/video/cleanup-1.mp4"></video></div>
						<div class="title">自動升降吊櫃</div>
					</li>
					<li>
						<div class="pic"><video autoplay muted playsinline loop src="images/video/cleanup-2.mp4"></video></div>
						<div class="title">自動升降吊櫃</div>
					</li>
					<li>
						<div class="pic"><video autoplay muted playsinline loop src="images/video/cleanup-3.mp4"></video></div>
						<div class="title">自動升降吊櫃</div>
					</li>
					<li>
						<div class="pic s1"><video autoplay muted playsinline loop src="images/video/cleanup-4.mp4"></video></div>
						<div class="title">自動升降吊櫃</div>
					</li>
				</ul>

				<div class="fabric-fancy-prev"><img src="images/fabric-prev.svg" width="45"></div>
				<div class="fabric-fancy-next"><img src="images/fabric-next.svg" width="45"></div>

				<ul class="fabric-fancy-dots grid-x align-center">
					<li class="cell shrink current">
						<div class="num">01</div>
					</li>
					<li class="cell shrink">
						<div class="num">02</div>
					</li>
					<li class="cell shrink">
						<div class="num">03</div>
					</li>
					<li class="cell shrink">
						<div class="num">04</div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>

<?php include 'script.php'; ?>

</html>

<script>

	$(function () {
		// $(".cleanupBannerWrap").fadeOut(1000)

		setTimeout(function() {
			$(".cleanupBannerWrap.loader-c").addClass("is-show")
		}, 1000)
		setTimeout(function() {
			$(".cleanupBannerWrap.loader-c").removeClass("is-show")
		}, 5000)
		setTimeout(function() {
			$(".cleanupBannerWrap").fadeOut(1000)
		}, 6000)
		setTimeout(function() {
			$(".cleanup-section-1 .item").addClass("is-show")
		}, 6500)

		$(".scrolldown").on("click", function () {
			gsap.to(window, {
				duration: 1.2,
				scrollTo: $(window).height(),
				ease: Power2.easeInOut,
			});
		})

		window.mouseClose = function () {
			$("#arrow").hide()
			$("#close").show()
		}


		window.mouseArrow = function () {
			$("#arrow").show()
			$("#close").hide()
		}


		$z = 0;
		$(".fabric-sliderList .calendar").on("click", function () {
			var _i = $(this).parents("li").data("i")
			
			$(".fabric-fancyWrap[data-i="+ _i +"]").addClass("is-show")

			if($z == 0) {

				$z = 1;

				$(".fabric-fancyWrap").each(function (i, el) {

					$(".fabric-fancy-sliderList", el).flickity('destroy');

					var $ffSlider = $('.fabric-fancy-sliderList', el).flickity({
						"prevNextButtons": false,
						"pageDots": false,
						"wrapAround": true,
						"autoPlay": false,
						"cellAlign": "left",
						"imagesLoaded": true,
						"lazyLoad": 3,
						"arrowShape": ""
					});

					$ffSlider.on( 'change.flickity', function( event, index ) {
						$(".fabric-fancy-dots li", el).eq( index ).addClass("current").siblings().removeClass("current");
					});

					$(".fabric-fancy-dots li", el).on( "click" , function() {
						var index = $(this).index();

						$ffSlider.flickity( 'select', index );
						$(".fabric-fancy-dots li", el).eq(index).addClass("active").siblings().removeClass("active");

					})

					$(".fabric-fancy-sliderWrap .fabric-fancy-prev", el).on("click", function () {
						$ffSlider.flickity('previous');
					})

					$(".fabric-fancy-sliderWrap .fabric-fancy-next", el).on("click", function () {
						$ffSlider.flickity('next');
					})

				})

			}

			mouseClose()

		})

		$(".fabric-fancyWrap .close, .fabric-fancyWrap .closeBlock").on("click", function () {
			$(".fabric-fancyWrap").removeClass("is-show")
			mouseArrow()
		})

		

		$(".downloadList li .more").on("click", function() {
			$(this).closest("li").addClass("current").siblings().removeClass("current")
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

		

		ScrollTrigger.create({
			trigger: ".index-calendar-1",
			start: "top 60%",
			onToggle: ({progress, direction, isActive}) => {
				if (isActive) {
					$(".index-calendar-1").addClass("is-show")

					if (device != 'desktop') {
						gsap.to(".index-calendar-1 .animate-area .pic", {
							duration: 2,
							backgroundPosition: "0 100%",
							ease: SteppedEase.config(5),
						});
					}
				}
			}
		});

		if (device == 'desktop') {
			gsap.to(".index-calendar-1 .animate-area .pic", {
				scrollTrigger: {
					trigger: ".index-calendar-1",
					toggleActions: "play none none none",
					start: "top 0%",
					end: "1000 0%",
					scrub: true,
					pin: true,
					pinSpacing: true,
				},
				backgroundPosition: "0 100%",
				ease: SteppedEase.config(5),
			});
		}




		ScrollTrigger.create({
			trigger: ".index-calendar-2",
			start: "top 60%",
			onToggle: ({progress, direction, isActive}) => {
				if (isActive) {
					$(".index-calendar-2").addClass("is-show")

					if (device != 'desktop') {
						gsap.to(".index-calendar-2 .animate-area .pic", {
							duration: 2,
							backgroundPosition: "0 100%",
							ease: SteppedEase.config(10),
						});
					}
				}
			}
		});


		if (device == 'desktop') {
			gsap.to(".index-calendar-2 .animate-area .pic", {
				scrollTrigger: {
					trigger: ".index-calendar-2",
					toggleActions: "play none none none",
					start: "top 0%",
					end: "1000 0%",
					scrub: true,
					pin: true,
					pinSpacing: true,
				},
				backgroundPosition: "0 100%",
				ease: SteppedEase.config(10),
			});
		}

		

		ScrollTrigger.create({
			trigger: ".index-calendar-3",
			start: "top 60%",
			onToggle: ({progress, direction, isActive}) => {
				if (isActive) {
					$(".index-calendar-3").addClass("is-show")

					if (device != 'desktop') {
						gsap.to(".index-calendar-3 .animate-area .pic", {
							duration: 2,
							backgroundPosition: "0 100%",
							ease: SteppedEase.config(5),
						});
					}
				}
			}
		});


		if (device == 'desktop') {
			gsap.to(".index-calendar-3 .animate-area .pic", {
				scrollTrigger: {	
					trigger: ".index-calendar-3",
					toggleActions: "play none none none",
					start: "top 0%",
					// end: "1000 0%",
					end: "200 0%",
					scrub: true,
					pin: true,
					pinSpacing: true,
				},
				backgroundPosition: "0 100%",
				ease: SteppedEase.config(5),
			});
		}



		ScrollTrigger.create({
			trigger: ".index-calendar-4",
			start: "top 60%",
			onToggle: ({progress, direction, isActive}) => {
				if (isActive) {
					$(".index-calendar-4").addClass("is-show")

					if (device != 'desktop') {
						gsap.to(".index-calendar-4 .animate-area .pic", {
							duration: 2,
							backgroundPosition: "0 100%",
							ease: SteppedEase.config(5),
						});
					}
				}
			}
		});


		if (device == 'desktop') {
			gsap.to(".index-calendar-4 .animate-area .pic", {
				scrollTrigger: {
					trigger: ".index-calendar-4",
					toggleActions: "play none none none",
					start: "top 0%",
					end: "1000 0%",
					scrub: true,
					pin: true,
					pinSpacing: true,
				},
				backgroundPosition: "0 100%",
				ease: SteppedEase.config(5),
			});
		}


		ScrollTrigger.create({
			trigger: ".index-calendar-5",
			start: "top 60%",
			onToggle: ({progress, direction, isActive}) => {
				if (isActive) {
					$(".index-calendar-5").addClass("is-show")

					if (device != 'desktop') {
						gsap.to(".index-calendar-5 .animate-area .pic", {
							duration: 2,
							backgroundPosition: "0 100%",
							ease: SteppedEase.config(3),
						});
					}
				}
			}
		});


		if (device == 'desktop') {
			gsap.to(".index-calendar-5 .animate-area .pic", {
				scrollTrigger: {
					trigger: ".index-calendar-5",
					toggleActions: "play none none none",
					start: "top 0%",
					end: "1000 0%",
					scrub: true,
					pin: true,
					pinSpacing: true,
				},
				backgroundPosition: "0 100%",
				ease: SteppedEase.config(3),
			});
		}



		$(".spaceSliderDot li").on("click", function() {
			$(this).addClass("current").siblings().removeClass("current")
		})




		var $pbSlider = $('.spaceSliderImg').flickity({
			"prevNextButtons": false,
			"pageDots": false,
			"wrapAround": true,
			"autoPlay": 8000,
			"cellAlign": "left",
			"imagesLoaded": true,
			"fade": true,
			"lazyLoad": 3,
			"arrowShape": ""
		});

		var cellElements = $('.spaceSliderImg').flickity('getCellElements');

		$pbSlider.on( 'change.flickity', function( event, index ) {
			$(".spaceSliderDot li").eq(index).addClass("current").siblings().removeClass("current");
		});

		$(".preview").on("click", function() {
			$pbSlider.flickity('next');
		})

		$(".spaceSliderDot li").on( "click" , function() {
			var index = $(this).index();

			$pbSlider.flickity( 'select', index );
			$(".spaceSliderDot li").eq(index).addClass("current").siblings().removeClass("current");

		})

	})

</script>