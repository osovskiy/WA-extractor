<?php

if(!isset($_COOKIE['token'])) {
    header( 'Location: /', true, 303 );

 } 
    // else {
// 	header( 'Location: /import.php', true, 303 );
// }

?>



<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Import WhatsApp</title>
		<meta name="description" content="Demo for the tutorial: Styling and Customizing File Inputs the Smart Way" />
		<meta name="keywords" content="cutom file input, styling, label, cross-browser, accessible, input type file" />
		<meta name="author" content="Osvaldas Valutis for Codrops" />
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="src/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="src/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="src/css/component.css" />
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- remove this if you use Modernizr -->
		<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
	</head>
	<body>


<!-- 						<?php 

$token = $_COOKIE['token'];

include __DIR__.'/ContactFactory.php';

// $contacts = ContactFactory::create($token, 'testname', '2234234', 'asdasdasd@wa.com');

$contacts = ContactFactory::create($token, 'test31', "79251170027", "craft090@ya.ru");

echo $contacts;

			?> -->
			
			<div class="content">

				<div class="box">
<form enctype="multipart/form-data" action="/upload.php" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="3000000000000000000000000" />
    <input type="file" name="file-1[]" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple />
    					<label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>???????? ?? WhatsApp Export</span></label>
					<br>
    <button type="submit" id="import" href="#" class="button">????????????</button> 
</form>

					



			</div>
			<a href="logout.php" class="button primary" style="position: fixed; top: 20px; right: 20px">??????????</a>
		</div>

		<script src="src/js/custom-file-input.js"></script>

	</body>
</html>
