<?php echo 'Hello World Fin'; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="robots" content="follow" />

		<title>Page Title</title>

		<base href="/" />
		<!-- UIkit CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.21.13/dist/css/uikit.min.css" />
	</head>
	<body>
		<!-- UIkit JS -->
		<script src="https://cdn.jsdelivr.net/npm/uikit@3.21.13/dist/js/uikit.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/uikit@3.21.13/dist/js/uikit-icons.min.js"></script>

		<div class="uk-section uk-container">
			<div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid="">
				<form class="uk-form-stacked js-login">
				    <div class="uk-margin">
				        <label class="uk-form-label" for="form-stacked-text">E-Mail</label>
				        <div class="uk-form-controls">
				            <input class="uk-input" id="form-stacked-text" type="email" required="required" placeholder="email@domain.com" />
				        </div>
				    </div>
				    <div class="uk-margin">
				        <label class="uk-form-label" for="form-stacked-text">Password</label>
				        <div class="uk-form-controls">
				            <input class="uk-input" id="form-stacked-text" type="password" required="required" placeholder="Enter Password" />
				        </div>
				    </div>
				    <button class="uk-button uk-button-default" type="submit">Login</button>
				</form>
			</div>
		</div>
	</body>
</html>