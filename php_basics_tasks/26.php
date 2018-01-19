<?php
/**
 * Объявите константу DAYS_COUNT равную 7 и константу MONTH_COUNT равную 12
 * двумя разными способами объявления констант.
 */

CONST DAYS_COUNT = 7;
define ( "MONTH_COUNT", 12 );

var_dump( DAYS_COUNT );
echo "<br>";
var_dump( MONTH_COUNT );