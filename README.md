<h1>Simple PHP partial loader class!</h1>

```php
$header = "header.php";
$footer = "footer.php";

$views = new \PPV\Views($root, $header, $footer);

$views->load('homepage.php');

```