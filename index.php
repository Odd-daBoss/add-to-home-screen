<?php
echo "add-to-home-screen | Test Unit";
?>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="theme-color" content="#536878" />
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title>T2R|ITS</title>
		<link rel="manifest" href="manifest.json">
	</head>

	<body>
		<img src="images/screen.png" alt="Screen Preview" style="width:304px;height:228px;">

	</body>
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
