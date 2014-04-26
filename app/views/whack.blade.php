<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Whack a SpongeBob</title>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/whack.css">
	<link href='http://fonts.googleapis.com/css?family=Joti+One' rel='stylesheet' type='text/css'>

	
</head>
<body>


	<button id="audio-pause" class="glyphicon glyphicon-volume-off pull-right"></button>
	<button id="audio-play" class="glyphicon glyphicon-volume-up pull-right"></button>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h1>Whack a <img src="/img/h1.png" alt=""> </a> </h1>
			
			<!-- <img id="gary" style="position: relative" src="/img/gary-overlay.png" alt=""> -->
			<!-- <div class="col-md-3"><img class="pull-right" src="/img/spongebob-overlay.png" alt=""></div> -->
		</div>
	<div class="row"></div>
		<div id="game-board">
			<div class="square clickable"><img class="whack-bob" src="/img/sponge1.jpg" alt="SpongeBob"></div>
			<div class="square clickable"><img class="whack-bob" src="/img/sponge1.jpg" alt="SpongeBob"></div>
			<div class="square clickable"><img class="whack-bob" src="/img/sponge1.jpg" alt="SpongeBob"></div>

			<div class="square clickable"><img class="whack-bob" src="/img/sponge1.jpg" alt="SpongeBob"></div>
			<div class="square clickable"><img class="whack-bob" src="/img/sponge1.jpg" alt="SpongeBob"></div>
			<div class="square clickable"><img class="whack-bob" src="/img/sponge1.jpg" alt="SpongeBob"></div>

			<div class="square clickable"><img class="whack-bob" src="/img/sponge1.jpg" alt="SpongeBob"></div>
			<div class="square clickable"><img class="whack-bob" src="/img/sponge1.jpg" alt="SpongeBob"></div>
			<div class="square clickable"><img class="whack-bob" src="/img/sponge1.jpg" alt="SpongeBob"></div>
			<div><button id="start-button" type="button" class="btn btn-default btn-large active">Play Now!</button></div>
		</div>
	</div>
	<!-- <img class="" src="/img/sandy.png" alt="">
	<img class="" src="/img/gary-overlay.png" alt=""> -->
	<div class="container">
		<h2 id="score">Score: 0</h2>
		<h2 id="counter">Time: 25</h2>
		<h2 id="high-score">High Score</h2>
		<div><img id="end-image" src="/img/sponge-blackeye.jpg"></img></div>
		<div><a id="play-again" href="{{{ action('HomeController@showWhack') }}}" class="btn btn-default btn-large">Play Again?</a> <a id="exit-game" href="{{{ action('HomeController@showWelcome') }}}" class="btn btn-default btn-large">Exit Game?</a></div>
	</div>
</div>

<audio id="laugh" src="/data/spongebob-laugh-short.mp3" type="audio/mpeg"></audio>
<audio id="hula" src="/data/spongebob-hula.mp3" type="audio/mpeg" loop="loop"></audio>

<script src="/js/jquery-1.10.2.min.js" ></script>
<script src="/js/jquery.cookie.js" ></script>
<script src="/js/bootstrap.min.js" ></script>
<script>
	var bob1 = $('.whack-bob');
	var square = $('.square');
	var score = 0;
	var highScore = null;
	var counter = 25;
	var interval1 = null;
	var laugh = $('#laugh')[0];
	var hula = $('#hula')[0];
	var audioToggleOff = $('#audio-pause');
	var audioToggleOn = $('#audio-play');

	audioToggleOn.hide();
	audioToggleOff.click(function() {
		hula.pause();
		audioToggleOff.hide();
		audioToggleOn.show();
	});

	audioToggleOn.click(function() {
		hula.play();
		audioToggleOn.hide();
		audioToggleOff.show();
	});

	hula.play();

	
	function level1() {
		var interval1 = setInterval(function() {
			var rand = Math.floor(Math.random() * square.length);
			$(square[rand]).children().fadeIn(700, function(){
				bob1.fadeOut(700);
			});
		}, 1500)};

	function level2() {
		var interval2 = setInterval(function() {
			rand = Math.floor(Math.random() * square.length);
			$(square[rand]).children().fadeIn(400, function(){
				bob1.fadeOut(400);
			});
		}, 800)};

	function hits() {
		bob1.click(function() {
			score++;
			$('#score').text('Your Score: ' + score);
			bob1.hide();
			laugh.play();
		});
	};

	function timer() {
		counter--;
		$('#counter').text('Time: ' + counter);
	}

	function endGame(){
		setTimeout(function() {
			
			var highScore = localStorage.getItem('highScore');
			if (score > highScore) {
				localStorage.removeItem('highScore');
				var highScore = localStorage.setItem('highScore', score);
      			$('#high-score').text('High Score: ' + score);
			} else {
				var highScore = localStorage.getItem('highScore');
				$('#high-score').text('High Score: ' + highScore);
			};
      		$('#game-board').hide();
      		$('#play-again').show();
      		$('#exit-game').show();
      		$('#high-score').show();
      		$('#end-image').show();
      		$('#counter').hide();

		}, 25000);
	};

	$('#play-again').hide();
	$('#exit-game').hide();
	$('#high-score').hide();
	$('#end-image').hide();
		
	$('#start-button').click(function() {
		setInterval('timer()', 1000);
		$('#start-button').addClass('disabled');		
		level1();
		hits();
		endGame();
	});

</script>
</body>
</html>