<?php
require_once 'Connections/connect2data.php';

$shopC = $DB->query("SELECT * FROM class_set WHERE c_parent='shopC' AND c_active=1 ORDER BY c_sort ASC");
?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body>
	<?php include 'topmenu.php'; ?>

	<div class="no2-head-area">
		<div class="title">shop</div>
		<div class="content-area">
			<div class="ch">門市據點</div>
			<div class="en">meet your better life</div>
		</div>
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
				<span class="ch">高雄</span>
				<span class="en">Kaohsiung</span>
			</div>

			<div class="line-rl"></div>

			<ul class="shopList">
				<li class="grid-x align-middle">
					<div class="pic-area cell large-shrink">
						<div class="pic"><img src="images/shop-1.jpg"></div>
						<div class="icon"><img src="images/shop-icon-1.svg"></div>
						<div class="block"></div>
					</div>
					<div class="content-area">
						<div class="title">德匠名廚 美術館分公司</div>
						<div class="line-rl"></div>
						<div class="address"><b>A</b>804高雄市鼓山區明誠四路218號</div>
						<div class="week"><b>T</b>星期一～ 六  09:00–20:00</div>
						<div class="phone"><b>P</b>07-522 6888</div>
					</div>
				</li>
				<li class="grid-x align-middle">
					<div class="pic-area cell large-shrink">
						<div class="pic"><img src="images/shop-1.jpg"></div>
						<div class="icon"><img src="images/shop-icon-1.svg"></div>
						<div class="block"></div>
					</div>
					<div class="content-area">
						<div class="title">德匠名廚 美術館分公司</div>
						<div class="line-rl"></div>
						<div class="address"><b>A</b>804高雄市鼓山區明誠四路218號</div>
						<div class="week"><b>T</b>星期一～ 六  09:00–20:00</div>
						<div class="phone"><b>P</b>07-522 6888</div>
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
						<div class="pic"><img src="images/shop-1.jpg"></div>
						<div class="icon"><img src="images/shop-icon-1.svg"></div>
						<div class="block"></div>
					</div>
					<div class="content-area">
						<div class="title">德匠名廚 美術館分公司</div>
						<div class="line-rl"></div>
						<div class="address"><b>A</b>804高雄市鼓山區明誠四路218號</div>
						<div class="week"><b>T</b>星期一～ 六  09:00–20:00</div>
						<div class="phone"><b>P</b>07-522 6888</div>
					</div>
				</li>
				<li class="grid-x align-middle">
					<div class="pic-area cell large-shrink">
						<div class="pic"><img src="images/shop-1.jpg"></div>
						<div class="icon"><img src="images/shop-icon-1.svg"></div>
						<div class="block"></div>
					</div>
					<div class="content-area">
						<div class="title">德匠名廚 美術館分公司</div>
						<div class="line-rl"></div>
						<div class="address"><b>A</b>804高雄市鼓山區明誠四路218號</div>
						<div class="week"><b>T</b>星期一～ 六  09:00–20:00</div>
						<div class="phone"><b>P</b>07-522 6888</div>
					</div>
				</li>
			</ul>
		</section> -->

	</div>

	<?php include 'footer.php'; ?>
</body>

<?php include 'script.php'; ?>

</html>

<script>
	
</script>