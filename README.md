Simple PHP partial loader class!

"""
$header = "header.php";
$footer = "footer.php";

$views = new \PPV\Views($root, $header, $footer);

$views->load('homepage.php');

"""