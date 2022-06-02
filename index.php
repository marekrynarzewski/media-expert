<html>
<body>
<pre>
<?php

require_once 'vendor/autoload.php';

use PHPUnit\TextUI\Command;

echo '<pre>';

$command = new Command();
$command->run(['phpunit', '--debug']);
?>
</pre>
</body>
</html>