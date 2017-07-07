<?php

/*

Load class

*/

include "src/Views.php";

/* Set root */

$root =  $_SERVER['DOCUMENT_ROOT'];

/* Set partials */

$header = "header.php";
$footer = "footer.php";

/*

Initialize class

*/

$views = new \PPV\Views($root, $header, $footer);

/* Load body via this little url route */

$uri = explode('/', $_SERVER['REQUEST_URI']);

switch($uri[1]){

	case "" : { //homepage
		$views->load('homepage.php');
		break;
	}

	case "about": { //about
		$views->load('about.php');
	}
	
}

?>


