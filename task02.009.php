<?php

$string = '$123,34.00A';
echo preg_replace ("/[^0-9]/", "", $string);
