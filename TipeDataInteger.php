<?php 

//integer

echo "Decimal : ";
var_dump(1234);

echo "Octal : ";
var_dump(0123);

echo "HexaDecimal : ";
var_dump(0x1A);

echo "Binary : ";
var_dump(0b111111);

echo "UnderScore Di Number : ";
var_dump(1_000_000);

//Float

echo "Floating Point : ";
var_dump(1.234);

echo "Floating Point Dengan E notation plus (1.2 x 1000) : ";
var_dump(1.2e3);

echo "Floating Point Dengan E notation minus (7 x 0.0001) : ";
var_dump(7e-4);

echo "UnderScore di Floating Point : ";
var_dump(1_234.567);

//Integer Overflow (Batas Integer) v64bit

echo "Integer Overflow : ";
var_dump(9223372036854775807);

?>