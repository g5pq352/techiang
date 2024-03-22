<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
	<link rel="stylesheet" href="stylesheets/leicht.css">
</head>

<body>
    <div class="pic-1 ryder-pic"><img src="images/leicht/index-banner-2.jpg"></div>
    <div class="pic-2 ryder-pic"><img src="images/leicht/ib-1.jpg"></div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollToPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>
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
	        this.count += 0.1;


	        for (var i = 0; i < this.points.length; i++) {
	            this.points[i].y = Math.sin((i * 0.5) + this.count) * 10;
	            this.points[i].x = i * this.ropeLength + Math.sin((i * 0.5) + this.count) * 30;
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
</script>