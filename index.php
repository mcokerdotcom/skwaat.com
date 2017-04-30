<?
	$baseURL = 'http://skwaat.com';
	$curURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$title = 'Super Training Gym Powercast Goodies from Mark &quot;Smelly&quot; Bell, Silent Mike, and Jim McDonald'; 
?>
<!DOCTYPE HTML>
<html>
<head>
	<title><?= $title ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link rel='stylesheet' href='/font-awesome-4.3.0/css/font-awesome.min.css' type='text/css'>
	<link rel="icon" type="image/png" href="/favicon.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<? /*
	<link href="/flexslider/flexslider.css" rel="stylesheet" type="text/css">
	<script src="/flexslider/jquery.flexslider-min.js"></script>
	*/ ?>
	<style>
	* {margin:0;padding:0;box-sizing:border-box;-moz-box-sizing:border-box;}
	.cf {overflow:auto;}
	html,body {
		height: 100%;
	}
	body {
		font-family: "Segoe UI", Candara, "Bitstream Vera Sans", "DejaVu Sans", "Bitstream Vera Sans", "Trebuchet MS", Verdana, "Verdana Ref", sans-serif;
		line-height: 1;
		color: #222;
		position: relative;
		background: #f0f0f0;
	}
	#page {
		width: 90%;
		max-width: 960px;
		margin: auto;
		padding: 1em 0 3em;
	}
	header {
		margin: 0 0 2em;
		text-align: center;
		position: relative;
	}
	header .logo {
		display: inline-block;
		color: #fff;
		position: relative;
		z-index: 1;
		padding: .2em .5em;
		margin: 0 0 .2em;
		font-size: 2em;
	}
	header .logo::before {
		position: absolute;
		top: 0; left: 0; right: 0; bottom: 0;
		background: #222;
		content: ' ';
		display: block;
		z-index: -1;
		transform: rotate(-1deg);
		-moz-transform: rotate(-1deg);
		-webkit-transform: rotate(-1deg);
		box-shadow: 3px 3px 0 #fff;
	}
	header .goodies {
		display: block;
		font-size: .5em;
	}
	header .goodies, .buy {
		text-shadow: 1px 1px 0 #fff;
	}
	.buy {
		display: block;
		text-align: center;
		margin: 0 0 .5em;
	}
	.buy span, header .logo {
		font-family: Oswald,sans-serif;
	}
	.buy span {
		background: #222;
		color: #fff;
		padding: 0 .25em;
		text-shadow: none;
	}
	h2 {
		margin: 0 0 .5em;
		font-size: 2.5em;
	}
	h2 a, h3::before, .download {
		color: #999;
	}
	h2 a {
		font-size: .8em;
	}
	h2 a:first-child {
		margin: 0 0 0 .5em;
	}
	h3 i, h2 a, #footer a, .products a {
		transition: color .25s;
	}
	h2 a:hover, h2 a:focus, h3.active::before, h3:hover::before, h3:focus::before, .download:hover, .download:focus {
		color: #222;
	}
	h3::before {
		position: absolute;
		top: 0.15em; left: 0;
		font: normal normal normal 14px/1 FontAwesome;
		font-size: inherit;
		text-rendering: auto;
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;
		transform: translate(0, 0);
		/* play */
		content: "\f04b";
	}
	h3.playing::before {
		/* pause */
		content: "\f04c";
	}
	h3.waiting::before {
		/* spinner */
		content: "\f110";
	}
	h3 {
		position: relative;
		cursor: pointer;
		display: inline;
	}
	@-webkit-keyframes activePulse {
		0% { color: inherit; }
		50% { color: #999; }
		100% { color inherit; }
	}
	h3.active::before {
		-webkit-animation: activePulse 1s infinite;
	}
	h3.active.playing::before {
		color: inherit;
		-webkit-animation: none;
	}
	h3.active a {
		color: #fff; background: #222;
	}
	h3 a {
		transition: background,color .5s;
		margin: 0 0 0 1em;
		padding: 0 .25em;
	}
	a {
		color: #cc0011;
		text-decoration: none;
	}
	.clips li {
		list-style: none;
		margin: 0 0 1em;
		line-height: 1.6;
	}
	.clips li:last-child {
		margin: 0;
	}
	audio, .download {
		display: none;
	}
	.clips li:hover .download, .clips li:focus .download {
		display: inline;
	}
	section, .products {
		background: #fff;
		border: solid;
		border-color: #ddd #ddd #ddd #222;
		border-width: 1px 1px 1px 2px;
		padding: .5em 1em .75em;
		margin: 0 0 2em;
		border-radius: 0 2px 2px 0;
	}
	<? /*
	#flexslider {
		position: relative;
		opacity: 0;
		width: 240px; height: 240px;
		margin: auto;
	}
	*/ ?>
	.products {
		padding: 1em;
	}
	.products .title {
		font-size: 1.25em;
		font-weight: bold;
		margin: 0 0 1em;
	}
	.products .end {
		font-weight: bold;
		text-align: center;
		display: block;
	}
	.products ul {
		display: table;
		table-layout: fixed;
		margin: 0 0 1em;
	}
	.products li {
		display: table-cell;
	}
	.products img {
		max-width: 100%;
	}
	.products a:hover, .products a:focus {
		text-decoration: underline;
	}
	#footer {
		text-align: center;
		color: #999;
	}
	#footer a {
		color: #999;
		text-decoration: underline;
	}
	#footer a:hover, #footer a:focus, .products a:hover, .products a:focus {
		color: #222;
	}
	@media (max-width: 420px) {
		h2 {
			font-size: 2em;
		}
		.products .title {
			text-align: center;
		}
		.products ul, .products li {
			display: block;
		}
	}
	</style>
	<meta property="og:image" content="<?= $baseURL ?>/powercast_mark_bell_silent_mike_jim_mcdonald.jpg">
	<meta property="og:url" content="<?= $curURL ?>">
	<meta property="og:title" content="<?= $title ?>">
