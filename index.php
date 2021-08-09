<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<div class="fb-login-button" data-width="" data-size="large" data-button-type="continue_with" data-use-continue-as="true" data-layout="rounded" data-auto-logout-link="true" data-use-continue-as="false"></div>

	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v11.0&appId=511453946616385&autoLogAppEvents=1" nonce="G15t0cyK"></script>
	<script>
		window.fbAsyncInit = function() {
			FB.init({
				appId            : '511453946616385',
				autoLogAppEvents : true,
				xfbml            : true,
				version          : 'v11.0'
			});

			// FB.login(function(response) {
			//     if (response.authResponse) {
			//      console.log('Welcome!  Fetching your information.... ');
			//      FB.api('/me', function(response) {
			//        console.log('Good to see you, ' + response.name + '.');
			//      });
			//     } else {
			//      console.log('User cancelled login or did not fully authorize.');
			//     }
			// });
		};
	</script> 
</body>
</html>