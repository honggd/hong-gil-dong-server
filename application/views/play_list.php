<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title></title>
		<meta name="description" content="Multi-Level Push Menu: Off-screen navigation with multiple levels" />
		<meta name="keywords" content="multi-level, menu, navigation, off-canvas, off-screen, mobile, levels, nested, transform" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="/css/icons.css" />
		<link rel="stylesheet" type="text/css" href="/css/component.css" />
		<link href="video-js.css" rel="stylesheet" type="text/css">
		<script src="video.js"></script>

		<script src="/js/modernizr.custom.js">
		</script>	
  	</head>
	<body>
		<div class="container">
			<!-- Push Wrapper -->
			<div class="mp-pusher" id="mp-pusher">

				<!-- mp-menu -->
				<nav id="mp-menu" class="mp-menu">
					<div class="mp-level">
						<h2 class="icon icon-world">LIST</h2>
						<ul>
							<li>
								<a href="#">Devices</a>
							</li>
							<li>
								<a href="#">Magazines</a>
							</li>
							<li>
								<a href="#">Store</a>
							</li>
							<li><a href="#">Collections</a></li>
							<li><a href="#">Credits</a></li>
						</ul>
					</div>
				</nav>
				<!-- /mp-menu -->

				<div class="scroller"><!-- this is for emulating position fixed of the nav -->
					<div class="scroller-inner">
								<p><a href="#" id="trigger" class="menu-trigger"></a></p>
								 <video id="example_video_1" class="video-js vjs-default-skin" controls preload="auto" width="100%" poster="http://video-js.zencoder.com/oceans-clip.png" data-setup="{}">
							    <source src="http://video-js.zencoder.com/oceans-clip.mp4" type='video/mp4' />
							    <source src="http://video-js.zencoder.com/oceans-clip.webm" type='video/webm' />
							    <source src="http://video-js.zencoder.com/oceans-clip.ogv" type='video/ogg' />
							    <track kind="captions" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
							    <track kind="subtitles" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
							    <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
							  </video>
						</div>
					</div><!-- /scroller-inner -->
				</div><!-- /scroller -->

			</div><!-- /pusher -->
		</div><!-- /container -->
		<script src="/js/classie.js"></script>
		<script src="/<style type="text/css">
			
		</style>js/mlpushmenu.js"></script>
		<script>
			new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );
		</script>
	</body>
</html>