</head>
<body>
<div id="page">

	<header>
		<h1><a href="/" class="logo">SKWAATS!</a> <span class="goodies">Goodies from Mark Bell's <a href="http://supertraining.tv/category/powercast/">Powercast</a></span></h1>
	</header>

	<div id="main">
		<? $data = '[{
			"mark":[{
				"name":"Jim McD"
			}],
			"silentmike":[{
				"name":"Silent Mike"
			}],
			"jimmcd":[{
				"name":"Mark Bell",
				"social":[{
					"instagram":[{
						"url":"http://instagram.com/marksmellybell",
						"icon":"fa-instagram"
					}],
					"facebook":[{
						"url":"https://www.facebook.com/MarkBellSuperTraining",
						"icon":"fa-facebook-square"
					}],
					"twitter":[{
						"url":"https://twitter.com/marksmellybell",
						"icon":"fa-twitter-square"
					}]
				}]
			}]
		}]' ?>

		<section id="mark">
			<h2>Mark Bell 
				<a href="http://instagram.com/marksmellybell" title="Mark Bell on Instagram @marksmellybell"><i class="fa fa-instagram"></i></a>
				<a href="https://www.facebook.com/MarkBellSuperTraining?fref=ts" title="Mark Bell on Facebook"><i class="fa fa-facebook-square"></i></a>
				<a href="https://twitter.com/marksmellybell" title="Mark Bell on Twitter"><i class="fa fa-twitter-square"></i></a>
			</h2>
			<ul class="clips">
				<li>
				<h3 id="theysaiddick">
					<a href="/clips/theysaiddick.mp3">They said "dick!" Did you hear that? It's fucking awesome. I love this show.</a>
					<audio src="/clips/theysaiddick.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=theysaiddick.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="dickdickdickdickkooler">
					<a href="/clips/dickdickdickdickkooler.mp3">Dick, dick, dick, dick, kooler</a>
					<audio src="/clips/dickdickdickdickkooler.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=dickdickdickdickkooler.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="everytimeipee">
					<a href="/clips/everytimeipee.mp3">Every time I pee, I fart, but the opposite isn't true</a>
					<audio src="/clips/everytimeipee.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=everytimeipee.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="reverseperistalsis">
					<a href="/clips/reverseperistalsis.mp3">Reverse peristalsis. Shit coming out yo' mouth</a>
					<audio src="/clips/reverseperistalsis.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=reverseperistalsis.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="goddamn">
					<a href="/clips/goddamn.mp3">God damn!</a>
					<audio src="/clips/goddamn.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=goddamn.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="hoohoo">
					<a href="/clips/hoohoo.mp3">"Fat Owl, how may I help you? Hoo! Hoo!"</a>
					<audio src="/clips/hoohoo.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=hoohoo.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="cumandpoop">
					<a href="/clips/cumandpoop.mp3">Yeah it's a petri dish of cum and poop</a>
					<audio src="/clips/cumandpoop.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=cumandpoop.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="gottapee">
					<a href="/clips/gottapee.mp3">I gotta pee. What do I gotta do</a>
					<audio src="/clips/gottapee.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=gottapee.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="heynow">
					<a href="/clips/heynow.mp3">Hey now...</a>
					<audio src="/clips/heynow.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=heynow.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<!--
				<li>
				<h3 id="heynow-firedup">
					<a href="/clips/heynow-firedup.mp3">Hey now!!!!</a>
					<audio src="/clips/heynow-firedup.mp3" preload="none" controls></audio>
				</h3>
				</li>
				-->
				<li>
				<h3 id="aintnobody">
					<a href="/clips/aintnobody.mp3">Ain't nobody got time for that!</a>
					<audio src="/clips/aintnobody.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=aintnobody.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="asssofat">
					<a href="/clips/asssofat.mp3">Ass so fat let's make a baby</a>
					<audio src="/clips/asssofat.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=asssofat.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="ronnie">
					<a href="/clips/ronnie.mp3">Light weight! yea buddy!</a>
					<audio src="/clips/ronnie.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=ronnie.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="talksomuchshit">
					<a href="/clips/talksomuchshit.mp3">You talk so much shit you don't need a butthole anymore</a>
					<audio src="/clips/talksomuchshit.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=talksomuchshit.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="ladiesgentlemendicklickerson">
					<a href="/clips/ladiesgentlemendicklickerson.mp3">Ladies and gentlemen, Dick Lickerson</a>
					<audio src="/clips/ladiesgentlemendicklickerson.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=ladiesgentlemendicklickerson.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="steroids">
					<a href="/clips/steroids.mp3">Steeerrroids</a>
					<audio src="/clips/steroids.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=steroids.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="snore">
					<a href="/clips/snore.mp3">Fred Flintsone Snore</a>
					<audio src="/clips/snore.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=snore.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="pulpfiction">
					<a href="/clips/pulpfiction.mp3">That paddlefoot, he silly doggy, he thinks totem pole alive! Hahahaha!</a>
					<audio src="/clips/pulpfiction.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=pulpfiction.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="realrecognizereal">
					<a href="/clips/realrecognizereal.mp3">Real recognize real!</a>
					<audio src="/clips/realrecognizereal.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=realrecognizereal.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="besomebody">
					<a href="/clips/besomebody.mp3">I wanna be somebody</a>
					<audio src="/clips/besomebody.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=besomebody.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="gainsomemuclebitch">
					<a href="/clips/gainsomemuclebitch.mp3">You're 175 and you've got abs, fuck you, fucking gain some muscle, bitch</a>
					<audio src="/clips/gainsomemuclebitch.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=gainsomemuclebitch.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="offtheteam">
					<a href="/clips/offtheteam.mp3">You're off the team</a>
					<audio src="/clips/offtheteam.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=offtheteam.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="dickwashuge">
					<a href="/clips/dickwashuge.mp3">That guy's dick was huge!</a>
					<audio src="/clips/dickwashuge.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=dickwashuge.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="theyoutubes">
					<a href="/clips/theyoutubes.mp3">The YouTubes</a>
					<audio src="/clips/theyoutubes.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=theyoutubes.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="talkinaboutthebitches">
					<a href="/clips/talkinaboutthebitches.mp3">We talkin' about the bitches</a>
					<audio src="/clips/talkinaboutthebitches.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=talkinaboutthebitches.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<!--
				<li>
				<h3 id="justadmit">
					<a href="/clips/justadmit.mp3">Just admit to yourself that you are gaining a little bit of weight, gaining a little bit of chub. Get an extra large t-shirt. 2x, 3x, whatever it takes</a>
					<audio src="/clips/justadmit.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=justadmit.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				-->
				<li>
				<h3 id="ohmygod">
					<a href="/clips/ohmygod.mp3">Oh my god</a>
					<audio src="/clips/ohmygod.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=ohmygod.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="practice">
					<a href="/clips/practice.mp3">Practice? We talkin' about practice?</a>
					<audio src="/clips/practice.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=practice.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="dicksize">
					<a href="/clips/dicksize.mp3">That's like saying your dick size and not measuring from your asshole</a>
					<audio src="/clips/dicksize.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=dicksize.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="wrestlingandballs">
					<a href="/clips/wrestlingandballs.mp3">I like where this is going. Wrestling and balls, I'm into it</a>
					<audio src="/clips/wrestlingandballs.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=wrestlingandballs.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="dumbestpodcast">
					<a href="/clips/dumbestpodcast.mp3">Congratulations on this, this is the dumbest podast that we've ever had</a>
					<audio src="/clips/dumbestpodcast.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=dumbestpodcast.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="iloveyou">
					<a href="/clips/iloveyou.mp3">I love you</a>
					<audio src="/clips/iloveyou.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=iloveyou.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
			</ul>
		</section>

		<div class="products">
			<div class="title">Buy some shit! Want to see more? Check out <a href="http://gummymall.com/markbell">Mark Bell's Store</a>!</div>
			<ul>
				<li><a href="http://gummymall.com/markbell/mb-skwaats-racer"><img src="/katie_hogan_skwaat.jpg" alt="Katie Hogan @katiehogan777 on instagram. Skwaat."></a></li>
				<li><a href="http://gummymall.com/markbell/mb-skwaats-tee-black"><img src="/jt_folstad_skwaat.jpg" alt="JT Folstad @jxtx_folstad and Ashley Beaver @livinpaleo on Instagram. Skwaat."></a></li>
				<li><a href="http://gummymall.com/markbell/mb-skwaats-tee"><img src="/rashid_skwaat.jpg" alt="Mike Rashid @mikerashid on Instagram. Skwaat."></a></li>
			</ul>
			<a class="end" href="http://gummymall.com/markbell">Click here for more colors and designs...</a>
		</div>

		<section id="jimmcd">
			<h2>Jim McD 
				<a href="http://instagram.com/jimmcdsttv" title="Jim McDonald on Instagram @jimmcdsttv"><i class="fa fa-instagram"></i></a>
				<a href="https://www.facebook.com/jim.mcd?fref=ts" title="Jim McDonald on Facebook"><i class="fa fa-facebook-square"></i></a>
				<a href="https://twitter.com/jimmcdsttv" title="Jim McDonald on Twitter"><i class="fa fa-twitter-square"></i></a>
			</h2>
			<ul class="clips">
				<li>
				<h3 id="noideahowwegothere">
					<a href="/clips/noideahowwegothere.mp3">I have no idea how we got here. Sorry ladies and gentlemen</a>
					<audio src="/clips/noideahowwegothere.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=noideahowwegothere.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="waynebrady">
					<a href="/clips/waynebrady.mp3">Is Wayne Brady gonna have to slap a bitch?</a>
					<audio src="/clips/waynebrady.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=waynebrady.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="aintgotnoscholarships">
					<a href="/clips/aintgotnoscholarships.mp3">I ain't got no scholarships</a>
					<audio src="/clips/aintgotnoscholarships.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=aintgotnoscholarships.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="putitinyourbutt">
					<a href="/clips/putitinyourbutt.mp3">Let's put it in your butt</a>
					<audio src="/clips/putitinyourbutt.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=putitinyourbutt.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="steroids_jim">
					<a href="/clips/steroids_jim.mp3">Steroids</a>
					<audio src="/clips/steroids_jim.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=steroids_jim.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="ohmy">
					<a href="/clips/ohmy.mp3">Oh my</a>
					<audio src="/clips/ohmy.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=ohmy.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
			</ul>
		</section>

		<div class="products">
			<div class="title">Buy some shit! Want to see more? Check out <a href="http://gummymall.com/markbell">Mark Bell's Store</a>!</div>
			<ul>
				<li><a href="http://gummymall.com/markbell/mb-strength-racer"><img src="/beaver_strength.jpg" alt="Ashley Beaver @livinpaleo on Instagram. Strength is never a weakness."></a></li>
				<li><a href="http://gummymall.com/markbell/mb-off-racer"><img src="/fitdj_offtheteam.jpg" alt="Lauren Pappas @laurenfitdj on Instagram. You're off the team."></a></li>
				<li><a href="http://gummymall.com/markbell/mb-jacked-tee-black"><img src="/jackedtan.jpg" alt="Mark Bell @marksmellybell and Jesse Burdick @jesseburdick on instagram. Jacked and Tan."></a></li>
			</ul>
			<a class="end" href="http://gummymall.com/markbell">Click here for more colors and designs...</a>
		</div>

		<section id="silentmike">
			<h2>Silent Mike 
				<a href="http://instagram.com/silentmikke" title="Silent Mike on Instagram @silentmikke"><i class="fa fa-instagram"></i></a>
				<a href="https://www.facebook.com/michael.farr.982?fref=ts" title="Silent Mike on Facebook"><i class="fa fa-facebook-square"></i></a>
				<a href="https://twitter.com/silentmikke" title="Silent Mike on Twitter"><i class="fa fa-twitter-square"></i></a>
			</h2>
			<ul class="clips">
				<!--
				<li>
				<h3 id="mikenohetero">
					<a href="/clips/mikenohetero.mp3">No hetero</a>
					<audio src="/clips/mikenohetero.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=mikenohetero.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				-->
				<li>
				<h3 id="asianhype">
					<a href="/clips/asianhype.mp3"><em>*dingadingadingdingding*</em></a>
					<audio src="/clips/asianhype.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=asianhype.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="youresofat">
					<a href="/clips/youresofat.mp3">You're so fat, who even thinks of that?</a>
					<audio src="/clips/youresofat.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=youresofat.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="bicepworkout">
					<a href="/clips/bicepworkout.mp3">You wanna hear my bicep workout? "No." Alright</a>
					<audio src="/clips/bicepworkout.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=bicepworkout.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="hashtagpecdeck">
					<a href="/clips/hashtagpecdeck.mp3">#pecdeck</a>
					<audio src="/clips/hashtagpecdeck.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=hashtagpecdeck.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="ilovecrossfit">
					<a href="/clips/ilovecrossfit.mp3">I love crossfit</a>
					<audio src="/clips/ilovecrossfit.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=ilovecrossfit.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="yeahyeahyeah">
					<a href="/clips/yeahyeahyeah.mp3">Yeahyeahyeah</a>
					<audio src="/clips/yeahyeahyeah.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=yeahyeahyeah.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<!--
				<li>
				<h3 id="ladiesandgentlemen">
					<a href="/clips/ladiesandgentlemen.mp3">Ladiiiieeees and gentlemen</a>
					<audio src="/clips/ladiesandgentlemen.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=ladiesandgentlemen.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				-->
				<li>
				<h3 id="mikeskwaat">
					<a href="/clips/mikeskwaat.mp3">Skwaat</a>
					<audio src="/clips/mikeskwaat.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=mikeskwaat.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="youpeople">
					<a href="/clips/youpeople.mp3">You people can do whatever you want, but lift more weights and listen to more of this podcast</a>
					<audio src="/clips/youpeople.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=youpeople.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="paidquarters">
					<a href="/clips/paidquarters.mp3">Everybody thinks I'm ballin', but Mark paid me in quarters yesterday</a>
					<audio src="/clips/paidquarters.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=paidquarters.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="chipotle">
					<a href="/clips/chipotle.mp3">Chipotle is my liiife</a>
					<audio src="/clips/chipotle.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=chipotle.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="skwaats">
					<a href="/clips/skwaats.mp3">S-K-W-A-A-T-S</a>
					<audio src="/clips/skwaats.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=skwaats.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="blackisslimming">
					<a href="/clips/blackisslimming.mp3">"Oh no, no, no, black is slimming..." Not if you're the size of a whale!</a>
					<audio src="/clips/blackisslimming.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=blackisslimming.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="outtaheredeadlift">
					<a href="/clips/outtaheredeadlift.mp3">I'm outta here. I'm gonna go deadlift</a>
					<audio src="/clips/outtaheredeadlift.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=outtaheredeadlift.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="somethingtosay">
					<a href="/clips/somethingtosay.mp3">Oh you got somethin' to say?</a>
					<audio src="/clips/somethingtosay.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=somethingtosay.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="imbadman">
					<a href="/clips/imbadman.mp3">I'm bad, man</a>
					<audio src="/clips/imbadman.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=imbadman.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="hospitalizedabrick">
					<a href="/clips/hospitalizedabrick.mp3">I'm bad, man. Fast. Injured a stone. Hospitalized a brick!</a>
					<audio src="/clips/hospitalizedabrick.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=hospitalizedabrick.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="letstalkaboutsteroids">
					<a href="/clips/letstalkaboutsteroids.mp3">Lets talk about steroids</a>
					<audio src="/clips/letstalkaboutsteroids.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=letstalkaboutsteroids.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="bootyofgods">
					<a href="/clips/bootyofgods.mp3">He's got a booty of the gods</a>
					<audio src="/clips/bootyofgods.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=bootyofgods.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="boomfollow">
					<a href="/clips/boomfollow.mp3">A couple booty shakes in the squat rack... Boom. Follow</a>
					<audio src="/clips/boomfollow.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=boomfollow.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="justintimberlake">
					<a href="/clips/justintimberlake.mp3">Justin Timerlake's amazing</a>
					<audio src="/clips/justintimberlake.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=justintimberlake.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="stayhealthy">
					<a href="/clips/stayhealthy.mp3">Stay healthy!</a>
					<audio src="/clips/stayhealthy.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=stayhealthy.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="goodmorningladies">
					<a href="/clips/goodmorningladies.mp3">Good morning ladies!</a>
					<audio src="/clips/goodmorningladies.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=goodmorningladies.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="chickisjacked">
					<a href="/clips/chickisjacked.mp3">That chick is jacked</a>
					<audio src="/clips/chickisjacked.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=chickisjacked.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="slobs">
					<a href="/clips/slobs.mp3">Most of our listeners are probably slobs sitting at their keyboard</a>
					<audio src="/clips/slobs.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=slobs.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="heynow_mike">
					<a href="/clips/heynow_mike.mp3">Hey now!</a>
					<audio src="/clips/heynow_mike.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=heynow_mike.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
			</ul>
		</section>

		<div class="products">
			<div class="title">Buy some shit! Want to see more? Check out <a href="http://gummymall.com/markbell">Mark Bell's Store</a>!</div>
			<ul>
				<li><a href="http://gummymall.com/markbell/mb-off-tee-black"><img src="/mike_offteam.jpg" alt="Mike Farr @silentmikke on Instagram. You're off the team."></a></li>
				<li><a href="http://gummymall.com/markbell/mb-jacked-racer"><img src="/laurin_jacked.jpg" alt="Laufin Conlin @laurinConlin on Instagram. Jacked and Tan."></a></li>
				<li><a href="http://gummymall.com/markbell/mb-jacked-tank-black"><img src="/stan_jacked.jpg" alt="Stan Efferding @stanefferding on Instagram. Jacked and Tan."></a></li>
			</ul>
			<a class="end" href="http://gummymall.com/markbell">Click here for more colors and designs...</a>
		</div>

		<section id="other">
			<h2>Random</h2>
			<ul class="clips">
				<!--
				<li>
				<h3 id="proteinfart">
					<a href="/clips/proteinfart.mp3">Protein, whaaat? *little farts and a protein fart*</a>
					<audio src="/clips/proteinfart.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=proteinfart.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				-->
				<li>
				<h3 id="hype">
					<a href="/clips/hype.mp3"><em>*dootdootdootdooootdooooot*</em> (Geo hype)</a>
					<audio src="/clips/hype.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=hype.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="silentmikeshutup">
					<a href="/clips/silentmikeshutup.mp3">With a name like Silent Mike, you think he'd just shut up once in a while</a>
					<audio src="/clips/silentmikeshutup.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=silentmikeshutup.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="bigdick">
					<a href="/clips/bigdick.mp3">Come on, come on, big dick, big balls, big dick, yeah</a>
					<audio src="/clips/bigdick.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=bigdick.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="imdicklickerson">
					<a href="/clips/imdicklickerson.mp3">I'm Dick Lickerson, and I'm not wearing any underwear</a>
					<audio src="/clips/imdicklickerson.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=imdicklickerson.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
				<li>
				<h3 id="crossfitters">
					<a href="/clips/crossfitters.mp3">Crossfitters, you fuckers</a>
					<audio src="/clips/crossfitters.mp3" preload="none" controls></audio>
				</h3>
				<a href="/download.php?file=crossfitters.mp3" title="download"><i class="fa fa-download download"></i></a>
				</li>
			</ul>
		</section>
	</div>

	<footer id="footer">
		<p>Email feedback to <a href="mailto:poopmaster@skwaat.com">poopmaster@skwaat.com</a></p>
	</footer>

