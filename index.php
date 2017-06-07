<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />

	<!-- 1/4) Set color -->
		<meta name="theme-color" content="#536878" />

		<meta name=viewport content="width=device-width, initial-scale=1.0">

	<!-- 2/4) Identical title here, manifest.html - short_name and name -->
		<title>T2R|ITS</title>

		<link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet'>
		<style>
		body {
    	font-family: 'Dosis';font-size: 22px;
		}
		</style>

	<!-- Leave out the use of css
		<link rel="stylesheet" href="frontpage.css">
		<link rel="stylesheet" media="screen and (min-width: 550px)" href="frontpage-medium.css">
		<link rel="stylesheet" media="screen and (min-width: 700px)" href="frontpage-large.css">
	-->

	<!-- 3/4) Add this manifest.json -->
		<link rel="manifest" href="manifest.json">

	</head>

	<body>
		<?php
		echo "add-to-home-screen | Test Unit";
		?>

		<picture>
			<source srcset="images/screen_small.png">
			<source srcset="images/screen_midsize.png" media="screen and (min-width: 550px)">
			<source srcset="images/screen_large.png" media="screen and (min-width: 700px)">
			<img src="images/screen_large.png" alt="Screen Preview" style="width: auto;">
		</picture>

		<p>add-to-home-screen | ITS</p>
	</body>

	<!-- 4/4) Add this script -->
	<script>
		if ('serviceWorker' in navigator) {
			console.log("Will service worker register?");
			navigator.serviceWorker.register('service-worker.js').then(function(reg) {
				console.log("Yes it did.");
			}).catch(function(err) {
				console.log("No it didn't. This happened: ", err)
			});
		}
	</script>

</html>
