<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
  <title>NScreen 홍길동</title>

  <!-- Chang URLs to wherever Video.js files will be hosted -->
  <link href="/js/video-js/video-js.css" rel="stylesheet" type="text/css">
  <!-- video.js must be in the <head> for older IEs to work. -->
  <script src="/js/video-js/video.js"></script>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

  <!-- Unless using the CDN hosted version, update the URL to the Flash SWF -->
  <script>
    videojs.options.flash.swf = "/js/video-js/video-js.swf";
  </script>

</head>
<body style="margin:0px;">
  <video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" width="100%" height="600"
      poster="http://video-js.zencoder.com/oceans-clip.png"
      data-setup="{}" preload="auto">
	<source src="<?=$filename?>" type='<?=$file_type?>' />
    <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
  </video>

<script>
	var myPlayer = videojs('example_video_1');

	myPlayer.ready(function(){
		myPlayer.play();
		myPlayer.height($(window).height());
	});

	myPlayer.on('loadedmetadata', function(){
		myPlayer.currentTime(<?=$current?>);
	});

	myPlayer.on('play', function() {
		setInterval(function(){
			var url = '/video/set_position/<?=$video_id?>/' +  myPlayer.currentTime();
			$.get(url, function(){});
		}, 3000);
	});
</script>
</body>
</html>
