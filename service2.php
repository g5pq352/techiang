<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>

	<style>
	body {
		background: #0b0b0d;
	}
	.footerWrap {
		margin-top: 0;
		background: #0b0b0d;
	}
	</style>
</head>

<body>
	<?php include 'topmenu.php'; ?>

	<div class="about-bannerWrap service">
		<div class="head-area text-center">
			<div class="en">one-stop services</div>
			<div class="ch">
				從傾聽、設計到完工,細心服務,專業規劃<br>
				一條龍作業,讓您的夢想廚房實現。
			</div>
		</div>

		<div class="pic" style="background: url(images/service-banner.jpg) center center / cover no-repeat;"></div>

		<div class="scroll-down scrolldown"><img src="images/about-scroll-down.svg"></div>
	</div>

	<div class="serviceWrap">

		<div class="serviceMap">
			
		</div>

		<div class="serviceHead">
			
		</div>

		<div class="serviceList">

			<section class="grid-x">
				<!-- <div class="bg"><img src="images/service-bg-1.svg"></div> -->
				<div class="cell auto" style="background: #111111;">
					<ul class="titleList">
						<li class="grid-x align-middle current" style="color:#ffffff;">
							<div class="en">visit</div>
							<div class="ch">門市參觀</div>
						</li>
					</ul>

					<div class="stepAll">
						<div class="title">STEP 01.</div>

						<ul class="stepList">
							<li>·建設公司</li>
							<li>·設計公司/客戶</li>
							<li>·客戶</li>
						</ul>
					</div>
				</div>
				<div class="cell auto" style="background: url(images/service-1.jpg) center center / cover;"></div>
			</section>

			<section class="grid-x">
				<!-- <div class="bg"><img src="images/service-bg-2.svg"></div> -->
				<div class="cell auto" style="background: #f0f1f1;">
					<ul class="titleList">
						<li class="grid-x align-middle current">
							<div class="en">plan</div>
							<div class="ch">圖面規劃</div>
						</li>
					</ul>

					<div class="stepAll">
						<div class="title">STEP 02.</div>

						<ul class="stepList">
							<li>·需求溝通</li>
							<li>·圖面討論</li>
							<li>·廚具規劃說明</li>
						</ul>
					</div>
				</div>
				<div class="cell auto" style="background: url(images/service-2.jpg) center center / cover;"></div>
			</section>

			<section class="grid-x">
				<!-- <div class="bg"><img src="images/service-bg-3.svg"></div> -->
				<div class="cell auto" style="background: #111111;">
					<ul class="titleList">
						<li class="grid-x align-middle current">
							<div class="en">offer</div>
							<div class="ch">報價簽約</div>
						</li>
					</ul>

					<div class="stepAll">
						<div class="title">STEP 03.</div>

						<ul class="stepList">
							<li>·報價</li>
							<li>·簽約</li>
						</ul>
					</div>
				</div>
				<div class="cell auto" style="background: url(images/service-3.jpg) center center / cover;"></div>
			</section>

			<section class="grid-x">
				<!-- <div class="bg"><img src="images/service-bg-4.svg"></div> -->
				<div class="cell auto" style="background: #f0f1f1;">
					<ul class="titleList">
						<li class="grid-x align-middle current">
							<div class="en">measure</div>
							<div class="ch">現場丈量</div>
						</li>
					</ul>

					<div class="stepAll">
						<div class="title">STEP 04.</div>

						<ul class="stepList">
							<li>·水電圖</li>
							<li>·工地管理</li>
							<li>·廚具下單</li>
						</ul>
					</div>
				</div>
				<div class="cell auto" style="background: url(images/service-4.jpg) center center / cover;"></div>
			</section>

			<section class="grid-x">
				<!-- <div class="bg"><img src="images/service-bg-5.svg"></div> -->
				<div class="cell auto" style="background: #000;">
					<ul class="titleList">
						<li class="grid-x align-middle current">
							<div class="en">finished</div>
							<div class="ch">廚具完工</div>
						</li>
					</ul>

					<div class="stepAll">
						<div class="title">STEP 05.</div>

						<ul class="stepList">
							<li>·運送安排</li>
							<li>·安裝</li>
						</ul>
					</div>
				</div>
				<div class="cell auto" style="background: url(images/service-5.jpg) center center / cover;"></div>
			</section>

			<section style="background: url(images/service-6.jpg) center center / cover;">
				<!-- <div class="bg"><img src="images/service-bg-6.svg"></div> -->
				<div class="cell auto">
					<ul class="titleList">
						<li class="grid-x align-middle current">
							<div class="en">service</div>
							<div class="ch">售後服務</div>
						</li>
					</ul>

					<div class="stepAll">
						<div class="title">STEP 06.</div>

						<ul class="stepList">
							<li>·零售商品</li>
							<li>·教導商品</li>
							<li>·維持服務</li>
						</ul>
					</div>
				</div>
				<div class="cell auto"></div>
			</section>

		</div>
		
	</div>

	<div class="appointmentWrap">

		<div class="appointment"><a href="javascript:;">

			<div class="title">
				<div class="en">appointment</div>
				<span>預約參觀</span>
			</div>

		</a></div>

	</div>

	<?php include 'footer-black.php'; ?>