<? /*
	<a class="buy" href="http://gummymall.com/markbell">Buy a damn <span>SKWAAT</span> t-shirt</a>
	<div id="flexslider">
		<ul class="slides">
			<li><a href="http://gummymall.com/markbell"><img src="/images/mb-skwaats-tee-black-240x240.jpg"></a></li>
			<li><a href="http://gummymall.com/markbell"><img src="/images/MB_JackedAndTan_Tee_black-240x240.jpg"></a></li>
			<li><a href="http://gummymall.com/markbell"><img src="/images/mb-skwaats-tank-hg-240x240.jpg"></a></li>
			<li><a href="http://gummymall.com/markbell"><img src="/images/mb-rather-t-hg-240x240.jpg"></a></li>
			<li><a href="http://gummymall.com/markbell"><img src="/images/mb-skwaats-hoodie-black-240x240.jpg"></a></li>
			<li><a href="http://gummymall.com/markbell"><img src="/images/mb-strength-tee_black-240x240.jpg"></a></li>
			<li><a href="http://gummymall.com/markbell"><img src="/images/mb-yott-tee-black-240x240.jpg"></a></li>
		</ul>
	</div>
	*/ ?>

<script>

	function playAudio(el) {
		var audio = $(el).find('audio')[0],
				pauseClass = 'paused',
				playClass = 'playing',
				waitClass = 'waiting',
				allClasses = pauseClass + ' ' + playClass + ' ' + waitClass,
				id = $(el).attr('id');
		history.pushState(null,null,'#'+id);
		setActive(el);
		$(audio).on('ended',function() {
			$(el).removeClass(allClasses);
			setActive();
		}).on('waiting',function() {
			$(el).removeClass(allClasses).addClass(waitClass);
		}).on('playing',function() {
			$(el).removeClass(allClasses).addClass(playClass);
		});
		/*
		}).on('canplay',function() {
			$(audio).on('playing',function() {
				$(el).removeClass(allClasses).addClass(playClass);
			});
		});
		*/
		if ($(el).hasClass(playClass)) {
			$(el).removeClass(allClasses).addClass(pauseClass);
			audio.pause();
		} else {
			audio.play();
		}
	}

	function setActive(el) {
		$('.clips h3').removeClass('active');
		el && $(el).addClass('active');
	}

	$(function() {
		if (location.hash) {
			var target = $(location.hash);
			setActive(target);
			//playAudio(target);
		}
		$('.clips h3').on('click',function(e) {
			if (! $(this).hasClass('download')) {
				e.preventDefault();
				playAudio(this);
			}
		});
	});

	<? /*
	$(window).load(function() {
		$('#flexslider').flexslider({
			animation: "slide",
			start: function() {
				$('#flexslider').fadeTo('fast',1);
			}
		});
	});
	$(window).on('hashchange',function() {
		var target = $(location.hash);
		playAudio(target);
	});
	*/ ?>

</script>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-62513500-1', 'auto');
ga('send', 'pageview');
</script>
</div>
</body>
</html>
