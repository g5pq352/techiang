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
				從傾聽、設計到完工，細心服務，專業規劃<br>
				一條龍作業，讓您的夢想廚房實現。
			</div>
		</div>

		<div class="pic" style="background: url(images/service-banner.jpg) center center / cover no-repeat;"></div>

		<div class="scroll-down scrolldown"><img src="images/about-scroll-down.svg"></div>
	</div>

	<div class="serviceWrap" style="position: relative;">

		<div class="serviceMap">
			<div class="item"></div>
		</div>

		<div class="serviceHead">

		</div>

		<div class="serviceList">

			<section class="grid-x">
				<!-- <div class="bg"><img src="images/service-bg-1.svg"></div> -->
				<div class="cell auto show-for-large" style="background: #111111;"></div>
				<div class="sl-1 cell auto">
					<ul class="titleList">
						<li class="grid-x align-middle current" style="color:#ffffff;" id="anchor1">
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
			</section>

			<section class="grid-x">
				<!-- <div class="bg"><img src="images/service-bg-2.svg"></div> -->
				<div class="cell auto show-for-large" style="background: #f0f1f1;"></div>
				<div class="sl-2 cell auto">
					<ul class="titleList">
						<li class="grid-x align-middle current" id="anchor2">
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
			</section>

			<section class="grid-x">
				<!-- <div class="bg"><img src="images/service-bg-3.svg"></div> -->
				<div class="cell auto show-for-large" style="background: #111111;"></div>
				<div class="sl-3 cell auto">
					<ul class="titleList">
						<li class="grid-x align-middle current" id="anchor3">
							<div class="en">offer</div>
							<div class="ch">報價簽約</div>
						</li>
					</ul>

					<div class="stepAll">
						<div class="title">STEP 03.</div>

						<ul class="stepList">
							<li>·廚具報價</li>
							<li>·合約簽訂</li>
						</ul>
					</div>
				</div>
			</section>

			<section class="grid-x">
				<!-- <div class="bg"><img src="images/service-bg-4.svg"></div> -->
				<div class="cell auto show-for-large" style="background: #f0f1f1;"></div>
				<div class="sl-4 cell auto">
					<ul class="titleList">
						<li class="grid-x align-middle current" id="anchor4">
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
			</section>

			<section class="grid-x">
				<!-- <div class="bg"><img src="images/service-bg-5.svg"></div> -->
				<div class="cell auto show-for-large" style="background: #000;"></div>
				<div class="sl-5 cell auto">
					<ul class="titleList">
						<li class="grid-x align-middle current" id="anchor5">
							<div class="en">finished</div>
							<div class="ch">廚具工程</div>
						</li>
					</ul>

					<div class="stepAll">
						<div class="title">STEP 05.</div>

						<ul class="stepList">
							<li>·運送安排</li>
							<li>·專業安裝</li>
						</ul>
					</div>
				</div>
			</section>

			<section class="sl-6">
				<!-- <div class="bg"><img src="images/service-bg-6.svg"></div> -->
				<div class="cell auto">
					<ul class="titleList">
						<li class="grid-x align-middle current" id="anchor6">
							<div class="en">service</div>
							<div class="ch">完整售服</div>
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

		<div class="appointment"><a href="contact.php">

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
	gsap.registerPlugin(DrawSVGPlugin);

	// gsap.from('.st0', 3, { drawSVG:'0% 0%', ease:"power2.inOut", delay: 1})
	// gsap.from('line', 3, { drawSVG:'0% 0%', ease:"power2.inOut", delay: 1})
	// gsap.from('polygon', 3, { drawSVG:'0% 0%', ease:"power2.inOut", delay: 1})
	// gsap.from('path', 3, { drawSVG:'0% 0%', ease:"power2.inOut", delay: 1})

	// let tl = gsap.timeline({
	// scrollTrigger: {
	// 	trigger: ".test",
	// 		pin: true,
	// 		start: "top top",
	// 		end: "bottom",
	// 		scrub: 1,
	// 		markers: {
	// 			startColor: "red",
	// 			endColor: "red",
	// 			fontSize: "12px"
	// 		},
	// 	}
	// });

	// tl.from('.st0', 3, { drawSVG:'0% 0%', ease:"power2.inOut"})
	// .from('.st2', 3, { drawSVG:'0% 0%', ease:"power2.inOut"})
	// .from('.st1', 3, { drawSVG:'0% 0%', ease:"power2.inOut"})
	// .from('.st3', 3, { drawSVG:'0% 0%', ease:"power2.inOut"})

	// ScrollTrigger.create({
	// 	trigger: $("section:nth-child(1)"),
	// 	start: "top top",
	// 	endTrigger: $("section:nth-child(2)"),
	// 	end: "bottom bottom",
	// 	markers: {
	// 		startColor: "red",
	// 		endColor: "red",
	// 		fontSize: "12px"
	// 	},
	// 	onToggle: self =>  {
	// 		console.log("toggled, isActive:", self.isActive)
	// 	},
	// 	onUpdate: self => {
	// 		console.log("progress:", self.progress.toFixed(3), "direction:", self.direction, "velocity", self.getVelocity());
	// 	}
	// });

	if (device == 'desktop') {
		var _sch = $(".about-bannerWrap").height() / 2 * 0.6
		var _sch2 = $(".about-bannerWrap").height() + ($("section:nth-child(1)").height() * 4) + $("section:nth-child(1)").height() / 2 * 0.6
	} else if(device == 'laptop') {
		var _sch = $(".about-bannerWrap").height() / 2 * 0.5
		var _sch2 = $(".about-bannerWrap").height() + ($("section:nth-child(1)").height() * 4) + $("section:nth-child(1)").height() / 2 * 0.5
	} else {
		var _sch = $(".about-bannerWrap").height() / 2 * 0.7
		var _sch2 = $(".about-bannerWrap").height() + ($("section:nth-child(1)").height() * 4) + $("section:nth-child(1)").height() / 2 * 0.7
	}

	$(".serviceMap").css("top", _sch)
	ScrollTrigger.create({
		trigger: $("section:nth-child(1)"),
		start: "top 0",
		endTrigger: $("section:nth-child(6)"),
		end: "bottom bottom",
		onToggle: ({progress, direction, isActive}) => {

			if(progress == 0) {
				$(".serviceMap").css("top", _sch)
			} else {
				$(".serviceMap").css("top", _sch2)
			}

			if (isActive) {
				// $(".index-calendar-1").addClass("is-show")

				// if (device != 'desktop') {
				// 	gsap.to(".index-calendar-1 .animate-area .pic", {
				// 		duration: 2,
				// 		backgroundPosition: "0 100%",
				// 		ease: SteppedEase.config(5),
				// 	});
				// }

				$(".serviceMap").addClass("is-lock")
			} else {
				$(".serviceMap").removeClass("is-lock")
			}
		}
	});

	// var _sch = $(".about-bannerWrap").height() + $("section:nth-child(1)").height() / 2 * 0.7
	// var _sch2 = $(".about-bannerWrap").height() + ($("section:nth-child(1)").height() * 4) + $("section:nth-child(1)").height() / 2 * 0.65

	// $(".serviceMap").css("top", _sch)
	// ScrollTrigger.create({
	// 	trigger: $("section:nth-child(2)"),
	// 	start: "top 0",
	// 	endTrigger: $("section:nth-child(6)"),
	// 	end: "bottom bottom",
	// 	onToggle: ({progress, direction, isActive}) => {

	// 		if(progress == 0) {
	// 			$(".serviceMap").css("top", _sch)
	// 		} else {
	// 			$(".serviceMap").css("top", _sch2)
	// 		}

	// 		if (isActive) {
	// 			// $(".index-calendar-1").addClass("is-show")

	// 			// if (device != 'desktop') {
	// 			// 	gsap.to(".index-calendar-1 .animate-area .pic", {
	// 			// 		duration: 2,
	// 			// 		backgroundPosition: "0 100%",
	// 			// 		ease: SteppedEase.config(5),
	// 			// 	});
	// 			// }

	// 			$(".serviceMap").addClass("is-lock")
	// 		} else {
	// 			$(".serviceMap").removeClass("is-lock")
	// 		}
	// 	}
	// });

	// if (device == 'desktop') {
		gsap.to(".serviceMap div", {
			scrollTrigger: {
				// trigger: $("section:nth-child(2)"),
				trigger: $("section:nth-child(1)"),
				toggleActions: "play none none none",
				start: "top top",
				endTrigger: $("section:nth-child(6)"),
				end: "bottom 90%",
				scrub: true,
			},
			markers: {
				startColor: "red",
				endColor: "red",
				fontSize: "12px"
			},
			backgroundPosition: "0 100%",
			ease: SteppedEase.config(50),
		});
	// }


	var _scroll = $(".about-bannerWrap").height() + $(".serviceList").height() * 0.834

	if (device == 'desktop' || device == 'laptop') {

		$(".serviceList section").each(function(index) {

			var _now = index + 1;
			var _height = 130 + (40 * index);

			var _shit = _height - 120

			gsap.timeline({
				scrollTrigger: {
					trigger: $("section:nth-child(" + _now + ")"),
					toggleActions: "play reverse play reverse",
					// start: "top top+=120px",
					start: "top " + _shit,
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
						// console.log(progress, direction, isActive, _now)

						if(_now == 6 && progress == 1) {
							$(".titleList").addClass("last")
						} else {
							$(".titleList").removeClass("last")
						}

						if(progress == 0) {
							$("section:nth-child(" + (_now - 1) + ")").find(".titleList li").addClass("current")
						}

						$(window).scroll(function() {

							var _stack1 = $(".about-bannerWrap").height() + $(".serviceList").height() * 0.6881
							var _stack2 = $(".about-bannerWrap").height() + $(".serviceList").height() * 0.5288
							var _stack3 = $(".about-bannerWrap").height() + $(".serviceList").height() * 0.3695
							var _stack4 = $(".about-bannerWrap").height() + $(".serviceList").height() * 0.2102
							var _stack5 = $(".about-bannerWrap").height() + $(".serviceList").height() * 0.0509

							// $(".t-1").css("top", _stack1)
							// $(".t-2").css("top", _stack2)
							// $(".t-3").css("top", _stack3)
							// $(".t-4").css("top", _stack4)
							// $(".t-5").css("top", _stack5)

							if($(this).scrollTop() > _scroll) {

								$(".titleList").addClass("is-end")

								$("section:nth-child(1)").find(".titleList").addClass("t-1")
								$("section:nth-child(2)").find(".titleList").addClass("t-2")
								$("section:nth-child(3)").find(".titleList").addClass("t-3")
								$("section:nth-child(4)").find(".titleList").addClass("t-4")
								$("section:nth-child(5)").find(".titleList").addClass("t-5")
							} else {
								$("section:nth-child(1)").find(".titleList").removeClass("t-1")
								$("section:nth-child(2)").find(".titleList").removeClass("t-2")
								$("section:nth-child(3)").find(".titleList").removeClass("t-3")
								$("section:nth-child(4)").find(".titleList").removeClass("t-4")
								$("section:nth-child(5)").find(".titleList").removeClass("t-5")

								$(".titleList").removeClass("is-end")
							}
						})
					}
				},
			})

		})

	}


	$("#anchor1").on("click", function() {
		$.scrollTo( $("section:nth-child(1)"), {
			duration: 1000,
			offset: $(window).height() * -0.018
		});
	})
	$("#anchor2").on("click", function() {
		$.scrollTo( $("section:nth-child(2)"), {
			duration: 1000,
			offset: $(window).height() * -0.018
		});
	})
	$("#anchor3").on("click", function() {
		$.scrollTo( $("section:nth-child(3)"), {
			duration: 1000,
			offset: $(window).height() * -0.018
		});
	})
	$("#anchor4").on("click", function() {
		$.scrollTo( $("section:nth-child(4)"), {
			duration: 1000,
			offset: $(window).height() * -0.018
		});
	})
	$("#anchor5").on("click", function() {
		$.scrollTo( $("section:nth-child(5)"), {
			duration: 1000,
			offset: $(window).height() * -0.018
		});
	})
	$("#anchor6").on("click", function() {
		$.scrollTo( $("section:nth-child(6)"), {
			duration: 1000,
			offset: $(window).height() * -0.018
		});
	})
</script>