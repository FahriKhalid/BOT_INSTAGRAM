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

			FB.login(function(response) {
			    if (response.authResponse) {
			     console.log('Welcome!  Fetching your information.... ');
			     FB.api('/me', function(response) {
			       console.log('Good to see you, ' + response.name + '.');
			     });
			    } else {
			     console.log('User cancelled login or did not fully authorize.');
			    }
			});
		};
	</script>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
	<script type="text/javascript">

	</script>
</body>
</html>