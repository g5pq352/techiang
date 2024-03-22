$(window).on("resize", function (){
	if ($(this).width() > 1441) {
		window.device = 'desktop';
	}else if($(this).width() > 1025){
		window.device = 'laptop';
	}else{
		window.device = 'mobile';
	}


	var _circle_height = $(".deco-circle").height() / 2 - $(".deco-circle").height();
	$('.deco-circle').css("top", _circle_height);
}).trigger("resize");



$("#preload").delay(1000).fadeOut(500)



$("a").not("[href='javascript:;']").not("[href^='tel:']").not("[target='_blank']").not("[data-fancybox]").not("[data-share]").on("click", function (e) {
	e.preventDefault()

	$("#preload").fadeIn(300, () => {
		location.href = $(this).attr('href')

		var _goto = $(this).attr('href').split("#");
		var _gotoName = _goto[0].split("/").pop();

		var _now = location.href.split("#");
		var _nowName = _now[0].split("/").pop();

		if (_gotoName == _nowName) {
			gsap.delayedCall(0.1, function () {
				location.reload()
			});
		}
	})
})



// 解決 safari hitory.back() reload 問題
$(window).on("pageshow", function(event) {
	if (event.originalEvent.persisted) {
		window.location.reload()
	}
});






// menu fixed
// ScrollTrigger.create({
// 	trigger: ".menuWrap",
// 	toggleActions: "play pause resume reverse", //重覆觸發
// 	start: 0,
// 	endTrigger: ".footerWrap",
// 	end: "top 100%",
// 	pin: true,
// 	pinSpacing: false,  //pin起來會預留空間這可以取消
// 	// markers: {
// 	// 	startColor: "red",
// 	// 	endColor: "red",
// 	// 	fontSize: "12px"
// 	// },
// });


// menu改良 自動收合 靠近打開
var _open = false;

ScrollTrigger.create({
	toggleActions: "play pause resume reverse", //重覆觸發
	start: 200,
	end: "bottom top", // no end
	toggleClass: {
		targets: ".menuWrap",
		className: "is-hide"
	},
	// markers: {
	// 	startColor: "red",
	// 	endColor: "red",
	// 	fontSize: "12px"
	// },
});

$(".menu-trigger").hover(function () {
	_open = true
	$(".menuWrap").removeClass("is-hide")
})

$(window).on("scroll", function () {
	if (_open) {
		_open = false
		$(".menuWrap").addClass("is-hide")
	}
})




var _menu_tl = gsap.timeline({
	paused: true,
}).from(".menu-openWrap .bg-1", {
	duration: 1,
	xPercent: -100,
	ease: 'power2.inOut',
}).from(".menu-openWrap .bg-2", {
	duration: 1,
	xPercent: -100,
	ease: 'power2.inOut',
}, "<0.2").from(".menu-openWrap .link-area", {
	duration: 1,
	opacity: 0,
	x: -60,
	stagger: 0.1,
}, "<0.5").reverse()



$(".hamburger").on("click", function () {
	$(this).toggleClass("is-show")
	$(".menu-openWrap").toggleClass("is-show")
	_menu_tl.reversed(!_menu_tl.reversed())
})





$(".mobile-hamburger").on("click", function () {
	$(this).toggleClass("is-show")
	$(".mobile-menuOpenWrap").toggleClass("is-show")
})






$(".backtotop").on("click", function () {
	gsap.to(window, {
		duration: 1.2,
		scrollTo: 0,
		ease: Power2.easeInOut,
	});
})






$(".scrolldown").on("click", function () {
	gsap.to(window, {
		duration: 1.2,
		scrollTo: $(window).height(),
		ease: Power2.easeInOut,
	});
})






// gsap.from(".backtotop", {
// 	scrollTrigger: {
// 		toggleActions: "play pause resume reverse",  //重覆觸發
// 		trigger: ".footerWrap",
// 		start: "top 100%",
// 		end: "bottom 0%",
// 		// markers: {
// 		// 	startColor: "red",
// 		// 	endColor: "red",
// 		// 	fontSize: "12px"
// 		// },
// 	},
// 	duration: 0.5,
// 	opacity: 0,
// 	y: 50,
// });



// if (device != 'mobile') {
// 	luxy.init({
// 		wrapperSpeed: 0.12,
// 	});
// }


$(".mobile-hamburger").on("click", function() {
	$(".menu-container").addClass("is-open")
})

$(".menu-container .close").on("click", function() {
	$(".menu-container").removeClass("is-open")
})


var wow = new WOW({
	callback: function (el) {}
}).init();


// $(".topmenuWrap").mousemove(function (e) {
// 	TweenMax.to($('.biu'), .2, {
// 		left: e.pageX,
// 		ease: 'none',
// 		delay: .15,
// 		// ease: Sine.easeInOut
// 	}, 0);
// });

// $(".topmenuWrap").mouseleave(function (e) {
// 	TweenMax.to($('.biu'), .5, {
// 		left: "50%",
// 		// delay: .3
// 		ease: 'none',
// 	}, 0);
// });