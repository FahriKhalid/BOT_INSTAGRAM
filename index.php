<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<script>
		window.fbAsyncInit = function() {
			FB.init({
				appId            : '511453946616385',
				autoLogAppEvents : true,
				xfbml            : true,
				version          : 'v11.0'
			});

			FB.ui({
				method: 'share',
				href: 'https://developers.facebook.com/docs/'
			}, function(response){});
		};
	</script>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
	<script type="text/javascript">

	</script>
</body>
</html>