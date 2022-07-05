<pre>
<?php
require_once ("vendor/autoload.php");
// require_once ("autoload.php"); // Было у нас
use Niny\Class1 as Niny;
use Pv021\Class1 as Pv;



$v = new \Niny\Class1();
echo $v;

$v2 = new \Pv021\Class1();
echo $v2;

$v3 = new Niny();
echo $v3;

$v4 = new Pv();
echo $v4;
?>
</pre>
