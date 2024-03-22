<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>

	<style>
	body {
		background: #0b0b0d;
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

	<div class="brand-enterWrap show-for-large">
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

			<div class="trigger-one"><a href="brand-cleanup.php"></a></div>
			<div class="trigger-two"><a href="brand.php"></a></div>

			<div class="index-plusWrap grid-x align-center-middle">
				<!-- <div class="bg"></div> -->

				<div class="article-area cell large-shrink">
					<div class="title"><img src="images/story-4.svg"></div>
					<div class="line-rl"></div>
					<div class="content">
						Cleanup認為廚房才是創造一個家庭的核心，因此基於「創造充滿歡樂與笑容的家庭」之理念，不斷致力於提供更好的服務與價值。
					</div>

					<div class="more text-center">
						<img src="images/download-red.svg">
					</div>
				</div>

				<div class="artplus-area cell large-shrink">
					<!-- <div class="pic ryder-pic"><img src="images/index-2.jpg"></div> -->
					<div class="pic">
						<div class="ani" style="background: url('images/index-2.jpg') center center / cover no-repeat;"></div>
					</div>
				</div>
			</div>

			<div class="index-plusWrap2 grid-x align-center-middle">
				<!-- <div class="bg"></div> -->

				<div class="artplus-area cell large-shrink">
					<!-- <div class="pic ryder-pic"><img src="images/index-l.jpg"></div> -->
					<div class="pic">
						<div class="ani" style="background: url('images/index-l.jpg') center center / cover no-repeat;"></div>
					</div>
				</div>

				<div class="article-area cell large-shrink">
					<div class="title"><img src="images/story-1.svg"></div>
					<div class="line-rl"></div>
					<div class="content">
						LEICHT分別在德國境內與歐洲通過多項國際認證，以專業與頂級的品質贏得全球消費者的青睞。人性化的優質設計，更成為室內設計師在打造廚房空間的最佳首選。
					</div>

					<div class="more text-center">
						<img src="images/download.svg">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="brand-enterWrap-mobile hide-for-large">
		<div class="bg-1 is-show"></div>
		<div class="bg-2"></div>

		<div class="item-area">
			<div class="item is-open" id="leicht">
				<div class="title-area grid-x align-justify">
					<div class="title"><img src="images/story-1.svg" width="160"></div>
					<div class="more"><a href="brand.php"><img src="images/enter-more-1.svg"></a></div>
				</div>
				<div class="content" style="display: block;">
					LEICHT分別在德國境內與歐洲通過多項國際認證，在打造廚房空間的最佳首選。的最佳首選。在打造廚房空間的最佳首選。
				</div>
			</div>

			<div class="switch"></div>

			<div class="item" id="cleanup">
				<div class="title-area grid-x align-justify">
					<div class="title"><img src="images/story-4.svg"></div>
					<div class="more"><a href="brand-cleanup.php"><img src="images/enter-more-2.svg"></a></div>
				</div>
				<div class="content">
					Cleanup認為廚房才是創造一個家庭的核心，因此基於「創造充滿歡樂與笑容的家庭」之理念，不斷致力於提供更好的服務與價值。
				</div>
			</div>
		</div>
	</div>

</body>

<?php include 'script.php'; ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pixi.js/5.2.4/pixi.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dat-gui/0.6.3/dat.gui.min.js"></script>
</html>

<script>

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


	$(function() {

		$("#leicht .title").on("click", function () {

			$(".brand-enterWrap-mobile .bg-1").addClass("is-show")
        	$(".brand-enterWrap-mobile .bg-2").removeClass("is-show")
        	
        	$("#leicht").addClass("is-open")
        	$("#cleanup").removeClass("is-open")
        	

        	$("#leicht").find(".content").slideDown(500)
        	$("#cleanup").find(".content").slideUp(500)

		})


		$("#cleanup .title").on("click", function () {

			$(".brand-enterWrap-mobile .bg-1").removeClass("is-show")
        	$(".brand-enterWrap-mobile .bg-2").addClass("is-show")
	            	
        	$("#leicht").removeClass("is-open")
        	$("#cleanup").addClass("is-open")
        	

        	$("#leicht").find(".content").slideUp(500)
        	$("#cleanup").find(".content").slideDown(500)

			
		})

	});


</script>