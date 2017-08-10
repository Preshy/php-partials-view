<h1>Simple PHP partial loader class!</h1>

```php
$root =  $_SERVER['DOCUMENT_ROOT'];
$header = "header.php";
$footer = "footer.php";

$views = new \PPV\Views($root, $header, $footer);

$views->load('homepage.php');

```
