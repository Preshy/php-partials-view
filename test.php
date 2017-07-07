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

/* Load body */

$views->load('homepage.php');


?>


