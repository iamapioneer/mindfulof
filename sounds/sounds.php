<?php include('../config.php'); ?>
<?php $page = 'sounds';?>
<?php include('../header.php'); ?>

<div class="hero data-img" id="sounds-hero" style="background-image: url(); background-position:50% 40%;" data-sml="../img/fq-outside.jpg" data-med="../img/fq-outside.jpg" data-lrg="../img/fq-outside.jpg">
	<p class="page-title">Sounds</p>
</div>

<div class="banner">
	<p class="banner-message"><span class="white">JOSHUA EDWARDS IS</span> MINDFUL OF</p>
</div>

<div class="player-section">
	<div class="player-container">
		<div class="song-container">
			<div class="song" id="song-1-controller"><span class="name play"><span class="button"><img class="play-img" src="<?php echo BASE_URL ;?>img/play.png"><img class="pause-img" src="<?php echo BASE_URL ;?>img/pause.png"></span>LOUD</span><span class="timestamp"><span class="timeelapsed">0:00</span>/<span class="timetotal">0:00</span></span></div>
			<div class="song" id="song-2-controller"><span class="name play"><span class="button"><img class="play-img" src="<?php echo BASE_URL ;?>img/play.png"><img class="pause-img" src="<?php echo BASE_URL ;?>img/pause.png"></span>YOU</span><span class="timestamp"><span class="timeelapsed">0:00</span>/<span class="timetotal">0:00</span></span></div>
			<div class="song" id="song-3-controller"><span class="name play"><span class="button"><img class="play-img" src="<?php echo BASE_URL ;?>img/play.png"><img class="pause-img" src="<?php echo BASE_URL ;?>img/pause.png"></span>HUMAN</span><span class="timestamp"><span class="timeelapsed">0:00</span>/<span class="timetotal">0:00</span></span></div>
			<div class="song" id="song-4-controller"><span class="name play"><span class="button"><img class="play-img" src="<?php echo BASE_URL ;?>img/play.png"><img class="pause-img" src="<?php echo BASE_URL ;?>img/pause.png"></span>RAIN</span><span class="timestamp"><span class="timeelapsed">0:00</span>/<span class="timetotal">0:00</span></span></div>
			<div class="song" id="song-5-controller"><span class="name play"><span class="button"><img class="play-img" src="<?php echo BASE_URL ;?>img/play.png"><img class="pause-img" src="<?php echo BASE_URL ;?>img/pause.png"></span>HERE</span><span class="timestamp"><span class="timeelapsed">0:00</span>/<span class="timetotal">0:00</span></span></div>
			<div class="song" id="song-6-controller"><span class="name play"><span class="button"><img class="play-img" src="<?php echo BASE_URL ;?>img/play.png"><img class="pause-img" src="<?php echo BASE_URL ;?>img/pause.png"></span>YOU (Acoustic)</span><span class="timestamp"><span class="timeelapsed">0:00</span>/<span class="timetotal">0:00</span></span></div>
			<!-- <div class="song" id="song-7-controller"><span class="name play"><span class="button"><img class="play-img" src="<?php //echo BASE_URL ;?>img/play.png"><img class="pause-img" src="<?php //echo BASE_URL ;?>img/pause.png"></span>TOO LONG</span><span class="timestamp"><span class="timeelapsed">0:00</span>/<span class="timetotal">0:00</span></span></div> -->
		</div>
	</div>
	<div class="player-image data-img" style="background-image: url();" data-sml="../img/adventure-is-shoot-1.jpg" data-med="../img/adventure-is-shoot-1.jpg" data-lrg="../img/adventure-is-shoot-1.jpg"></div>
</div>

<div class="audio-container">
	<audio id="song-1">
	    <source src="<?php echo BASE_URL ;?>audio/theadventureis/1-loud.mp3" type="audio/mpeg">
	</audio>
	<audio id="song-2">
	    <source src="<?php echo BASE_URL ;?>audio/theadventureis/2-you.mp3" type="audio/mpeg">
	</audio>
	<audio id="song-3">
	    <source src="<?php echo BASE_URL ;?>audio/theadventureis/3-human.mp3" type="audio/mpeg">
	</audio>
	<audio id="song-4">
	    <source src="<?php echo BASE_URL ;?>audio/theadventureis/4-rain.mp3" type="audio/mpeg">
	</audio>
	<audio id="song-5">
	    <source src="<?php echo BASE_URL ;?>audio/theadventureis/5-here.mp3" type="audio/mpeg">
	</audio>
	<audio id="song-6">
	    <source src="<?php echo BASE_URL ;?>audio/theadventureis/6-you.mp3" type="audio/mpeg">
	</audio>
	<!-- <audio id="song-7">
	    <source src="<?php echo BASE_URL ;?>audio/theadventureis/" type="audio/mpeg">
	</audio> -->
</div>

<div class="album-section">
	<div class="album-container">	
		<img class="album-artwork" src="<?php echo BASE_URL ;?>img/theadventureis-album.jpg">
		<p class="album-name">THE ADVENTURE IS EP</p>
		<a href="http://mindfulof.bandcamp.com/album/the-adventure-is-ep" target="_blank"><div class="download-button"><p>GET IT</p></div></a>
	</div>
</div>
<div class="album-section">
	<div class="album-container">
		<img class="album-artwork" src="<?php echo BASE_URL ;?>img/create-album.jpg">
		<p class="album-name">CREATE EP</p>
		<a href="http://soundcloud.com/iammindfulof/sets/create-ep" target="_blank"><div class="download-button"><p>GET IT</p></div></a>
	</div>
</div>


<div class="appearances-banner">
	<p>ALSO APPEARS ON:</p>
</div>

<div class="appearances">
	<div class="appearances-container">
		<a href="https://itun.es/us/x9WU-" target="_blank">
			<div class="album-container">
				<img class="album-artwork" src="<?php echo BASE_URL ;?>img/garden-echo.jpg">
				<p class="album-name">GARDEN ECHO<br>QUIET VOICES<br>(2015)</p>
			</div>
		</a>
		<a href="http://www.wyldmusic.com" target="_blank">
			<div class="album-container">
				<img class="album-artwork" src="<?php echo BASE_URL ;?>img/take-flight.jpg">
				<p class="album-name">WYLD<br>TAKE FLIGHT<br>(2013)</p>
			</div>
		</a>
		<a href="http://www.bodiewade.com" target="_blank">
			<div class="album-container">
				<img class="album-artwork" src="<?php echo BASE_URL ;?>img/bodie-wade.jpg">
				<p class="album-name">BODIE WADE<br>COLLEGE : THE LECTURE<br>(2012)</p>
			</div>
		</a>
	</div>
</div>


<div class="appearances-banner">
	<p>AVAILABLE FOR: drums/percussion, keys/synthesizers, rhythym guitar, background vocals.</p>
</div>

<script>
	
	var thisPage = "sounds";
	
</script>

<?php include('../footer.php'); ?>