</body>

<?php include 'script.php'; ?>

</html>

<script>

	$(".serviceList section").each(function(index) {

		var _now = index + 1;
		var _height = 120 + (40 * index);

		gsap.timeline({
			scrollTrigger: {
				trigger: $("section:nth-child(" + _now + ")"),
				toggleActions: "play reverse play reverse",
				start: "top top+=120px",
				end: "-150px bottom",
				// markers: {
				// 	startColor: "red",
				// 	endColor: "red",
				// 	fontSize: "12px"
				// },
				onEnter: () => {
					$("section:nth-child(" + _now + ")").find(".titleList").addClass("is-stack")
					
					$("section:nth-child(" + _now + ")").find(".titleList").css("top", _height)


					$("section:nth-child(" + index + ")").find(".titleList li").removeClass("current")
				},
				onEnterBack: () => {
					$("section:nth-child(" + _now + ")").find(".titleList").removeClass("is-stack")

					$("section:nth-child(" + _now + ")").find(".titleList").css("top", "120px")


					$("section:nth-child(" + _now + ")").find(".titleList li").addClass("current")
				},
				onUpdate: ({progress, direction, isActive}) => {
					console.log(progress, direction, isActive, _now)

					console.log()

					if(progress == 0) {
						$("section:nth-child(" + (_now - 1) + ")").find(".titleList li").addClass("current")
					}

					// if(_now == 6 && progress == 1) {
					// 	$("section:nth-child(" + (_now) + ")").find(".titleList li").removeClass("is-stack")
					// 	$(".titleList").addClass("is-end")

					// 	$("section:nth-child(1)").find(".titleList").css("top", "4990px")
					// 	$("section:nth-child(2)").find(".titleList").css("top", "4060px")
					// 	$("section:nth-child(3)").find(".titleList").css("top", "3130px")
					// 	$("section:nth-child(4)").find(".titleList").css("top", "2200px")
					// 	$("section:nth-child(5)").find(".titleList").css("top", "1270px")
					// } else {
					// 	$(".titleList").removeClass("is-end")
					// }
				}
			},
		})

	})

	// gsap.timeline({
	// 	scrollTrigger: {
	// 		trigger: $("section:nth-child(1)"),
	// 		toggleActions: "play reverse play reverse",
	// 		start: "top top",
	// 		end: "bottom bottom",
	// 		markers: {
	// 			startColor: "red",
	// 			endColor: "red",
	// 			fontSize: "12px"
	// 		},
	// 		onEnter: () => {
	// 			$("section:nth-child(1)").find(".titleList").addClass("is-stack")
	// 		},
	// 		onEnterBack: () => {
	// 			$("section:nth-child(1)").find(".titleList").removeClass("is-stack")
	// 		},
	// 	},
	// })

	// gsap.timeline({
	// 	scrollTrigger: {
	// 		trigger: $("section:nth-child(2)"),
	// 		toggleActions: "play reverse play reverse",
	// 		start: "top top",
	// 		end: "bottom bottom",
	// 		markers: {
	// 			startColor: "red",
	// 			endColor: "red",
	// 			fontSize: "12px"
	// 		},
	// 		onEnter: () => {
	// 			$("section:nth-child(2)").find(".titleList").addClass("is-stack")
	// 		},
	// 		onEnterBack: () => {
	// 			$("section:nth-child(2)").find(".titleList").removeClass("is-stack")
	// 		},
	// 	},
	// })

	// gsap.timeline({
	// 	scrollTrigger: {
	// 		trigger: $("section:nth-child(3)"),
	// 		toggleActions: "play reverse play reverse",
	// 		start: "top top",
	// 		end: "bottom bottom",
	// 		markers: {
	// 			startColor: "red",
	// 			endColor: "red",
	// 			fontSize: "12px"
	// 		},
	// 		onEnter: () => {
	// 			$("section:nth-child(3)").find(".titleList").addClass("is-stack")
	// 		},
	// 		onEnterBack: () => {
	// 			$("section:nth-child(3)").find(".titleList").removeClass("is-stack")
	// 		},
	// 	},
	// })

	// gsap.timeline({
	// 	scrollTrigger: {
	// 		trigger: $("section:nth-child(4)"),
	// 		toggleActions: "play reverse play reverse",
	// 		start: "top top",
	// 		end: "bottom bottom",
	// 		markers: {
	// 			startColor: "red",
	// 			endColor: "red",
	// 			fontSize: "12px"
	// 		},
	// 		onEnter: () => {
	// 			$("section:nth-child(4)").find(".titleList").addClass("is-stack")
	// 		},
	// 		onEnterBack: () => {
	// 			$("section:nth-child(4)").find(".titleList").removeClass("is-stack")
	// 		},
	// 	},
	// })

	// gsap.timeline({
	// 	scrollTrigger: {
	// 		trigger: $("section:nth-child(5)"),
	// 		toggleActions: "play reverse play reverse",
	// 		start: "top top",
	// 		end: "bottom bottom",
	// 		markers: {
	// 			startColor: "red",
	// 			endColor: "red",
	// 			fontSize: "12px"
	// 		},
	// 		onEnter: () => {
	// 			$("section:nth-child(5)").find(".titleList").addClass("is-stack")
	// 		},
	// 		onEnterBack: () => {
	// 			$("section:nth-child(5)").find(".titleList").removeClass("is-stack")
	// 		},
	// 	},
	// })

	// gsap.timeline({
	// 	scrollTrigger: {
	// 		trigger: $("section:nth-child(6)"),
	// 		toggleActions: "play reverse play reverse",
	// 		start: "top top",
	// 		end: "bottom bottom",
	// 		markers: {
	// 			startColor: "red",
	// 			endColor: "red",
	// 			fontSize: "12px"
	// 		},
	// 		onEnter: () => {
	// 			$("section:nth-child(6)").find(".titleList").addClass("is-stack")
	// 		},
	// 		onEnterBack: () => {
	// 			$("section:nth-child(6)").find(".titleList").removeClass("is-stack")
	// 		},
	// 	},
	// })

	// var pc = gsap.timeline({
	// 	scrollTrigger: {
	// 		trigger: ".serviceList",
	// 		toggleActions: "play reverse play reverse",
	// 		start: "top top",
	// 		end: "bottom bottom",
	// 		markers: {
	// 			startColor: "red",
	// 			endColor: "red",
	// 			fontSize: "12px"
	// 		},
	// 		onEnter: () => {
	// 			console.log(123)
	// 		},
	// 	},
	// })

</script>