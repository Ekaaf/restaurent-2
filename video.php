<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<script type="text/javascript">

    function vidplay() {
       var video = document.getElementById("Video1");
       var button = document.getElementById("play");
       if (video.paused) {
          video.play();
          button.textContent = "||";
       } else {
          video.pause();
          button.textContent = ">";
       }
    }

    function restart() {
        var video = document.getElementById("Video1");
        video.currentTime = 0;
    }

    function skip(value) {
        var video = document.getElementById("Video1");
        video.currentTime += value;
    }      
</script>


<body>        

	<video id="Video1" width="800" controls>
	  <source src="http://mirrors.standaloneinstaller.com/video-sample/page18-movie-4.m4v" type="video/mp4">
	  <source src="http://mirrors.standaloneinstaller.com/video-sample/page18-movie-4.m4v" type="video/ogg">
	  Your browser does not support HTML5 video.
	</video>

	<!-- <video id="Video1">
	  <source src="test.mp4" type="video/mp4">
	  <source src="test.ogg" type="video/ogg">
	  Your browser does not support HTML5 video.
	</video> -->

	<div id="buttonbar">
	    <button id="restart" onclick="restart();">[]</button> 
	    <button id="rew" onclick="skip(-10)">&lt;&lt;</button>
	    <button id="play" onclick="vidplay()">&gt;</button>
	    <button id="fastFwd" onclick="skip(10)">&gt;&gt;</button>
	</div>    


</body>
</html>