<?php 
require_once "testrequire.php";
include "variableScope.php";
// posisi penempatan di atas 

// require = require akan memproduksi fatal error
// include = include akan memproduksi error warning
// +_once = hanya meng-load 1x file tersebut di load

echo sayHello("Fazl", "" . PHP_EOL);
echo $name;

?>